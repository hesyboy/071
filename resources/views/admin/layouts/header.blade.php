<header class="shadow-lg bg-white w-full">
    <div class="container mx-auto ">
        <div class="flex  items-center justify-between gap-5 p-2">
            <div>
                <div>
                    <a class="" href="">
                        <div>
                            <h2>071</h2>
                            <span>Admin Panel</span>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div>
                    <ul class="flex relative gap-3 items-center">

                        <li>
                            <div x-data="{open : false}">
                                <div @click="open = true" class="flex gap-2 items-center rounded-lg shadow-xl p-2 text-firooze-200 border border-gray-200 cursor-pointer
                                hover:text-white hover:bg-firooze-200 transition ease-in-out duration-150">
                                        <i class="fas fa-user text-2xl"></i>
                                        <div class="flex flex-col gap-1">
                                            <div class="text-sm font-bold  ">
                                                {{-- {{Auth()->user()->mobile}} --}}
                                            </div>
                                        </div>
                                </div>

                                <div x-show="open" x-transition @click.away="open = ! open" class="absolute z-10 top-15 left-0 bg-white p-3 rounded-lg shadow-lg mt-5 w-44">
                                        <div class="p-2">
                                            <ul class="flex flex-col gap-3 text-sm">
                                                <li>
                                                    <a class="flex items-center gap-3" href="{{route('admin.index')}}">
                                                        <i class="fas fa-house-user text-gray-600"></i>
                                                        <span>پنل کاربری</span>
                                                    </a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a class="flex items-center gap-3" href="#">
                                                        <i class="far fa-heart text-gray-600"></i>
                                                        <span>علاقمندی ها </span>
                                                    </a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a class="flex items-center gap-3" href="#">
                                                        <i class="fas fa-sign-out-alt text-gray-600"></i>
                                                        <span>خروج </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                </div>


                            </div>
                        </li>


                        <li>
                            <div>
                                <div class="flex items-center rounded-lg shadow-xl p-2 text-firooze-200 border border-gray-200">
                                        <i class="fas fa-bell text-2xl"></i>
                                </div>
                            </div>
                        </li>


                        <li>
                            <div>
                                <div class="flex items-center rounded-lg shadow-xl p-2 text-firooze-200 border border-gray-200">
                                    <i class="fas fa-plus text-2xl"></i>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            {{-- <div>
                <div class="flex items-center relative">
                    <div class="mx-2">
                        <a class="flex py-2 px-4 bg-yellow-500 rounded-2xl text-white" href="#">
                            <i class="fas fa-plus"></i>
                            <span>ثبت آگهی رایگان</span>

                        </a>
                    </div>
                    <div class="mx-2" x-data="{ open: false }">
                        <a @click="open = true" class="flex py-2 px-4 bg-firooze-200 rounded-2xl text-white" href="#">
                            <i class="far fa-user"></i>
                            <span>ورود / عضویت</span>

                        </a>
                        <div x-show="open" x-transition @click.away="open = ! open" class="absolute bg-white p-3 rounded shadow-lg mt-5 -right-16 w-80">
                            <div class="p-2">
                                <h3 class="mb-1">
                                    ورود به سایت
                                </h3>
                                <div class="text-xs mb-2">
                                    جهت ورود به سایت اطلاعات کاربری خود را وارد فرمایید.
                                </div>
                                <hr>
                                <form action="">
                                    <input class="px-2 py-2 mx-1 my-2 rounded-full text-sm w-full" type="text" placeholder="نام کاربری">
                                    <input class="px-2 py-2 mx-1 my-2 rounded-full text-sm w-full" type="text" placeholder="رمز عبور">
                                    <button class="p-2 my-2 bg-firooze-200 rounded-2xl text-white w-full">ورود به سایت</button>
                                </form>
                                <hr>
                                <div>
                                    <button class="p-2 my-2 bg-gray-500 rounded-2xl text-white w-full">عضویت در سایت</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @auth
                    <div class="mx-2" x-data="{ open: false }">
                        <a @click="open = true" class="py-2 px-4 bg-gray-600 rounded-2xl text-white" href="#">
                            <i class="far fa-user"></i>
                            <span>آقای حسام محمودی</span>

                        </a>
                        <div x-show="open" x-transition @click.away="open = ! open" class="absolute bg-white p-3 rounded shadow-lg mt-5 w-44">
                            <div class="p-2">
                                <ul class="flex flex-col gap-3 text-sm">
                                    <li>
                                        <a class="flex items-center gap-3" href="#">
                                            <i class="fas fa-house-user text-gray-600"></i>
                                            <span>پنل کاربری</span>
                                        </a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a class="flex items-center gap-3" href="#">
                                            <i class="far fa-heart text-gray-600"></i>
                                            <span>علاقمندی ها </span>
                                        </a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a class="flex items-center gap-3" href="#">
                                            <i class="fas fa-sign-out-alt text-gray-600"></i>
                                            <span>خروج </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endauth


                </div>
            </div> --}}
        </div>
        <div class="relative h-0.5 bg-gradient-to-r from-white via-firooze-200 to-white"></div>

    </div>
</header>








