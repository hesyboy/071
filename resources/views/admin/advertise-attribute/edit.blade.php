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
                    ثبت تغییرات مقدار
                </div>
            </div>
        </div>
        <div class="flex gap-3">
            <a href="{{route('admin.advertise.filters.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded hover:bg-firooze-300 ">بازگشت به فیلترها   </a>
            <a href="{{route('admin.advertise.attributes.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded hover:bg-firooze-300 ">بازگشت به مقادیر   </a>

        </div>
    </div>
</div>
    <div class=" my-3  ">



        <div class="flex items-center">



            <div class="w-full">

                <div class="mt-3">
                    <form action="{{route('admin.advertise.attributes.update',$attribute)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="w-full flex flex-col gap-5">


                            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">

                                <div class="flex w-full flex-col md:flex-row gap-3">
                                    <div class="w-full md:w-3/12">
                                        <div class="text-sm">
                                            <span>درج مقدار   </span>
                                            @error('value')
                                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <input name="value" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400"
                                         type="text" value="{{old('value',$attribute->value)}}">
                                    </div>

                                    <div class="w-full md:w-3/12">
                                        <div class="text-sm">
                                            <span>انتخاب  فیلتر  </span>
                                            @error('filter_id')
                                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <select name="filter_id" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                                            <option value="">انتخاب کنید</option>
                                            @foreach ($filters as $item)
                                                <option value={{$item->id}} @if($item->id==old('filter_id',$attribute->filter_id)) selected @endif>{{$item->title}} </option>

                                            @endforeach
                                        </select>
                                    </div>

                                </div>



                            </div>




                            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">

                                <div class="flex w-full flex-col md:flex-row gap-3">
                                    <div class="w-full md:w-3/12">
                                        <div class="text-sm">
                                            <span>ترتیب نمایش  </span>
                                            @error('order')
                                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <select name="order" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>

                                </div>
                            </div>












                            <div>
                                <div class="bg-gray-800 h-4 rounded"></div>


                                <div class="flex justify-end gap-3 items-center mt-2">
                                    <div class="mt-2">
                                        <button type="submit" class=" text-sm text-center py-2 px-4 bg-emerald-600 hover:bg-emerald-700 text-gray-100 rounded  ">ثبت تغییرات مقدار  </button>
                                    </div>
                                    <div class="mt-2">
                                        <a href="{{route('admin.advertise.attributes.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded  ">انصراف </a>
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


