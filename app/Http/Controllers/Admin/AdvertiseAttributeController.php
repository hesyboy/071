<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdvertiseAttribute;
use App\Models\AdvertiseFilter;
use Illuminate\Http\Request;

class AdvertiseAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes=AdvertiseAttribute::all();
        return view('admin.advertise-attribute.index',compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filters=AdvertiseFilter::all();
        return view('admin.advertise-attribute.create',compact('filters'));
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
            'value' => 'required',
            'filter_id' => 'required',
            'order' => 'required',
        ]);

        $attribute=new AdvertiseAttribute();
        $attribute->value = $request->value;
        $attribute->filter_id = $request->filter_id;
        $attribute->order = $request->order;
        $attribute->save();

        return redirect()->route('admin.advertise.attributes.index')->with('msg','مقدار جدید با موفقیت ساخته شد');
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
    public function edit(AdvertiseAttribute $attribute)
    {
        $filters=AdvertiseFilter::all();
        return view('admin.advertise-attribute.edit',compact('attribute','filters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,AdvertiseAttribute $attribute)
    {
        $validated=$request->validate([
            'value' => 'required',
            'filter_id' => 'required',
            'order' => 'required',
        ]);

        $attribute->value = $request->value;
        $attribute->filter_id = $request->filter_id;
        $attribute->order = $request->order;
        $attribute->save();

        return redirect()->route('admin.advertise.attributes.index')->with('msg','تغییرات مقدار با موفقیت ساخته شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(AdvertiseAttribute $attribute)
    {
        $attribute->delete();
        return redirect()->route('admin.advertise.attributes.index')->with('msg','مقدار مورد نظر با موفقیت حذف شد');
    }
}
