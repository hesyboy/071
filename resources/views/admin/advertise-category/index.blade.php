@extends('admin.layouts.master')

@section('body')



        <div class="p-3">
            <div class="mb-3">
                <div class="flex justify-between items-center">
                    <div class="text-xl font-bold py-3">
                        <span> دسته بندی های آگهی</span>
                        <span class="text-sm">( مجموع : {{count($advertiseCategories)}} )</span>
                    </div>
                    <div class="flex gap-3 items-center">

                        <div>
                            <a class="text-sm text-center py-2 px-4 bg-green-700 text-white rounded-lg hover:bg-green-800"
                         href="{{route('admin.advertise-categories.create')}}">افزودن دسته بندی جدید</a>
                        </div>

                        <div> | </div>

                        <div>
                            <form action="{{route('admin.users.index')}}" method="GET">
                                <div class="flex gap-1 items-center relative">
                                    <input name="search" class="px-2 py-2 rounded-lg text-sm w-60 border-gray-200 " type="text" value="" placeholder="Title">
                                    <button type="submit" class="flex absolute left-1 text-xl text-center py-1 px-2 bg-gray-600 text-white rounded-lg hover:bg-gray-800">
                                        <ion-icon name="search"></ion-icon>
                                    </button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

            <div>
                @if (session('msg'))
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3">
                    <div class="p-4 bg-yellow-600 border-b border-gray-200 text-white">
                        {{session('msg')}}
                    </div>
                </div>
            @endif
            </div>

            <hr>

            <div class="mt-3">
                <div class=" shadow rounded-lg overflow-y-auto">
                    <table class="table-fixed text-right w-full px-2">
                        <thead class="">
                            <tr class=" bg-gray-800 text-white rounded font-normal text-sm">
                                <th class="py-4 px-2 font-thin w-8">ID#</th>
                                <th class="py-4 px-2 font-thin w-12">آیکون</th>
                                <th class="py-4 px-2 font-thin w-28">عنوان</th>
                                <th class="py-4 px-2 font-thin w-28">دسته والد</th>
                                <th class="py-4 px-2 font-thin w-20"> تعداد آگهی</th>
                                <th class="py-4 px-2 font-thin w-20">وضعیت</th>
                                <th class="py-4 px-2 font-thin w-32">عملیات</th>
                            </tr>
                        </thead>
                        <tbody class="" >
                            @foreach ($advertiseCategories as $key=>$item)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-3 px-2">
                                    <span class=" text-gray-600 text-xs">
                                        {{$item->id}}
                                    </span>
                                </td>

                                <td class="py-3 px-2">
                                    <div>
                                        <img class="bg-gray-200 p-2 h-12 w-12 rounded-lg" src="{{asset($item->icon)}}" alt="">
                                    </div>
                                </td>

                                <td class="py-3 px-2">
                                    <span class=" text-gray-600 text-xs font-bold">
                                        {{$item->title}}
                                    </span>
                                </td>

                                <td class="py-3 px-2">
                                    <span class="  text-gray-500 text-xs font-bold">
                                        @if($item->getParent->title == "دسته اصلی")
                                            {{$item->getParent->title}}
                                        @elseif($item->getParent->getParent->title == "دسته اصلی")
                                            {{$item->getParent->title}}
                                        @elseif($item->getParent->getParent->getParent->title == "دسته اصلی")
                                            {{$item->getParent->getParent->title}} / {{$item->getParent->title}}
                                        @endif
                                        {{-- {{$item->getParent->getParent->title}}
                                        <hr>
                                        {{$item->getParent->title}} --}}
                                    </span>
                                </td>



                                <td class="py-3 px-2">
                                    <span class=" text-gray-500 text-xs">
                                        ---
                                    </span>
                                </td>



                                <td class="py-3 px-2">

                                        @if($item->status==1)
                                            <span class="bg-green-200 rounded-lg px-2 text-green-600 text-xs">
                                                فعال
                                            </span>

                                        @else
                                            <span class="bg-red-200 rounded-lg px-2 text-red-600 text-xs">
                                                غیر فعال
                                            </span>
                                        @endif
                                    </span>
                                </td>

                                <td class="py-3 px-2">
                                    <div class="flex items-center">

                                        <div class="rounded-lg py-1 px-2 text-black text-sm">
                                            <a href="{{route('admin.advertise-categories.edit',$item)}}" class=" text-xs text-center py-1 px-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 ">تغییرات</a>
                                        </div>



                                        <div x-data="{'popup': false}">
                                            <a @click="popup=true" class=" text-xs text-center py-1 px-2 bg-red-700 text-white rounded-lg hover:bg-red-800 "
                                             href="#">
                                             حذف
                                            </a>


                                            <div class="fixed inset-0 w-full" x-show="popup" x-cloak x-transition>
                                                <div class="flex items-center justify-center align-middle min-h-screen">
                                                    <div class="fixed inset-0 bg-gray-700 opacity-50 z-0"></div>
                                                    <div class="inline-block bg-white shadow-lg rounded-lg py-5 px-8 z-10"
                                                     @click.away="popup=false">
                                                        <div>
                                                            <div class="text-lg text-center mb-1">
                                                                آیا از حذف مطمئن هستید؟
                                                            </div>
                                                            <div class="flex gap-5 p-3 justify-between">
                                                                <form action="{{route('admin.advertise-categories.delete',$item)}}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a  @click="popup=false" class="cursor-pointer text-sm text-center py-2 px-4 bg-red-700 text-white rounded-lg hover:bg-red-600 ">خیر</a>
                                                                    <button type="submit"
                                                                    class="text-sm text-center py-2 px-4 bg-red-700 text-white rounded-lg hover:bg-red-600 ">بله</button>
                                                                </form>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </td>


                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <hr>




@endsection
