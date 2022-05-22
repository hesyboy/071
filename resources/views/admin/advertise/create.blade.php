@extends('admin.layouts.master')

@section('headtag')
@endsection
@section('body')


<div class="p-2 shadow rounded bg-white  ">
    <div class="flex gap-3 items-center justify-between">
        <div class="flex gap-3 items-center">
            <div class="">
                <img class="h-16" src="{{asset('images/add.svg')}}" alt="">
            </div>
            <div class="py-2 text-gray-800">
                <div class="text-xl font-bold">
                    ثبت دسته بندی جدید
                </div>
            </div>
        </div>
        <div>
            <a href="{{route('admin.advertise.categories.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded hover:bg-firooze-300 ">بازگشت به دسته بندی ها </a>
        </div>
    </div>
</div>
    <div class=" my-3  ">



        <div class="flex items-center">



            <div class="w-full">

                <div class="mt-3">
                    <form action="{{route('admin.advertise.categories.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="w-full flex flex-col gap-5">


                            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">

                                <div class="flex w-full flex-col md:flex-row gap-3">
                                    <div class="w-full md:w-6/12">
                                        <div class="text-sm">
                                            <span>عنوان دسته بندی  </span>
                                            @error('title')
                                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <input name="title" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400"
                                         type="text" value="{{old('title')}}">
                                    </div>

                                    <div class="w-full md:w-6/12">
                                        <div class="text-sm">
                                            <span>دسته والد  </span>
                                            @error('parent_id')
                                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <select name="parent_id" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                                            <option value="">دسته اصلی </option>
                                            @foreach ($advertiseCategories as $item)
                                                <option value={{$item->id}}>{{$item->title}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="w-full md:w-6/12">
                                    <div class="text-sm">
                                        <span> آیکون دسته بندی </span>
                                        @error('icon')
                                        <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input name="icon" class="px-2 py-2 my-2 rounded text-sm w-full border bg-gray-50 border-gray-400"
                                     type="file" value="{{old('icon')}}">
                                </div>

                                <div class="w-full md:w-12/12">
                                    <div class="text-sm mb-2">
                                        <span>توضیحات دسته بندی  </span>
                                        @error('description')
                                        <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                     <textarea name="description" rows="5"  class="px-2 py-1 my-2 rounded text-sm w-full border bg-gray-50 border-gray-400"></textarea>
                                </div>

                            </div>


                            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">

                                <div class="flex w-full flex-col md:flex-row gap-3">
                                    <div class="w-full md:w-4/12">
                                        <div class="text-sm">
                                            <span>عنوان سئو </span>
                                            @error('seo_title')
                                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <input name="seo_title" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400"
                                         type="text" value="{{old('seo_title')}}">
                                    </div>

                                    <div class="w-full md:w-8/12">
                                        <div class="text-sm">
                                            <span>توضیحات سئو </span>
                                            @error('seo_description')
                                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <input name="seo_description" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400"
                                         type="text" value="{{old('seo_description')}}">
                                    </div>
                                </div>
                            </div>


                            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">

                                <div class="flex w-full flex-col md:flex-row gap-3">
                                    <div class="w-full md:w-6/12">
                                        <div class="text-sm">
                                            <span>وضعیت  </span>
                                            @error('status')
                                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <select name="status" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                                            <option value="1">فعال</option>
                                            <option value="0">غیر فعال </option>
                                        </select>
                                    </div>

                                    <div class="w-full md:w-6/12">
                                        <div class="text-sm">
                                            <span>ترتیب قرارگیری در منو  </span>
                                            @error('menu_order')
                                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                         <select name="menu_order" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>












                            <div>
                                <div class="bg-gray-800 h-4 rounded"></div>


                                <div class="flex justify-end gap-3 items-center mt-2">
                                    <div class="mt-2">
                                        <button type="submit" class=" text-sm text-center py-2 px-4 bg-emerald-600 hover:bg-emerald-700 text-gray-100 rounded  ">افزودن دسته جدید </button>
                                    </div>
                                    <div class="mt-2">
                                        <a href="{{route('admin.advertise.categories.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded  ">انصراف </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>




    </div>



@endsection

@section('script')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>


<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
