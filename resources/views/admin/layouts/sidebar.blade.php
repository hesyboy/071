
{{-- desktop menu --}}


<div class="hidden md:block">

    <div  class=" pb-3">
        <div>

            <div class="flex justify-between gap-2 text-center items-center">

                <div class="flex w-full gap-4 text-right items-center bg-gray-800 p-2 rounded">
                    <div>
                        <ion-icon name="person"  class="text-6xl leading-none text-gray-800 bg-gray-100 p-3 rounded"></ion-icon>
                    </div>
                    <div class="w-full flex flex-col gap-2 justify-between">
                        {{-- <div class="font-bold text-gray-600 text-base">
                            @if (Auth()->user()->name)
                                {{Auth()->user()->name}}
                            @else
                                بدون نام
                            @endif
                        </div> --}}
                        {{-- <div class="font-bold text-gray-400 text-sm">
                            {{Auth()->user()->mobile}}
                        </div> --}}

                        <div class="text-gray-100 text-xl">
                            <span>نام کاربری</span>
                        </div>
                        <div class="text-xs text-gray-200">
                            کاربر ادمین
                        </div>
                        <div class="w-max text-white text-xs bg-red-800 rounded p-1 cursor-pointer text-center">خروج از سایت</div>
                    </div>

                </div>



            </div>
        </div>
    </div>
    <hr>
    <div class="mt-3" x-show="burger" x-transition>
        <ul class="flex flex-col gap-3">

            <li class="flex">
                <a href="{{route('admin.index')}}"
                class="flex items-center gap-2 w-full text-center p-3 rounded  hover:bg-gray-200 hover:text-gray-800
                        @if (request()->routeIs('admin.index'))
                            bg-gray-800 text-white
                        @else
                            bg-gray-100 text-gray-600
                        @endif
                ">
                    <ion-icon name="home-outline"  class="text-2xl"></ion-icon>
                    <span class="text-base px-2"> داشبورد </span>
                </a>
            </li>

            {{-- کاربران --}}
            <li class="flex flex-col gap-1"
                @if (request()->routeIs('admin.users.*'))
                    x-data="{open: true}"
                @else
                    x-data="{open: false}"
                @endif

                          >
                <a @click="open = !open" class="flex justify-between items-center  w-full text-sm text-center p-3 bg-gray-100 text-black rounded  hover:bg-gray-200"
                  >
                    <div class="flex items-center gap-2">
                        <ion-icon name="people-outline" class="text-2xl"></ion-icon>
                        <span class="text-base "> مدیریت کاربران </span>
                    </div>
                    <ion-icon name="caret-forward-circle-outline"  :class="{'hidden' : open }" class="text-2xl text-gray-600"></ion-icon>
                    <ion-icon name="caret-down-circle-outline" :class="{'hidden' : !open }" class="text-2xl text-gray-600"></ion-icon>

                </a>

                <ul x-show="open" x-transition class="flex flex-col gap-3 py-2 px-4 ">

                    <li class="flex">
                        <a href="{{route('admin.users.report')}}" class="w-full text-sm text-center p-2  rounded
                        @if (request()->routeIs('admin.users.report'))
                            bg-gray-800 text-white
                        @else
                            bg-gray-100 hover:bg-gray-200 text-black
                        @endif
                        "> گزارش و آمار کاربران   </a>
                    </li>
                    <li class="flex">
                        <a href="{{route('admin.users.index')}}" class="w-full text-sm text-center p-2  rounded
                        @if (request()->routeIs('admin.users.index'))
                            bg-gray-800 text-white
                        @else
                            bg-gray-100 hover:bg-gray-200 text-black
                        @endif
                        "> کاربران   </a>
                    </li>
                    <li class="flex">
                        <a href="{{route('admin.users.create')}}" class="w-full text-sm text-center p-2 font-bold rounded-lg  text-black
                        @if (request()->routeIs('admin.users.create'))
                            bg-yellow-500
                        @else
                            bg-gray-100 hover:bg-gray-200
                        @endif
                        ">سطوح دسترسی  </a>
                    </li>
                </ul>
            </li>





                        {{-- آگهی ها --}}
                        <li class="flex flex-col gap-3"
                        @if (request()->routeIs('admin.advertise.*'))
                            x-data="{open: true}"
                        @else
                            x-data="{open: false}"
                        @endif

                                  >
                        <a @click="open = !open" class="flex justify-between items-center  w-full text-sm text-center p-3 bg-gray-100 text-black rounded  hover:bg-gray-200"
                          >
                            <div class="flex items-center gap-2">
                                <ion-icon name="storefront-outline" class="text-2xl"></ion-icon>
                                <span class="text-base px-2"> مدیریت فروشگاه ها </span>
                            </div>
                            <ion-icon name="caret-forward-circle-outline"  :class="{'hidden' : open }" class="text-2xl text-gray-600"></ion-icon>
                            <ion-icon name="caret-down-circle-outline" :class="{'hidden' : !open }" class="text-2xl text-gray-600"></ion-icon>

                        </a>

                        <ul x-show="open" x-transition class="flex flex-col gap-2 px-4">

                            <li class="flex">
                                <a href="{{route('admin.advertise.report')}}" class="w-full text-sm text-center p-2  rounded
                                @if (request()->routeIs('admin.advertise.report'))
                                    bg-gray-800 text-white
                                @else
                                    bg-gray-100 hover:bg-gray-200 text-black
                                @endif
                                "> گزارش و آمار آگهی ها   </a>
                            </li>
                            <li class="flex">
                                <a href="{{route('admin.advertise.index')}}" class="w-full text-sm text-center p-2  rounded
                                @if (request()->routeIs('admin.advertise.index'))
                                    bg-gray-800 text-white
                                @else
                                    bg-gray-100 hover:bg-gray-200 text-black
                                @endif
                                "> آگهی ها   </a>
                            </li>
                            <li class="flex">
                                <a href="{{route('admin.advertise.categories.index')}}" class="w-full text-sm text-center p-2 rounded
                                @if (request()->routeIs('admin.advertise.categories.*'))
                                    bg-gray-800 text-white
                                @else
                                    bg-gray-100 hover:bg-gray-200 text-black
                                @endif
                                ">دسته بندی های آگهی   </a>
                            </li>
                            <li class="flex">
                                <a href="{{route('admin.advertise.filters.index')}}" class="w-full text-sm text-center p-2 rounded
                                @if (request()->routeIs('admin.advertise.filters.*'))
                                    bg-gray-800 text-white
                                @else
                                    bg-gray-100 hover:bg-gray-200 text-black
                                @endif
                                ">فیلترهای دسته بندی     </a>
                            </li>
                            <li class="flex">
                                <a href="{{route('admin.advertise.attributes.index')}}" class="w-full text-sm text-center p-2 rounded
                                @if (request()->routeIs('admin.advertise.attributes.*'))
                                    bg-gray-800 text-white
                                @else
                                    bg-gray-100 hover:bg-gray-200 text-black
                                @endif
                                ">مقادیر فیلترها   </a>
                            </li>
                            <li class="flex">
                                <a href="{{route('admin.advertise.cities.index')}}" class="w-full text-sm text-center p-2 rounded
                                @if (request()->routeIs('admin.advertise.cities.*'))
                                    bg-gray-800 text-white
                                @else
                                    bg-gray-100 hover:bg-gray-200 text-black
                                @endif
                                ">شهرها  </a>
                            </li>
                            <li class="flex">
                                <a href="{{route('admin.advertise.areas.index')}}" class="w-full text-sm text-center p-2 rounded
                                @if (request()->routeIs('admin.advertise.areas.*'))
                                    bg-gray-800 text-white
                                @else
                                    bg-gray-100 hover:bg-gray-200 text-black
                                @endif
                                ">محله ها  </a>
                            </li>
                            <hr>
                        </ul>
                    </li>







            {{-- آگهی ها --}}
            <li class="flex flex-col gap-3"
                @if (request()->routeIs('admin.advertise.*'))
                    x-data="{open: true}"
                @else
                    x-data="{open: false}"
                @endif

                          >
                <a @click="open = !open" class="flex justify-between items-center  w-full text-sm text-center p-3 bg-gray-100 text-black rounded  hover:bg-gray-200"
                  >
                    <div class="flex items-center gap-2">
                        <ion-icon name="layers-outline" class="text-2xl"></ion-icon>
                        <span class="text-base px-2"> مدیریت آگهی ها </span>
                    </div>
                    <ion-icon name="caret-forward-circle-outline"  :class="{'hidden' : open }" class="text-2xl text-gray-600"></ion-icon>
                    <ion-icon name="caret-down-circle-outline" :class="{'hidden' : !open }" class="text-2xl text-gray-600"></ion-icon>

                </a>

                <ul x-show="open" x-transition class="flex flex-col gap-2 px-4">

                    <li class="flex">
                        <a href="{{route('admin.advertise.report')}}" class="w-full text-sm text-center p-2  rounded
                        @if (request()->routeIs('admin.advertise.report'))
                            bg-gray-800 text-white
                        @else
                            bg-gray-100 hover:bg-gray-200 text-black
                        @endif
                        "> گزارش و آمار آگهی ها   </a>
                    </li>
                    <li class="flex">
                        <a href="{{route('admin.advertise.index')}}" class="w-full text-sm text-center p-2  rounded
                        @if (request()->routeIs('admin.advertise.index'))
                            bg-gray-800 text-white
                        @else
                            bg-gray-100 hover:bg-gray-200 text-black
                        @endif
                        "> آگهی ها   </a>
                    </li>
                    <li class="flex">
                        <a href="{{route('admin.advertise.categories.index')}}" class="w-full text-sm text-center p-2 rounded
                        @if (request()->routeIs('admin.advertise.categories.*'))
                            bg-gray-800 text-white
                        @else
                            bg-gray-100 hover:bg-gray-200 text-black
                        @endif
                        ">دسته بندی های آگهی   </a>
                    </li>
                    <li class="flex">
                        <a href="{{route('admin.advertise.filters.index')}}" class="w-full text-sm text-center p-2 rounded
                        @if (request()->routeIs('admin.advertise.filters.*'))
                            bg-gray-800 text-white
                        @else
                            bg-gray-100 hover:bg-gray-200 text-black
                        @endif
                        ">فیلترهای دسته بندی     </a>
                    </li>
                    <li class="flex">
                        <a href="{{route('admin.advertise.attributes.index')}}" class="w-full text-sm text-center p-2 rounded
                        @if (request()->routeIs('admin.advertise.attributes.*'))
                            bg-gray-800 text-white
                        @else
                            bg-gray-100 hover:bg-gray-200 text-black
                        @endif
                        ">مقادیر فیلترها   </a>
                    </li>
                    <li class="flex">
                        <a href="{{route('admin.advertise.cities.index')}}" class="w-full text-sm text-center p-2 rounded
                        @if (request()->routeIs('admin.advertise.cities.*'))
                            bg-gray-800 text-white
                        @else
                            bg-gray-100 hover:bg-gray-200 text-black
                        @endif
                        ">شهرها  </a>
                    </li>
                    <li class="flex">
                        <a href="{{route('admin.advertise.areas.index')}}" class="w-full text-sm text-center p-2 rounded
                        @if (request()->routeIs('admin.advertise.areas.*'))
                            bg-gray-800 text-white
                        @else
                            bg-gray-100 hover:bg-gray-200 text-black
                        @endif
                        ">محله ها  </a>
                    </li>
                    <hr>
                </ul>
            </li>


                        {{-- بلاگ --}}
                    <li class="flex flex-col gap-3"
                        @if (request()->routeIs('admin.blog.*'))
                            x-data="{open: true}"
                        @else
                            x-data="{open: false}"
                        @endif

                                  >
                        <a @click="open = !open" class="flex justify-between items-center  w-full text-sm text-center p-3 bg-gray-100 text-black rounded  hover:bg-gray-200"
                          >
                            <div class="flex items-center gap-2">
                                <ion-icon name="reader-outline" class="text-2xl"></ion-icon>
                                <span class="text-base px-2"> مدیریت بلاگ  </span>
                            </div>
                            <ion-icon name="caret-forward-circle-outline"  :class="{'hidden' : open }" class="text-2xl text-gray-600"></ion-icon>
                            <ion-icon name="caret-down-circle-outline" :class="{'hidden' : !open }" class="text-2xl text-gray-600"></ion-icon>

                        </a>

                        <ul x-show="open" x-transition class="flex flex-col gap-2 px-4">

                            <li class="flex">
                                <a href="{{route('admin.blog.report')}}" class="w-full text-sm text-center p-2  rounded
                                @if (request()->routeIs('admin.blog.report'))
                                    bg-gray-800 text-white
                                @else
                                    bg-gray-100 hover:bg-gray-200 text-black
                                @endif
                                "> گزارش و آمار بلاگ    </a>
                            </li>
                            <li class="flex">
                                <a href="{{route('admin.blog.content.index')}}" class="w-full text-sm text-center p-2  rounded
                                @if (request()->routeIs('admin.blog.content.*'))
                                    bg-gray-800 text-white
                                @else
                                    bg-gray-100 hover:bg-gray-200 text-black
                                @endif
                                "> مطالب  </a>
                            </li>
                            <li class="flex">
                                <a href="{{route('admin.blog.categories.index')}}" class="w-full text-sm text-center p-2 rounded
                                @if (request()->routeIs('admin.blog.categories.*'))
                                    bg-gray-800 text-white
                                @else
                                    bg-gray-100 hover:bg-gray-200 text-black
                                @endif
                                ">دسته بندی های مطالب   </a>
                            </li>
                            <li class="flex">
                                <a href="{{route('admin.blog.tags.index')}}" class="w-full text-sm text-center p-2 rounded
                                @if (request()->routeIs('admin.blog.tags.*'))
                                    bg-gray-800 text-white
                                @else
                                    bg-gray-100 hover:bg-gray-200 text-black
                                @endif
                                ">تگ های مطالب    </a>
                            </li>
                            <hr>
                        </ul>
                    </li>




            {{-- صفحات --}}
            <li class="flex flex-col gap-3"
                @if (request()->routeIs('admin.11111.*'))
                    x-data="{open: true}"
                @else
                    x-data="{open: false}"
                @endif

                        >
                <a @click="open = !open" class="flex justify-between items-center  w-full text-sm text-center p-4 bg-gray-100 text-black rounded-lg  hover:bg-gray-200"
                href="#">
                    <div class="flex items-center gap-2">
                        <ion-icon name="albums-outline" class="text-2xl"></ion-icon>
                        <span class="text-base px-2 font-bold"> مدیریت صفحات  </span>
                    </div>
                    <ion-icon name="ellipsis-horizontal-outline"  :class="{'hidden' : open }" class="text-2xl text-black"></ion-icon>
                    <ion-icon name="ellipsis-vertical-outline" :class="{'hidden' : !open }" class="text-2xl text-black"></ion-icon>

                </a>

                <ul x-show="open" x-transition class="flex flex-col gap-3 px-4">
                    <li class="flex">
                        <a href="{{route('admin.users.index')}}" class="w-full text-sm text-center p-2 font-bold  rounded-lg  text-black
                        @if (request()->routeIs('admin.1111'))
                            bg-yellow-500
                        @else
                            bg-gray-100 hover:bg-gray-200
                        @endif
                        ">  اخبار و مطالب   </a>
                    </li>
                    <li class="flex">
                        <a href="{{route('admin.users.create')}}" class="w-full text-sm text-center p-2 font-bold rounded-lg  text-black
                        @if (request()->routeIs('admin.users.create'))
                            bg-yellow-500
                        @else
                            bg-gray-100 hover:bg-gray-200
                        @endif
                        ">دسته بندی های مطالب   </a>
                    </li>
                    <li class="flex">
                        <a href="{{route('admin.users.create')}}" class="w-full text-sm text-center p-2 font-bold rounded-lg  text-black
                        @if (request()->routeIs('admin.users.create'))
                            bg-yellow-500
                        @else
                            bg-gray-100 hover:bg-gray-200
                        @endif
                        ">تگ های مطالب   </a>
                    </li>
                    <hr>
                </ul>
            </li>

            {{-- مالی --}}
            <li class="flex flex-col gap-3"
                @if (request()->routeIs('admin.11111.*'))
                    x-data="{open: true}"
                @else
                    x-data="{open: false}"
                @endif

                        >
                <a @click="open = !open" class="flex justify-between items-center  w-full text-sm text-center p-4 bg-gray-100 text-black rounded-lg  hover:bg-gray-200"
                href="#">
                    <div class="flex items-center gap-2">
                        <ion-icon name="cash-outline" class="text-2xl"></ion-icon>
                        <span class="text-base px-2 font-bold"> مدیریت مالی  </span>
                    </div>
                    <ion-icon name="ellipsis-horizontal-outline"  :class="{'hidden' : open }" class="text-2xl text-black"></ion-icon>
                    <ion-icon name="ellipsis-vertical-outline" :class="{'hidden' : !open }" class="text-2xl text-black"></ion-icon>

                </a>

                <ul x-show="open" x-transition class="flex flex-col gap-3 px-4">
                    <li class="flex">
                        <a href="{{route('admin.users.index')}}" class="w-full text-sm text-center p-2 font-bold  rounded-lg  text-black
                        @if (request()->routeIs('admin.1111'))
                            bg-yellow-500
                        @else
                            bg-gray-100 hover:bg-gray-200
                        @endif
                        ">  تراکنش ها   </a>
                    </li>
                    <li class="flex">
                        <a href="{{route('admin.users.index')}}" class="w-full text-sm text-center p-2 font-bold  rounded-lg  text-black
                        @if (request()->routeIs('admin.1111'))
                            bg-yellow-500
                        @else
                            bg-gray-100 hover:bg-gray-200
                        @endif
                        ">  کیف پول ها   </a>
                    </li>
                    <li class="flex">
                        <a href="{{route('admin.users.create')}}" class="w-full text-sm text-center p-2 font-bold rounded-lg  text-black
                        @if (request()->routeIs('admin.users.create'))
                            bg-yellow-500
                        @else
                            bg-gray-100 hover:bg-gray-200
                        @endif
                        ">اطلاعات درگاه پرداخت   </a>
                    </li>
                    <hr>
                </ul>
            </li>

            {{-- تنظیمات سایت --}}
            <li class="flex flex-col gap-3"
                @if (request()->routeIs('admin.11111.*'))
                    x-data="{open: true}"
                @else
                    x-data="{open: false}"
                @endif

                        >
                <a @click="open = !open" class="flex justify-between items-center  w-full text-sm text-center p-4 bg-gray-100 text-black rounded-lg  hover:bg-gray-200"
                href="#">
                    <div class="flex items-center gap-2">
                        <ion-icon name="settings-outline" class="text-2xl"></ion-icon>
                        <span class="text-base px-2 font-bold"> تنظیمات سایت  </span>
                    </div>
                    <ion-icon name="ellipsis-horizontal-outline"  :class="{'hidden' : open }" class="text-2xl text-black"></ion-icon>
                    <ion-icon name="ellipsis-vertical-outline" :class="{'hidden' : !open }" class="text-2xl text-black"></ion-icon>

                </a>

                <ul x-show="open" x-transition class="flex flex-col gap-3 px-4">
                    <li class="flex">
                        <a href="{{route('admin.users.index')}}" class="w-full text-sm text-center p-2 font-bold  rounded-lg  text-black
                        @if (request()->routeIs('admin.1111'))
                            bg-yellow-500
                        @else
                            bg-gray-100 hover:bg-gray-200
                        @endif
                        ">  تراکنش ها   </a>
                    </li>
                    <li class="flex">
                        <a href="{{route('admin.users.create')}}" class="w-full text-sm text-center p-2 font-bold rounded-lg  text-black
                        @if (request()->routeIs('admin.users.create'))
                            bg-yellow-500
                        @else
                            bg-gray-100 hover:bg-gray-200
                        @endif
                        ">اطلاعات درگاه پرداخت   </a>
                    </li>
                    <hr>
                </ul>
            </li>



            <li class="flex mt-5">
                <a class="w-full text-base text-center p-4 bg-red-700 text-white rounded-lg hover:bg-red-600 " href="#">خروج از سایت</a>
            </li>

        </ul>
    </div>
</div>


{{-- mobile menu --}}





   {{-- <div class="md:hidden block"   x-data="{burger : false}">

    <div  class="">
        <div>

            <div class="flex justify-between gap-2 text-center items-center">

                <div class="flex gap-2 text-right justify-center items-center">
                    <div>
                        <img class="w-12 mx-auto rounded-xl" src="{{asset('images/simple.jpg')}}" alt="">
                    </div>
                    <div class="font-bold text-gray-700">حسام محمودی</div>

                </div>

                <div>
                    <div @click="burger=!burger"  class="font-bold text-gray-700">
                        <i class="fas fa-bars text-2xl" ></i>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="mt-3" x-show="burger" x-transition>
        <ul class="flex flex-col gap-3">
            <li class="flex">
                <a class="flex justify-between w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white"
                 href="">

                 <span class="px-2"> داشبورد </span>
                </a>
            </li>
            <li class="flex flex-col gap-3" x-data="{open: false}">
                <a @click="open = !open"   class="flex justify-between  w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white" :class="{'bg-firooze-200' : open , 'text-white' : open}" href="#">
                    <span class="mx-3">اطلاعات کسب و کار</span>
                    <span :class="{'hidden' : open }">
                        <i class="fas fa-plus" ></i>
                    </span>
                    <span :class="{'hidden' : !open }">
                        <i class="fas fa-minus" ></i>
                    </span>
                </a>

                <ul x-show="open" x-transition class="flex flex-col gap-3 px-4">
                    <li class="flex">
                        <a class="w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white"
                         href="">کسب و کارهای من   </a>
                    </li>
                    <li class="flex">
                        <a class="w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white"
                         href="">تکمیل اطلاعات کسب و کار</a>
                    </li>
                    <hr>
                </ul>
            </li>

            @if (Auth::user()->user_type !=0)
                <li class="flex flex-col gap-3" x-data="{open: false}">
                    <a @click="open = !open"   class="flex justify-between w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white" :class="{'bg-firooze-200' : open , 'text-white' : open}" href="#">
                        <span class="mx-3">آگهی ها</span>
                        <span :class="{'hidden' : open }">
                            <i class="fas fa-plus" ></i>
                        </span>
                        <span :class="{'hidden' : !open }">
                            <i class="fas fa-minus" ></i>
                        </span>
                    </a>

                    <ul x-show="open" x-transition class="flex flex-col gap-3 px-4">
                        <li class="flex">
                            <a class="w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white"
                            href="">آگهی های من </a>
                        </li>
                        <li class="flex">
                            <a class="w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white"
                            href="">پکیج های افزایش بازدید </a>
                        </li>
                        <hr>
                    </ul>
                </li>
            @endif



            @if (Auth::user()->user_type !=0)
                <li class="flex flex-col gap-3" x-data="{open: false}">
                    <a @click="open = !open"   class="flex justify-between w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white" :class="{'bg-firooze-200' : open , 'text-white' : open}" href="#">
                        <span class="mx-3">بخش مالی</span>
                        <span :class="{'hidden' : open }">
                            <i class="fas fa-plus" ></i>
                        </span>
                        <span :class="{'hidden' : !open }">
                            <i class="fas fa-minus" ></i>
                        </span>
                    </a>

                    <ul x-show="open" x-transition class="flex flex-col gap-3 px-4">
                        <li class="flex">
                            <a class="w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white"
                            href="">کیف پول </a>
                        </li>
                        <li class="flex">
                            <a class="w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white"
                            href=""> صورت حساب ها</a>
                        </li>
                        <hr>
                    </ul>
                </li>
            @endif


            @if (Auth::user()->user_type !=0)
                <li class="flex flex-col gap-3" x-data="{open: false}">
                    <a @click="open = !open"   class="flex justify-between w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white" :class="{'bg-firooze-200' : open , 'text-white' : open}" href="#">
                        <span class="mx-3">بخش سفارشات</span>
                        <span :class="{'hidden' : open }">
                            <i class="fas fa-plus" ></i>
                        </span>
                        <span :class="{'hidden' : !open }">
                            <i class="fas fa-minus" ></i>
                        </span>
                    </a>

                    <ul x-show="open" x-transition class="flex flex-col gap-3 px-4">
                        <li class="flex">
                            <a class="w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white"
                            href="">سفارشات لحظه ای </a>
                        </li>
                        <hr>
                    </ul>
                </li>
            @endif



            <li class="flex">
                <a class="flex justify-between w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white" href="#">
                    <span class="px-2">لیست علاقمندی ها</span>
                </a>
            </li>





            <li class="flex">
                <a class="flex justify-between w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white" href="#">
                    <span class="px-2">صندوق پیام ها</span>
                </a>
            </li>



            <li class="flex flex-col gap-3" x-data="{open: false}">
                <a @click="open = !open"   class="flex justify-between w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white" :class="{'bg-firooze-200' : open , 'text-white' : open}" href="#">
                    <span class="mx-3">اطلاعات کاربری</span>
                    <span :class="{'hidden' : open }">
                        <i class="fas fa-plus" ></i>
                    </span>
                    <span :class="{'hidden' : !open }">
                        <i class="fas fa-minus" ></i>
                    </span>



                </a>

                <ul x-show="open" x-transition class="flex flex-col gap-3 px-4">
                    <li class="flex">
                        <a class="w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white"
                href="">تکمیل اطلاعات کاربری </a>
                    </li>
                    <li class="flex">
                        <a class="w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white"
                         href="">تغییر گذرواژه</a>
                    </li>
                </ul>
            </li>

            <li class="flex flex-col gap-3" x-data="{open: false}">
                <a @click="open = !open"   class="flex justify-between w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white" :class="{'bg-firooze-200' : open , 'text-white' : open}" href="#">
                    <span class="mx-3">راهنما و پشتیبانی</span>
                    <span :class="{'hidden' : open }">
                        <i class="fas fa-plus" ></i>
                    </span>
                    <span :class="{'hidden' : !open }">
                        <i class="fas fa-minus" ></i>
                    </span>



                </a>

                <ul x-show="open" x-transition class="flex flex-col gap-3 px-4">
                    <li class="flex">
                        <a class="w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white"
                         href="">تیکت های پشتیبانی</a>
                    </li>
                    <li class="flex">
                        <a class="w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white"
                         href="">سوالات متداول</a>
                    </li>
                    <li class="flex">
                        <a class="w-full text-sm text-center p-2 bg-gray-100 rounded-lg hover:bg-firooze-200 hover:text-white"
                         href="">راهنمای کار با پنل  </a>
                    </li>
                    <hr>
                </ul>
            </li>
            <li class="flex">
                <a class="w-full text-sm text-center p-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 "
                 href="">بازگشت به سایت</a>
            </li>

            <li class="flex">
                <a class="w-full text-sm text-center p-2 bg-red-700 text-white rounded-lg hover:bg-red-600 " href="#">خروج از سایت</a>
            </li>

        </ul>
    </div>
</div> --}}
