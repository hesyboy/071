<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class AdvertiseCityController extends Controller
{
    public function index(){
        $cities=City::all();
        return view('admin.advertise-city.index',compact('cities'));
    }


    public function create(){
        return view('admin.advertise-city.create');
    }

    public function store(Request $request){
        $validated=$request->validate([
            'name' => ['required','max:25'],
            'status' => ['required'],
        ]);




        $city=City::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.advertise.cities.index')->with('msg','شهر جدید با موفقیت ساخته شد');
    }



    public function edit(City $city){
        return view('admin.advertise-city.edit',compact('city'));
    }

    public function update(City $city,Request $request){

        $validated=$request->validate([
            'name' => ['required','max:25'],
            'status' => ['required'],
        ]);

        $city->name=$request->name;
        $city->status=$request->status;


        $city->save();
        return redirect()->route('admin.advertise.cities.index')->with('msg','تغییرات شهر با موفقیت انجام شد');
    }

    public function delete(City $city){
        $city->delete();
        return redirect()->route('admin.advertise.cities.index')->with('msg','شهر مورد نظر با موفقیت حذف شد');
    }
}
