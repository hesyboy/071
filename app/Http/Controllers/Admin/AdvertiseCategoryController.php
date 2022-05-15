<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdvertiseCategory;
use Illuminate\Http\Request;

class AdvertiseCategoryController extends Controller
{
    public function index(){
        $advertiseCategories=AdvertiseCategory::all();
        return view('admin.advertise-category.index',compact('advertiseCategories'));
    }


    public function create(){
        $advertiseCategories=AdvertiseCategory::all();
        return view('admin.advertise-category.create',compact('advertiseCategories'));
    }

    public function store(Request $request){
        $validated=$request->validate([
            'title' => ['required','max:25'],
        ]);
        $file=$request->file('icon');
        $fileExtention=$request->file('icon')->getClientOriginalExtension();
        $fileName=rand(1,1000).time().'.'.$fileExtention;
        $file->storeAs('public/adv-cat-icon',$fileName);
        // dd($file);
        $advertiseCategory=AdvertiseCategory::create([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => 'storage/adv-cat-icon/'.$fileName,
            'parent_id' => $request->parent_id,
            'status' => $request->status,
        ]);
        return redirect()->route('admin.advertise-categories.index')->with('msg','دسته جدید با موفقیت ساخته شد');
    }

    public function edit(AdvertiseCategory $advertisecategory){
        $advertiseCategories=AdvertiseCategory::all();
        return view('admin.advertise-category.edit',compact('advertisecategory','advertiseCategories'));
    }


    public function delete(AdvertiseCategory $advertisecategory){
        $advertisecategory->delete();
        return redirect()->route('admin.advertise-categories.index')->with('msg','دسته بندی مورد نظر با موفقیت حذف شد');
    }
}
