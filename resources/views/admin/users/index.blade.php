@extends('admin.layouts.master')

@section('body')




        <div class="">


            <div class="grid grid-cols-5 gap-4 mb-5">
                <div class="rounded-lg shadow bg-white overflow-hidden">
                    <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                        <div class="text-sm">
                            کل کاربران
                        </div>
                    </div>
                    <div class="text-2xl text-center p-2 font-bold">
                        {{$total_users->count()}}
                    </div>
                </div>

                <div class="rounded-lg shadow bg-white overflow-hidden">
                    <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                        <div class="text-sm">
                            کاربران فعال
                        </div>
                    </div>
                    <div class="text-2xl text-center p-2 font-bold">
                        {{$total_users->where('status',1)->count()}}
                    </div>
                </div>

                <div class="rounded-lg shadow bg-white overflow-hidden">
                    <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                        <div class="text-sm">
                            کاربران غیر فعال
                        </div>
                    </div>
                    <div class="text-2xl text-center p-2 font-bold">
                        {{$total_users->where('status',0)->count()}}
                    </div>
                </div>

                <div class="rounded-lg shadow bg-white overflow-hidden">
                    <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                        <div class="text-sm">
                              کاربران عادی
                        </div>
                    </div>
                    <div class="text-2xl text-center p-2 font-bold">
                        {{$total_users->where('is_admin',0)->count()}}
                    </div>
                </div>

                <div class="rounded-lg shadow bg-white overflow-hidden">
                    <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                        <div class="text-sm">
                              کاربران ادمین
                        </div>
                    </div>
                    <div class="text-2xl text-center p-2 font-bold">
                        {{$total_users->where('is_admin',1)->count()}}
                    </div>
                </div>


            </div>



            <div class="mb-3 bg-white shadow rounded p-3">
                <div class="flex justify-between items-center">
                    <div class="text-xl font-bold py-3">
                        <span> کاربران</span>
                        <span class="text-sm">( مجموع : {{count($total_users)}} )</span>
                    </div>
                    <div class="flex gap-3 items-center">

                        <div>
                            <a class="text-sm text-center py-2 px-4 bg-emerald-600 text-white rounded hover:bg-emerald-700"
                         href="{{route('admin.users.create')}}">افزودن کاربر جدید</a>
                        </div>

                    </div>
                </div>
            </div>




            <div>




                @if (session('msg'))
                    <div class="" x-data="{notify:true}">
                        <div class=" mb-3" x-show="notify" x-transition>
                            <div class="p-3 text-sm bg-indigo-800 rounded border-b border-gray-200 text-white flex items-center gap-3 justify-between">
                                <div class=" flex items-center gap-3">
                                    <ion-icon class="text-3xl p-2 bg-gray-100 rounded text-gray-800 " name="notifications-outline"></ion-icon>
                                    <div class="">
                                        {{session('msg')}}
                                    </div>
                                </div>
                                <ion-icon @click="notify=false" class="text-3xl cursor-pointer text-gray-100" name="close"></ion-icon>
                            </div>
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
                                <th class="py-4 px-2 font-thin w-12">ID#</th>
                                <th class="py-4 px-1 font-thin w-20"> @sortablelink('phone','موبایل')</th>
                                <th class="py-4 px-1 font-thin w-20"> @sortablelink('name','نام') </th>
                                <th class="py-4 px-1 font-thin w-28"> @sortablelink('last_name','نام خانوادگی')</th>
                                <th class="py-4 px-1 font-thin w-20"> نوع اکانت</th>
                                <th class="py-4 px-1 font-thin w-20"> تاریخ ثبت</th>
                                <th class="py-4 px-1 font-thin w-20">وضعیت</th>
                                <th class="py-4 px-1 font-thin w-32">عملیات</th>
                            </tr>
                        </thead>
                        <tbody class="" >
                            @foreach ($users as $key=>$item)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-3 px-2">
                                    <span class=" text-gray-600 text-xs">
                                        {{$item->id}}
                                    </span>
                                </td>

                                <td class="py-3 px-2">
                                    <span class=" text-gray-600 text-xs font-bold">
                                        {{$item->phone}}
                                    </span>
                                </td>

                                <td class="py-3 px-2">
                                    <span class="  text-gray-500 text-xs font-bold">
                                        @if($item->name)
                                            {{$item->name}}
                                        @else
                                            تکمیل نشده
                                        @endif
                                    </span>
                                </td>

                                <td class="py-3 px-2">
                                    <span class="  text-gray-500 text-xs font-bold">
                                        @if($item->last_name)
                                            {{$item->last_name}}
                                        @else
                                            تکمیل نشده
                                        @endif
                                    </span>
                                </td>

                                <td class="py-3 px-2">
                                    @if($item->is_admin==0)
                                        <span class="bg-gray-200 rounded-lg px-2 text-gray-700 text-xs">
                                            کاربر عادی
                                        </span>

                                    @elseif ($item->is_admin==1)
                                        <span class="bg-green-200 rounded-lg px-2 text-green-600 text-xs">
                                            کاربر ادمین
                                        </span>
                                    @endif
                                </td>




                                <td class="py-3 px-2">
                                    <span class=" text-gray-500 text-xs  font-bold">
                                        {{$item->created_at->diffForHumans()}}
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
                                    <div class="flex items-center gap-1">

                                        <div class="rounded-lg text-black text-sm">
                                            <a href="{{route('admin.users.edit',$item->id)}}" class=" text-xs text-center py-1 px-2 bg-blue-500 text-white rounded hover:bg-blue-600 ">گزارش </a>
                                        </div>

                                        <div class="rounded-lg text-black text-sm">
                                            <a href="{{route('admin.users.edit',$item->id)}}" class=" text-xs text-center py-1 px-2 bg-orange-500 text-white rounded hover:bg-yellow-700 ">مشاهده و تغییرات</a>
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
                                                                <form action="{{route('admin.users.delete',$item->id)}}" method="post">
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

                    <div class="px-10 py-5 " dir="ltr">
                        {!! $users->appends(\Request::except('page'))->render() !!}
                    </div>

                </div>
            </div>
        </div>

        <hr>




@endsection
