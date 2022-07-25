<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentCategory;
use Illuminate\Http\Request;

class ContentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $factory=ContentCategory::factory()->count(5)->create();

        $totalContentCategories=ContentCategory::all();
        $contentCategories=ContentCategory::sortable()->paginate(10);
        return view('admin.content.category.index',compact('contentCategories','totalContentCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contentCategories=ContentCategory::all();
        return view('admin.content.category.create',compact('contentCategories'));
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
            'description' => ['required'],
            'seo_title' => ['required','max:30'],
            'seo_description' => ['max:40'],
        ]);

        $contentCategory=ContentCategory::create([
            'title' => $request->title,
            'description' => $request->description,
            'parent_id' => $request->parent_id,
            'seo_title' => $request->seo_title,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.blog.categories.index')->with('msg','دسته مطالب جدید با موفقیت ساخته شد');



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
    public function edit($id)
    {
        $contentCategories=ContentCategory::all();
        $contentCategory=ContentCategory::find($id);
        return view('admin.content.category.edit',compact('contentCategories','contentCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContentCategory $contentCategory,Request $request)
    {
        $validated=$request->validate([
            'title' => ['required','max:30'],
            'description' => ['required'],
            'seo_title' => ['required','max:30'],
        ]);

        $contentCategory->title=$request->title;
        $contentCategory->description=$request->description;
        $contentCategory->seo_title=$request->seo_title;
        $contentCategory->seo_description=$request->seo_description;
        $contentCategory->parent_id=$request->parent_id;
        $contentCategory->status=$request->status;


        $contentCategory->update();
        return redirect()->route('admin.blog.categories.index')->with('msg','تغییرات دسته مطالب با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(ContentCategory $ContentCategory){
        // dd($ContentCategory);
        $ContentCategory->delete();
        return redirect()->route('admin.blog.categories.index')->with('msg','دسته مطالب مورد نظر با موفقیت حذف شد');
    }
}
