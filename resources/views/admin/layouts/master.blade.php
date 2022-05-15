<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        @include('admin.layouts.headtag')
        @yield('headtag')
        {{-- @livewireStyles --}}
    </head>



<body dir="rtl" class="relative bg-gray-100">

    {{-- @include('sweetalert::alert') --}}

    <div class='main_header flex'>
        @include('admin.layouts.header')
    </div>

    <div class='main_container container mx-auto'>
        <div class="mt-5 p-3">
            <div class="flex flex-col md:flex-row justify-between gap-5">
                    <div class=" md:flex md:flex-col md:w-1/5 p-3 shadow rounded-xl bg-white">
                        @include('admin.layouts.sidebar')
                    </div>

                    <div class="w-full md:w-4/5 p-5 shadow rounded-xl bg-white">
                        @yield('body')
                    </div>

            </div>
        </div>

    </div>

</body>
{{-- scripts --}}
@include('admin.layouts.script')
@yield('script')
{{-- @livewireScripts --}}
 </html>



