<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;
use Illuminate\Http\Request;

class AdvertiseAreaController extends Controller
{
    public function index(){
        $areas=Area::all();
        return view('admin.advertise-area.index',compact('areas'));
    }


    public function create(){
        $cities=City::all();
        return view('admin.advertise-area.create',compact('cities'));
    }

    public function store(Request $request){
        $validated=$request->validate([
            'name' => ['required','max:25'],
            'status' => ['required'],
            'city_id' => ['required'],
        ]);

        $area=Area::create([
            'name' => $request->name,
            'status' => $request->status,
            'city_id' => $request->city_id,
        ]);

        return redirect()->route('admin.advertise.areas.index')->with('msg','محله جدید با موفقیت ساخته شد');
    }





    public function edit(Area $area){
        $cities=City::all();
        return view('admin.advertise-area.edit',compact('cities','area'));
    }





    public function update(Area $area,Request $request){

        $validated=$request->validate([
            'name' => ['required','max:25'],
            'status' => ['required'],
            'city_id' => ['required'],
        ]);

        $area->name=$request->name;
        $area->status=$request->status;
        $area->city_id=$request->city_id;
        $area->save();

        return redirect()->route('admin.advertise.areas.index')->with('msg','تغییرات محله با موفقیت انجام شد');
    }




    public function delete(Area $area){
        $area->delete();
        return redirect()->route('admin.advertise.areas.index')->with('msg','محله مورد نظر با موفقیت حذف شد');
    }
}
