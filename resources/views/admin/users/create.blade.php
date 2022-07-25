@extends('admin.layouts.master')

@section('body')
    <div class=" p-3  ">


        <div class="p-2 shadow rounded bg-white  ">
            <div class="flex gap-3 items-center justify-between">
                <div class="flex gap-3 items-center">
                    <div class="">
                        <img class="h-16" src="{{asset('images/add.svg')}}" alt="">
                    </div>
                    <div class="py-2 text-gray-800">
                        <div class="text-xl font-bold">
                            ثبت کاربر جدید
                        </div>
                    </div>
                </div>
                <div>
                    <a href="{{route('admin.users.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded hover:bg-firooze-300 ">بازگشت به کاربران   </a>
                </div>
            </div>
        </div>

        <div class="flex items-center">
            <div class="w-full">
                <div class="mt-3">
                    <form action="{{route('admin.users.store')}}" method="post">
                        @csrf
                        <div class="flex flex-col gap-5">


                            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">
                                <div class="flex flex-col md:flex-row gap-3">

                                    <div class="w-full md:w-3/12">
                                        <div class="text-sm">
                                            <span>نام  </span>
                                            @error('name')
                                            <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <input name="name" class="px-2 py-2 my-2 rounded text-sm w-full"
                                         type="text" value="{{old('name')}}">
                                    </div>

                                    <div class="w-full md:w-3/12">
                                        <div class="text-sm">
                                            <span>نام خانوادگی  </span>
                                            @error('last_name')
                                            <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <input name="last_name" class="px-2 py-2 my-2 rounded text-sm w-full"
                                         type="text" value="{{old('last_name')}}">
                                    </div>

                                    <div class="w-full md:w-3/12">
                                        <div class="text-sm">
                                            <span>شماره همراه  </span>
                                            @error('phone')
                                            <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <input name="phone" class="px-2 py-2 my-2 rounded text-sm w-full"
                                         type="text" value="{{old('phone')}}">
                                    </div>
                                    <div class="w-full md:w-3/12">
                                        <div class="text-sm">
                                            <span>ایمیل  </span>
                                            @error('email')
                                            <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <input name="email" class="px-2 py-2 my-2 rounded text-sm w-full"
                                         type="text" value="{{old('email')}}">
                                    </div>

                                </div>

                                <div class="flex gap-3">
                                    <div class="w-full md:w-3/12">
                                        <div class="text-sm">
                                            <span>استان </span>
                                            @error('state_id')
                                            <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <select name="state_id" class="px-2 py-2 my-2 rounded text-sm w-full">
                                            <option value="1">تهران </option>
                                            <option value="2">شیراز</option>
                                        </select>
                                    </div>
                                    <div class="w-full md:w-9/12">
                                        <div class="text-sm">
                                            <span>آدرس  </span>
                                            @error('address')
                                            <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <input name="address" class="px-2 py-2 my-2 rounded text-sm w-full"
                                         type="text" value="{{old('address')}}">
                                    </div>
                                </div>
                            </div>






                            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">
                                <div class="flex flex-col md:flex-row gap-3">
                                    <div class="w-full md:w-3/12">
                                        <div class="text-sm">
                                            <span>نوع اکانت  </span>
                                            @error('is_admin')
                                            <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <select name="is_admin" class="px-2 py-2 my-2 rounded text-sm w-full">
                                            <option value="0" @if(old('is_admin')==0) selected @endif>کاربر عادی </option>
                                            <option value="1" @if(old('is_admin')==1) selected @endif>ادمین</option>
                                        </select>
                                    </div>
                                    <div class="w-full md:w-3/12">
                                        <div class="text-sm">
                                            <span>وضعبت اکانت </span>
                                            @error('status')
                                            <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <select name="status" class="px-2 py-2 my-2 rounded text-sm w-full">
                                            <option value="1" @if(old('status')==1) selected @endif>فعال</option>
                                            <option value="0" @if(old('status')==0) selected @endif>غیر فعال </option>
                                        </select>
                                    </div>
                                </div>
                            </div>




                            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">
                                <div class="flex gap-5 ">
                                    <div class="w-3/12">
                                        <div class="text-sm">
                                            <span>پسورد  </span>
                                            @error('password')
                                            <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <input name="password" type="password" class="px-2 py-2 my-2 rounded text-sm w-full"
                                         type="text" value="{{old('password')}}">
                                    </div>
                                    <div class="w-3/12">
                                        <div class="text-sm">
                                            <span>تایید پسورد </span>
                                            @error('password_confirmation')
                                            <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <input name="password_confirmation" type="password" class="px-2 py-2 my-2 rounded text-sm w-full"
                                         type="text" value="{{old('password_confirmation')}}">
                                    </div>

                                </div>
                            </div>



                            <div>
                                <div class="bg-gray-800 h-4 rounded"></div>


                                <div class="flex justify-end gap-3 items-center mt-2">
                                    <div class="mt-2">
                                        <button type="submit" class=" text-sm text-center py-2 px-4 bg-emerald-600 hover:bg-emerald-700 text-gray-100 rounded  ">افزودن کاربر جدید </button>
                                    </div>
                                    <div class="mt-2">
                                        <a href="{{route('admin.users.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded  ">انصراف </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>




    </div>

    <script>
        function showImage() {
            return {
                showPreview(event) {
                    if (event.target.files.length > 0) {
                        var src = URL.createObjectURL(event.target.files[0]);
                        var preview = document.getElementById("preview");
                        preview.src = src;
                        preview.style.display = "block";
                    }
                }
            }
        }
    </script>

@endsection
