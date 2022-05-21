@extends('admin.layouts.master')

@section('body')



        <div class="p-3">
            <div class="mb-3 bg-white shadow rounded p-3">
                <div class="flex justify-between items-center">
                    <div class="text-xl font-bold py-3">
                        <span> شهرهای آگهی</span>
                        <span class="text-sm">( مجموع : {{count($cities)}} )</span>
                    </div>
                    <div class="flex gap-3 items-center">

                        <div>
                            <a class="text-sm text-center py-2 px-4 bg-emerald-600 text-white rounded hover:bg-emerald-700"
                         href="{{route('admin.advertise.cities.create')}}">افزودن شهر جدید</a>
                        </div>


                    </div>
                </div>
            </div>

            <div>
                @if (session('msg'))
                    <div class="flex">
                        <div class=" mb-3">
                            <div class="p-3 text-sm bg-gray-800 rounded border-b border-gray-200 text-white">
                                {{session('msg')}}
                            </div>
                        </div>
                    </div>
            @endif
            </div>



            <div class="">
                <div class="bg-white shadow rounded overflow-y-auto">
                    <table class="table-fixed text-right w-full px-2">
                        <thead class="">
                            <tr class=" bg-gray-800 text-white rounded font-normal text-sm">
                                <th class="py-4 px-2 font-thin w-8">ID#</th>
                                <th class="py-4 px-2 font-thin w-28">عنوان شهر</th>
                                <th class="py-4 px-2 font-thin w-20"> تعداد آگهی</th>
                                <th class="py-4 px-2 font-thin w-20">وضعیت</th>
                                <th class="py-4 px-2 font-thin w-32">عملیات</th>
                            </tr>
                        </thead>
                        <tbody class="" >
                            @foreach ($cities as $key=>$item)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-3 px-2">
                                    <span class=" text-gray-600 text-xs">
                                        {{$item->id}}
                                    </span>
                                </td>



                                <td class="py-3 px-2">
                                    <span class=" text-gray-600 text-xs font-bold">
                                        {{$item->name}}
                                    </span>
                                </td>





                                <td class="py-3 px-2">
                                    <span class=" text-gray-500 text-xs">
                                        ---
                                    </span>
                                </td>



                                <td class="py-3 px-2">

                                        @if($item->status==1)
                                            <span class="bg-green-200 rounded px-2 text-green-600 text-xs">
                                                فعال
                                            </span>

                                        @else
                                            <span class="bg-red-200 rounded px-2 text-red-600 text-xs">
                                                غیر فعال
                                            </span>
                                        @endif
                                    </span>
                                </td>

                                <td class="py-3 px-2">
                                    <div class="flex items-center">

                                        <div class="rounded-lg py-1 px-2 text-black text-sm">
                                            <a href="{{route('admin.advertise.cities.edit',$item)}}" class=" text-xs text-center py-1 px-2 bg-orange-500 text-white rounded hover:bg-orange-600 ">مشاهده و تغییرات</a>
                                        </div>



                                        <div x-data="{'popup': false}">
                                            <a @click="popup=true" class=" text-xs text-center py-1 px-2 bg-red-700 text-white rounded hover:bg-red-800 "
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
                                                                <form action="{{route('admin.advertise.cities.delete',$item)}}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a  @click="popup=false" class="cursor-pointer text-sm text-center py-2 px-4 bg-red-700 text-white rounded hover:bg-red-600 ">خیر</a>
                                                                    <button type="submit"
                                                                    class="text-sm text-center py-2 px-4 bg-red-700 text-white rounded hover:bg-red-600 ">بله</button>
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
