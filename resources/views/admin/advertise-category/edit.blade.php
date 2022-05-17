@extends('admin.layouts.master')

@section('headtag')
@endsection
@section('body')

<div class="">
    <div class=" text-xl font-bold py-2 text-gray-800">تغییرات دسته بندی </div>
    <hr>
</div>
    <div class=" p-3  ">




        <div class="flex items-center">
            <div  class="w-full md:w-2/5 p-5">

                <div class="p-5">
                    <img src="{{asset('images/edit-category.svg')}}" alt="">
                </div>
            </div>


            <div class="w-full md:w-3/5">
                {{-- <div class="mb-3">
                    <div class="text-lg font-bold py-2">ثبت دسته بندی جدید</div>
                </div> --}}
                {{-- <hr> --}}
                <div class="mt-3">
                    <form action="{{route('admin.advertise-categories.update',$advertisecategory)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="w-full flex flex-col gap-3">


                            <div class="flex flex-col md:flex-row gap-3">

                                <div class="w-full md:w-6/12">
                                    <div class="text-sm">
                                        <span>عنوان دسته بندی  </span>
                                        @error('title')
                                        <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input name="title" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400"
                                     type="text" value="{{old('title',$advertisecategory->title)}}">
                                </div>

                            </div>






                            <div class="flex flex-col md:flex-row gap-3">

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
                                            <option value={{$item->id}} @if($item->id==$advertisecategory->parent_id) selected @endif>{{$item->title}} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="w-full md:w-4/12">
                                    <div class="text-sm">
                                        <span>ترتیب قرارگیری در منو  </span>
                                        @error('menu-order')
                                        <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                     <select name="menu-order" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                                        <option value="1" @if($advertisecategory->menu_order == '1') selected @endif>1</option>
                                        <option value="2" @if($advertisecategory->menu_order == '2') selected @endif>2</option>
                                        <option value="3" @if($advertisecategory->menu_order == '3') selected @endif>3</option>
                                        <option value="4" @if($advertisecategory->menu_order == '4') selected @endif>4</option>
                                        <option value="5" @if($advertisecategory->menu_order == '5') selected @endif>5</option>
                                    </select>
                                </div>

                            </div>



                            <div class="flex flex-col md:flex-row gap-3">
                                <div class="w-full md:w-6/12">
                                    <div class="text-sm">
                                        <span>وضعیت  </span>
                                        @error('status')
                                        <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <select name="status" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                                        <option value="1" @if($advertisecategory->status == '1') selected @endif>فعال</option>
                                        <option value="0" @if($advertisecategory->status == '0') selected @endif>غیر فعال </option>
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



                            <div class="flex flex-col md:flex-row gap-3">
                                <div class="w-full md:w-12/12">
                                    <div class="text-sm mb-2">
                                        <span>توضیحات دسته بندی  </span>
                                        @error('description')
                                        <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                     <textarea name="description" id="editor"  class="px-2 py-1 my-2 rounded text-sm w-full">
                                     </textarea>
                                </div>
                            </div>



                            <div>
                                <div class="bg-yellow-500 h-2 mt-3 rounded"></div>


                                <div class="flex justify-between gap-3 items-center">
                                    <div class="mt-2">
                                        <button class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded hover:bg-firooze-300 ">ثبت تغییرات دسته  </button>
                                    </div>
                                    <div class="mt-2">
                                        <a href="{{route('admin.advertise-categories.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded hover:bg-firooze-300 ">انصراف </a>
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
