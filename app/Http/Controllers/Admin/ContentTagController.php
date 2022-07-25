<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentTag;
use Illuminate\Http\Request;

class ContentTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $factory=ContentTag::factory()->count(5)->create();
        $totalContentTags=ContentTag::all();
        $contentTags=ContentTag::sortable()->paginate(10);
        return view('admin.content.tag.index',compact('contentTags','totalContentTags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.tag.create');
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
            'title' => ['required','max:30'],
            'seo_title' => ['max:30'],
            'seo_description' => ['max:40'],
            'status' => ['required'],
        ]);

        $contentTag=ContentTag::create([
            'title' => $request->title,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.blog.tags.index')->with('msg','تگ جدید مطالب با موفقیت ساخته شد');
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
    public function edit(ContentTag $contentTag)
    {
        return view('admin.content.tag.edit',compact('contentTag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContentTag $contentTag)
    {
        $validated=$request->validate([
            'title' => ['required','max:30'],
            'seo_title' => ['max:30'],
        ]);

        $contentTag->title=$request->title;
        $contentTag->seo_title=$request->seo_title;
        $contentTag->seo_description=$request->seo_description;
        $contentTag->status=$request->status;


        $contentTag->update();
        return redirect()->route('admin.blog.tags.index')->with('msg','تغییرات تگ مطالب با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(ContentTag $contentTag){
        $contentTag->delete();
        return redirect()->route('admin.blog.tags.index')->with('msg','تگ مطالب مورد نظر با موفقیت حذف شد');
    }
}
