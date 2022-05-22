@extends('admin.layouts.master')

@section('body')
    <div>
        <div class="grid grid-cols-4 gap-4 my-5">
            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div>
                        <ion-icon name="people-outline" class="text-4xl"></ion-icon>
                    </div>
                    <div class="text-sm">
                        تعداد کاربران
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    350
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div>
                        <ion-icon name="layers-outline" class="text-4xl"></ion-icon>
                    </div>
                    <div class="text-sm">
                        تعداد آگهی
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    860
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div>
                        <ion-icon name="reader-outline" class="text-4xl"></ion-icon>
                    </div>
                    <div class="text-sm">
                        تعداد مطالب
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    65
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                    <div>
                        <ion-icon name="albums-outline" class="text-4xl"></ion-icon>
                    </div>
                    <div class="text-sm">
                        تعداد برگه ها
                    </div>
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    350
                </div>
            </div>




        </div>



        <div class="grid grid-cols-4 gap-4 my-5">


            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white">
                     بازدید امروز
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    8900
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white">
                     بازدید این ماه
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    8900
                </div>
            </div>


            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white">
                     بازدید کل
                </div>
                <div class="text-2xl text-center p-2 font-bold">
                    8900
                </div>
            </div>



        </div>

        <hr class="bg-gray-800 h-2 rounded my-5">

        <div class="grid grid-cols-2 gap-4 my-5">
            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white flex justify-between items-center text-lg">
                     <div class=" text-center">
                        جدیدترین کاربران
                     </div>
                     <div class=" text-center">

                    </div>
                </div>
                <div class="p-4">
                    <ul>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    رضا محمدی
                                </div>
                                <div>
                                    09122040238
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    رضا محمدی
                                </div>
                                <div>
                                    09122040238
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    رضا محمدی
                                </div>
                                <div>
                                    09122040238
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    رضا محمدی
                                </div>
                                <div>
                                    09122040238
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    رضا محمدی
                                </div>
                                <div>
                                    09122040238
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                            </div>
                        </li>

                    </ul>

                    <div class=" my-3 flex items-center gap-3">
                        <a href="#" class="bg-orange-600 text-white p-2 rounded text-sm">مشاهده همه</a>
                        <a href="#" class="bg-gray-800 text-white p-2 rounded text-sm">بخش مالی</a>
                    </div>
                </div>
            </div>

            <div class="rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white flex justify-between items-center text-lg">
                     <div class=" text-center">
                        جدیدترین آگهی ها
                     </div>
                     <div>

                     </div>
                </div>
                <div class="p-4">
                    <ul>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان آگهی
                                </div>
                                <div>
                                    حسام محمودی
                                </div>
                                <div>
                                    دسته آگهی
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان آگهی
                                </div>
                                <div>
                                    حسام محمودی
                                </div>
                                <div>
                                    دسته آگهی
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان آگهی
                                </div>
                                <div>
                                    حسام محمودی
                                </div>
                                <div>
                                    دسته آگهی
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان آگهی
                                </div>
                                <div>
                                    حسام محمودی
                                </div>
                                <div>
                                    دسته آگهی
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان آگهی
                                </div>
                                <div>
                                    حسام محمودی
                                </div>
                                <div>
                                    دسته آگهی
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                            </div>
                        </li>

                    </ul>

                    <div class=" my-3 flex items-center gap-3">
                        <a href="#" class="bg-orange-600 text-white p-2 rounded text-sm">مشاهده همه</a>
                        <a href="#" class="bg-gray-800 text-white p-2 rounded text-sm">دسته بندی های آگهی</a>
                    </div>
                </div>
            </div>


        </div>

        <hr class="bg-gray-800 h-2 rounded my-5">

        <div class="grid grid-cols-4 gap-4 my-5">
            <div class="col-span-2 rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white flex justify-between items-center text-lg">
                     <div class=" text-center">
                        گزارش مالی
                     </div>
                     <div class=" text-center">
                        27،835،000 تومان
                    </div>
                </div>
                <div class="p-4">
                    <ul>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    رضا محمدی (خرید 120 توکن)
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                                <div>
                                    250,000 تومان
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    رضا محمدی (خرید 120 توکن)
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                                <div>
                                    250,000 تومان
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    رضا محمدی (خرید 120 توکن)
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                                <div>
                                    250,000 تومان
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    رضا محمدی (خرید 120 توکن)
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                                <div>
                                    250,000 تومان
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    رضا محمدی (خرید 120 توکن)
                                </div>
                                <div>
                                    5/22/2022
                                </div>
                                <div>
                                    250,000 تومان
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class=" my-3 flex items-center gap-3">
                        <a href="#" class="bg-orange-600 text-white p-2 rounded text-sm">مشاهده همه</a>
                        <a href="#" class="bg-gray-800 text-white p-2 rounded text-sm">بخش مالی</a>
                    </div>
                </div>
            </div>

            <div class="col-span-1 rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white flex justify-between items-center text-base">
                     <div class=" text-center">
                        دسته بندی های پربازدید
                     </div>
                     <div>

                     </div>
                </div>
                <div class="p-4">
                    <ul>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان دسته بندی
                                </div>
                                <div>
                                    56
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان دسته بندی
                                </div>
                                <div>
                                    56
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان دسته بندی
                                </div>
                                <div>
                                    56
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان دسته بندی
                                </div>
                                <div>
                                    56
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان دسته بندی
                                </div>
                                <div>
                                    56
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class=" my-3 flex items-center gap-3">
                        <a href="#" class="bg-gray-800 text-white p-2 rounded text-sm">دسته بندی های آگهی</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 rounded-lg shadow bg-white overflow-hidden">
                <div class="bg-gray-800 p-3 text-center text-white flex justify-between items-center text-base">
                     <div class=" text-center">
                        شهرهای پربازدید
                     </div>
                     <div>

                     </div>
                </div>
                <div class="p-4">
                    <ul>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان دسته بندی
                                </div>
                                <div>
                                    56
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان دسته بندی
                                </div>
                                <div>
                                    56
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان دسته بندی
                                </div>
                                <div>
                                    56
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان دسته بندی
                                </div>
                                <div>
                                    56
                                </div>
                            </div>
                        </li>
                        <li class="py-2 border-b">
                            <div class="flex justify-between text-sm">
                                <div>
                                    عنوان دسته بندی
                                </div>
                                <div>
                                    56
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class=" my-3 flex items-center gap-3 ">
                        <a href="#" class="bg-gray-800 text-white p-2 rounded text-sm">دسته بندی های آگهی</a>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
