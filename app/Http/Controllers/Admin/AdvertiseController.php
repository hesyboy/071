<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertise;

class AdvertiseController extends Controller
{
    public function index(){
        $Advertises=Advertise::all();
        return view('admin.advertise.index',compact('Advertises'));
    }


    public function create(){
        return view('admin.advertise.create');
    }
}
