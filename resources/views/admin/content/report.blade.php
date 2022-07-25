@extends('admin.layouts.master')

@section('body')
    <div>








        <div class="flex items-center justify-between  gap-5">
            <div class=" text-gray-800 p-3 text-2xl rounded ">گزارش و آمار بلاگ </div>
            <div class="flex gap-6 p-3 items-center justify-center text-gray-500 rounded ">
                <ion-icon name="print-outline"  class=" text-3xl leading-none hover:text-black cursor-pointer"></ion-icon>
                <ion-icon name="cloud-download-outline"  class=" text-3xl leading-none hover:text-black cursor-pointer"></ion-icon>
                <ion-icon name="reload-outline" class=" text-3xl leading-none hover:text-black cursor-pointer"></ion-icon>

            </div>
        </div>

                <hr class="bg-gray-800 h-2 rounded my-3">


        <div class="grid grid-cols-3 gap-4 my-5">
            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div class="">
                        تعداد مطالب
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    {{-- {{count($Advertises)}} --}}
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div class="">
                         تعداد دسته بندی ها
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    {{count($categories)}}
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div class="">
                        تعداد تگ ها
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    {{count($tags)}}
                </div>
            </div>




        </div>


        <hr class="bg-gray-800 h-2 rounded my-5">





        <div class="grid grid-cols-3 gap-4 my-5">
            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white flex justify-between items-center text-lg">
                     <div class=" text-center">
                        پربازدیدترین مطالب
                     </div>
                     <div class=" text-center">

                    </div>
                </div>
                <div class="p-4">
                    <ul>
                        @foreach ([] as $item )
                            @if ($loop->index<5)
                            <li class="py-2 border-b">
                                <a href="{{route('admin.advertise.edit',$item)}}" class="flex justify-between text-sm hover:font-semibold">
                                    <div>
                                    {{$item->title}}
                                    </div>
                                    <div>
                                        {{$item->getCategory->title}}
                                    </div>
                                </a>
                            </li>
                            @endif
                        @endforeach
                    </ul>

                    <div class=" mt-5 flex items-center gap-3">
                        <a href="#" class="bg-gray-800 text-white p-2 rounded text-sm">مشاهده همه</a>
                    </div>
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white flex justify-between items-center text-lg">
                     <div class=" text-center">
                        پربازدیدترین دسته بندی مطالب
                     </div>
                     <div class=" text-center">

                    </div>
                </div>
                <div class="p-4">
                    <ul>
                        @foreach ($categories as $item )
                            @if ($loop->index<5)
                            <li class="py-2 border-b">
                                <a href="{{route('admin.blog.categories.edit',$item)}}" class="flex justify-between text-sm hover:font-semibold">
                                    <div>
                                    {{$item->title}}
                                    </div>
                                    <div class="flex gap-8">
                                        <div>
                                            25
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endif
                        @endforeach
                    </ul>

                    <div class=" mt-5 flex items-center gap-3">
                        <a href="#" class="bg-gray-800 text-white p-2 rounded text-sm">مشاهده همه</a>
                    </div>
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white flex justify-between items-center text-lg">
                     <div class=" text-center">
                        پربازدیدترین تگ ها
                     </div>
                     <div class=" text-center">

                    </div>
                </div>
                <div class="p-4">
                    <ul>
                        @foreach ($tags as $item )
                            @if ($loop->index<5)
                            <li class="py-2 border-b">
                                <a href="{{route('admin.advertise.edit',$item)}}" class="flex justify-between text-sm hover:font-semibold">
                                    <div>
                                    {{$item->title}}
                                    </div>
                                    <div class="flex gap-8">
                                        <div>
                                            50
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endif
                        @endforeach
                    </ul>

                    <div class=" mt-5 flex items-center gap-3">
                        <a href="#" class="bg-gray-800 text-white p-2 rounded text-sm">مشاهده همه</a>
                    </div>
                </div>
            </div>


        </div>

        {{-- <hr class="bg-gray-800 h-2 rounded my-5"> --}}



    </div>
@endsection
