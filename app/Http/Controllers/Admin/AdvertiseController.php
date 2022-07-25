<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertise;
use App\Models\AdvertiseCategory;
use App\Models\Area;
use App\Models\City;

class AdvertiseController extends Controller
{
    public function index(){
        $Advertises=Advertise::all();
        return view('admin.advertise.index',compact('Advertises'));
    }


    public function create(){
        return view('admin.advertise.create');
    }

    public function edit(Advertise $advertise){
        return view('admin.advertise.edit',compact('advertise'));
    }

    public function delete(Advertise $advertise){
        $advertise->delete();
        return redirect()->route('admin.advertise.index')->with('msg','آگهی مورد نظر با موفقیت حذف شد');
    }

    public function report(){
        $Advertises=Advertise::all();
        $advertiseCategories=AdvertiseCategory::all();
        $cities=City::all();
        $areas=Area::all();
        return view('admin.advertise.report',compact('Advertises','advertiseCategories','cities','areas'));
    }
}
