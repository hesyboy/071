@extends('admin.layouts.master')

@section('body')
    <div class=" p-3  ">



        <div class="flex items-center">
            <div class="w-full">
                <div class="mb-3">
                    <div class="text-lg font-bold py-2">تغییرات دسته بندی </div>
                </div>
                <hr>
                <div class="mt-3">
                    <form action="{{route('admin.advertise-categories.update',$advertisecategory)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="flex flex-col gap-5">


                            <div class="flex flex-col md:flex-row gap-3">

                                <div class="w-full md:w-3/12">
                                    <div class="text-sm">
                                        <span>عنوان دسته بندی  </span>
                                        @error('title')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input name="title" class="px-2 py-2 my-2 rounded-lg text-sm w-full"
                                     type="text" value="{{old('title',$advertisecategory->title)}}">
                                </div>

                                <div class="w-full md:w-3/12">
                                    <div class="text-sm">
                                        <span> آیکون  </span>
                                        <span class="text-xs text-blue-500">
                                            <a href="https://ionic.io/ionicons" target="_blank"> ( ion icons )</a>
                                        </span>
                                        @error('icon')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input name="icon" class="px-2 py-2 my-2 rounded-lg text-sm w-full"
                                     type="text" value="{{old('icon',$advertisecategory->icon)}}">
                                </div>
                            </div>


                            <hr>

                            <div class="flex flex-col md:flex-row gap-3">
                                <div class="w-full md:w-6/12">
                                    <div class="text-sm">
                                        <span>توضیحات دسته بندی  </span>
                                        @error('description')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                     <textarea name="description" cols="30" rows="5"  class="px-2 py-2 my-2 rounded-lg text-sm w-full">{{$advertisecategory->description}}</textarea>
                                </div>
                            </div>

                            <hr>

                            <div class="flex flex-col md:flex-row gap-3">
                                <div class="w-full md:w-3/12">
                                    <div class="text-sm">
                                        <span>دسته والد  </span>
                                        @error('parent_id')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <select name="parent_id" class="px-2 py-2 my-2 rounded-lg text-sm w-full">
                                        <option value="0">دسته اصلی </option>
                                        @foreach ($advertiseCategories as $item)
                                            <option value={{$item->id}}>{{$item->title}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="w-full md:w-3/12">
                                    <div class="text-sm">
                                        <span>وضعبت  </span>
                                        @error('status')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <select name="status" class="px-2 py-2 my-2 rounded-lg text-sm w-full">
                                        <option value="1">فعال</option>
                                        <option value="0">غیر فعال </option>
                                    </select>
                                </div>
                            </div>

                            <hr>



                            <div class="mt-5">
                                <button class=" text-sm text-center py-2 px-4 bg-green-700 text-white rounded-lg hover:bg-firooze-300 ">افزودن دسته جدید </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




    </div>



@endsection
