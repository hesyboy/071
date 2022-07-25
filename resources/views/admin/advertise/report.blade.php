@extends('admin.layouts.master')

@section('body')
    <div>








        <div class="flex items-center justify-between  gap-5">
            <div class=" text-gray-800 p-3 text-2xl rounded ">گزارش و آمار آگهی ها</div>
            <div class="flex gap-6 p-3 items-center justify-center text-gray-500 rounded ">
                <ion-icon name="print-outline"  class=" text-3xl leading-none hover:text-black cursor-pointer"></ion-icon>
                <ion-icon name="cloud-download-outline"  class=" text-3xl leading-none hover:text-black cursor-pointer"></ion-icon>
                <ion-icon name="reload-outline" class=" text-3xl leading-none hover:text-black cursor-pointer"></ion-icon>

            </div>
        </div>

                <hr class="bg-gray-800 h-2 rounded my-3">


        <div class="grid grid-cols-4 gap-4 my-5">
            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div class="">
                        تعداد آگهی ها
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    {{count($Advertises)}}
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div class="">
                         تعداد دسته بندی ها
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    {{count($advertiseCategories)}}
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div class="">
                        تعداد شهر ها
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    {{count($cities)}}
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div class="">
                        تعداد محله ها
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    {{count($areas)}}
                </div>
            </div>




        </div>

        <div class="grid grid-cols-5 gap-4 my-5">
            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-emerald-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div class="text-sm">
                          فعال
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    {{count($Advertises->where('status',1))}}
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-orange-500 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div class="text-sm">
                          در انتظار تایید
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    {{count($Advertises->where('status',2))}}
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-blue-600 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div class="text-sm">
                        فروشگاهی
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    {{count($Advertises->where('adv_type',1))}}
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-indigo-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div class="text-sm">
                        فوری
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    {{count($Advertises->where('adv_type',0))}}
                </div>
            </div>
            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-red-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div class="text-sm">
                    غیر فعال
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    {{count($Advertises->where('status',0))}}
                </div>
            </div>




        </div>

        <hr class="bg-gray-800 h-2 rounded my-5">





        <div class="grid grid-cols-2 gap-4 my-5">
            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white flex justify-between items-center text-lg">
                     <div class=" text-center">
                        جدیدترین آگهی ها
                     </div>
                     <div class=" text-center">

                    </div>
                </div>
                <div class="p-4">
                    <ul>
                        @foreach ($Advertises as $item )
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
                        پربازدیدترین آگهی ها
                     </div>
                     <div class=" text-center">

                    </div>
                </div>
                <div class="p-4">
                    <ul>
                        @foreach ($Advertises as $item )
                            @if ($loop->index<5)
                            <li class="py-2 border-b">
                                <a href="{{route('admin.advertise.edit',$item)}}" class="flex justify-between text-sm hover:font-semibold">
                                    <div>
                                    {{$item->title}}
                                    </div>
                                    <div class="flex gap-8">
                                        <div>
                                            {{$item->getCategory->title}}
                                        </div>
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

        <div class="grid grid-cols-3 gap-4 my-5">

            <div class=" rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white flex justify-between items-center text-base">
                     <div class=" text-center">
                        دسته های پربازدید
                     </div>
                     <div>

                     </div>
                </div>
                <div class="p-4">
                    <ul>
                        @foreach ($advertiseCategories as $item )
                            @if ($loop->index<5)
                            <li class="py-2 border-b">
                                <a href="{{route('admin.advertise.categories.edit',$item)}}" class="flex justify-between text-sm hover:font-semibold">
                                    <div>
                                    {{$item->title}}
                                    </div>
                                    <div>
                                        ---
                                    </div>
                                </a>
                            </li>
                            @endif
                        @endforeach
                    </ul>

                    <div class=" mt-5 flex items-center gap-3 ">
                        <a href="#" class="bg-gray-800 text-white p-2 rounded text-sm">دسته بندی های آگهی</a>
                    </div>
                </div>
            </div>


            <div class=" rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white flex justify-between items-center text-base">
                     <div class=" text-center">
                        شهر های پربازدید
                     </div>
                     <div>

                     </div>
                </div>
                <div class="p-4">
                    <ul>
                        @foreach ($cities as $item )
                            @if ($loop->index<5)
                            <li class="py-2 border-b">
                                <a href="{{route('admin.advertise.cities.edit',$item)}}" class="flex justify-between text-sm hover:font-semibold">
                                    <div>
                                    {{$item->name}}
                                    </div>
                                    <div>
                                        ---
                                    </div>
                                </a>
                            </li>
                            @endif
                        @endforeach
                    </ul>

                    <div class=" mt-5 flex items-center gap-3 ">
                        <a href="#" class="bg-gray-800 text-white p-2 rounded text-sm">دسته بندی های آگهی</a>
                    </div>
                </div>
            </div>

            <div class=" rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white flex justify-between items-center text-base">
                     <div class=" text-center">
                        محله های پربازدید
                     </div>
                     <div>

                     </div>
                </div>
                <div class="p-4">
                    <ul>
                        @foreach ($areas as $item )
                            @if ($loop->index<5)
                            <li class="py-2 border-b">
                                <a href="{{route('admin.advertise.areas.edit',$item)}}" class="flex justify-between text-sm hover:font-semibold">
                                    <div>
                                    {{$item->name}}
                                    </div>
                                    <div>
                                        ---
                                    </div>
                                </a>
                            </li>
                            @endif
                        @endforeach
                    </ul>

                    <div class=" mt-5 flex items-center gap-3 ">
                        <a href="#" class="bg-gray-800 text-white p-2 rounded text-sm">دسته بندی های آگهی</a>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
