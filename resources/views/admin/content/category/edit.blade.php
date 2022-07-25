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
                    ثبت تغییرات دسته بندی مطالب
                </div>
            </div>
        </div>
        <div>
            <a href="{{route('admin.blog.categories.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded hover:bg-firooze-300 ">بازگشت به دسته بندی های مطالب </a>
        </div>
    </div>
</div>
    <div class=" my-3  ">



        <div class="flex items-center">



            <div class="w-full">

                <div class="mt-3">
                    <form action="{{route('admin.blog.categories.update',$contentCategory)}}" method="post">
                        @csrf
                        @method('put')
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
                                         type="text" value="{{old('title',$contentCategory->title)}}">
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
                                            @foreach ($contentCategories as $item)
                                                <option value={{$item->id}} @if ($contentCategory->parent_id == $item->id)
                                                    selected
                                                @endif>{{$item->title}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
{{--
                                <div class="w-full md:w-6/12" x-data="showImage()">
                                    <div class="text-sm my-3">
                                        <span> آیکون دسته بندی </span>
                                        @error('icon')
                                        <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="flex gap-3 items-center">
                                        <div class="w-24 h-24 border-2 border-dashed rounded-lg p-1 mb-3 relative">
                                            <img id="preview" class="rounded-lg w-32 max-h-32"  src="{{asset('/images/simple.jpg')}}">
                                            <ion-icon name="add-outline" class="text-6xl text-gray-200 absolute top-4 w-20 text-center"></ion-icon>
                                        </div>
                                        <label class="flex gap-3 items-center px-4 py-2 bg-blue-600 text-white rounded shadow-md tracking-wide uppercase border cursor-pointer hover:bg-blue-700 hover:text-white text-blue-600 ease-linear transition-all duration-150">
                                            <ion-icon class="text-xl" name="cloud-upload-outline"></ion-icon>
                                            <span class=" text-sm leading-normal">آپلود لوگو</span>
                                            <input name="icon" type="file" class="hidden" @change="showPreview(event)" />
                                        </label>

                                        <script>
                                            function showImage() {
                                                return {
                                                    showPreview(event) {
                                                        if (event.target.files.length > 0) {
                                                            var src = URL.createObjectURL(event.target.files[0]);
                                                            var preview = document.getElementById("preview");
                                                            preview.src = src;
                                                            preview.style.display = "block";
                                                        }
                                                    }
                                                }
                                            }
                                        </script>
                                    </div>

                                </div> --}}

                                <div class="w-full md:w-12/12">
                                    <div class="text-sm mb-2">
                                        <span>توضیحات دسته بندی  </span>
                                        @error('description')
                                        <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                     <textarea name="description" rows="5"  class="px-2 py-1 my-2 rounded text-sm w-full border bg-gray-50 border-gray-400">{{old('description',$contentCategory->description)}}</textarea>
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
                                         type="text" value="{{old('seo_title',$contentCategory->seo_title)}}">
                                    </div>

                                    <div class="w-full md:w-8/12">
                                        <div class="text-sm">
                                            <span>توضیحات سئو </span>
                                            @error('seo_description')
                                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <input name="seo_description" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400"
                                         type="text" value="{{old('seo_description',$contentCategory->seo_description)}}">
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
                                            <option value="1"  @if ($contentCategory->status == 1)
                                                selected
                                            @endif>فعال</option>
                                            <option value="0"  @if ($contentCategory->status == 0)
                                                selected
                                            @endif>غیر فعال </option>
                                        </select>
                                    </div>


                                </div>
                            </div>












                            <div>
                                <div class="bg-gray-800 h-4 rounded"></div>


                                <div class="flex justify-end gap-3 items-center mt-2">
                                    <div class="mt-2">
                                        <button type="submit" class=" text-sm text-center py-2 px-4 bg-emerald-600 hover:bg-emerald-700 text-gray-100 rounded  ">ثبت تغییرات دسته بندی </button>
                                    </div>
                                    <div class="mt-2">
                                        <a href="{{route('admin.blog.categories.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded  ">انصراف </a>
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
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>


<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script> --}}



@endsection
