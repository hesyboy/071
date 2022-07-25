<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdvertiseCategory;
use App\Models\AdvertiseFilter;
use Illuminate\Http\Request;

class AdvertiseFilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filters=AdvertiseFilter::all();
        return view('admin.advertise-filter.index',compact('filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advertiseCategories=AdvertiseCategory::all();
        return view('admin.advertise-filter.create',compact('advertiseCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'title' => 'required',
            'filter_type' => 'required',
            'category_id' => 'required',
            'status' => 'required',
        ]);

        $advertiseFilter=new AdvertiseFilter();

        $advertiseFilter->title = $request->title;
        $advertiseFilter->filter_type = $request->filter_type;
        $advertiseFilter->category_id = $request->category_id;
        $advertiseFilter->status = $request->status;

        $advertiseFilter->save();

        return redirect()->route('admin.advertise.filters.index')->with('msg','فیلتر جدید با موفقیت ساخته شد');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvertiseFilter $filter)
    {
        $advertiseCategories=AdvertiseCategory::all();
        return view('admin.advertise-filter.edit',compact('filter','advertiseCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvertiseFilter $filter)
    {
        $validated=$request->validate([
            'title' => 'required',
            'filter_type' => 'required',
            'category_id' => 'required',
            'status' => 'required',
        ]);



        $filter->title = $request->title;
        $filter->filter_type = $request->filter_type;
        $filter->category_id = $request->category_id;
        $filter->status = $request->status;

        $filter->save();

        return redirect()->route('admin.advertise.filters.index')->with('msg','تغییرات فیلتر با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(AdvertiseFilter $filter)
    {
        $filter->delete();
        return redirect()->route('admin.advertise.filters.index')->with('msg','فیلتر مورد نظر با موفقیت حذف شد');
    }
}
