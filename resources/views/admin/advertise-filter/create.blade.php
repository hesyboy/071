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
                    ثبت فیلتر جدید
                </div>
            </div>
        </div>
        <div>
            <a href="{{route('admin.advertise.filters.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded hover:bg-firooze-300 ">بازگشت به فیلترها   </a>
        </div>
    </div>
</div>
    <div class=" my-3  ">



        <div class="flex items-center">



            <div class="w-full">

                <div class="mt-3">
                    <form action="{{route('admin.advertise.filters.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="w-full flex flex-col gap-5">


                            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">

                                <div class="flex w-full flex-col md:flex-row gap-3">
                                    <div class="w-full md:w-3/12">
                                        <div class="text-sm">
                                            <span>عنوان فیلتر   </span>
                                            @error('title')
                                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <input name="title" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400"
                                         type="text" value="{{old('title')}}">
                                    </div>

                                    <div class="w-full md:w-3/12">
                                        <div class="text-sm">
                                            <span>نوع فیلتر  </span>
                                            @error('filter_type')
                                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <select name="filter_type" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                                            <option value="0">متنی / عددی </option>
                                            <option value="1">انتخابی </option>
                                            <option value="2">چک باکس </option>
                                        </select>
                                    </div>

                                    <div class="w-full md:w-3/12">
                                        <div class="text-sm">
                                            <span>دسته بندی فیلتر  </span>
                                            @error('category_id')
                                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <select name="category_id" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                                            <option value="">انتخاب کنید</option>
                                            @foreach ($advertiseCategories as $item)
                                                <option value={{$item->id}}>{{$item->title}} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                            </div>




                            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">

                                <div class="flex w-full flex-col md:flex-row gap-3">
                                    <div class="w-full md:w-3/12">
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

                                </div>
                            </div>












                            <div>
                                <div class="bg-gray-800 h-4 rounded"></div>


                                <div class="flex justify-end gap-3 items-center mt-2">
                                    <div class="mt-2">
                                        <button type="submit" class=" text-sm text-center py-2 px-4 bg-emerald-600 hover:bg-emerald-700 text-gray-100 rounded  ">افزودن فیلتر جدید </button>
                                    </div>
                                    <div class="mt-2">
                                        <a href="{{route('admin.advertise.filters.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded  ">انصراف </a>
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


