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
            'icon' => ['image','mimes:png,jpg','max:2048'],
        ]);




        $advertiseCategory=AdvertiseCategory::create([
            'title' => $request->title,
            'description' => $request->description,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'menu_order' => $request->menu_order,
            'parent_id' => $request->parent_id,
            'status' => $request->status,
        ]);
        if($request->hasFile('icon')){
            $file=$request->file('icon');
            $fileExtention=$request->file('icon')->getClientOriginalExtension();
            $fileName=rand(1,1000).time().'.'.$fileExtention;
            $file->storeAs('public/adv-cat-icon',$fileName);
            $advertiseCategory->icon='storage/adv-cat-icon/'.$fileName;
            $advertiseCategory->save();
        }
        return redirect()->route('admin.advertise.categories.index')->with('msg','دسته جدید با موفقیت ساخته شد');
    }

    public function edit(AdvertiseCategory $advertisecategory){
        $advertiseCategories=AdvertiseCategory::all();
        return view('admin.advertise-category.edit',compact('advertisecategory','advertiseCategories'));
    }


    public function update(AdvertiseCategory $advertisecategory,Request $request){

        $validated=$request->validate([
            'title' => ['required','max:25'],
            'icon' => ['image','mimes:png,jpg','max:2048'],
        ]);

        $advertisecategory->title=$request->title;
        $advertisecategory->description=$request->description;
        $advertisecategory->seo_title=$request->seo_title;
        $advertisecategory->seo_description=$request->seo_description;
        $advertisecategory->menu_order=$request->menu_order;
        $advertisecategory->parent_id=$request->parent_id;
        $advertisecategory->status=$request->status;

        if($request->hasFile('icon')){
            $file=$request->file('icon');
            $fileExtention=$request->file('icon')->getClientOriginalExtension();
            $fileName=rand(1,1000).time().'.'.$fileExtention;
            $file->storeAs('public/adv-cat-icon',$fileName);
            $advertisecategory->icon='storage/adv-cat-icon/'.$fileName;
        }

        $advertisecategory->save();
        return redirect()->route('admin.advertise.categories.index')->with('msg','تغییرات دسته با موفقیت انجام شد');
    }


    public function delete(AdvertiseCategory $advertisecategory){
        $advertisecategory->delete();
        return redirect()->route('admin.advertise.categories.index')->with('msg','دسته بندی مورد نظر با موفقیت حذف شد');
    }
}
