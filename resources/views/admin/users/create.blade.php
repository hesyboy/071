@extends('admin.layouts.master')

@section('body')
    <div class=" p-3  ">



        <div class="flex items-center">
            <div class="w-full">
                <div class="mb-3">
                    <div class="text-lg font-bold py-2">ثبت کاربر جدید</div>
                </div>
                <hr>
                <div class="mt-3">
                    <form action="{{route('admin.users.store')}}" method="post">
                        @csrf
                        <div class="flex flex-col gap-5">


                            <div class="flex flex-col md:flex-row gap-3">

                                <div class="w-full md:w-3/12">
                                    <div class="text-sm">
                                        <span>نام  </span>
                                        @error('name')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input name="name" class="px-2 py-2 my-2 rounded-lg text-sm w-full"
                                     type="text" value="{{old('name')}}">
                                </div>

                                <div class="w-full md:w-3/12">
                                    <div class="text-sm">
                                        <span>نام خانوادگی  </span>
                                        @error('last_name')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input name="last_name" class="px-2 py-2 my-2 rounded-lg text-sm w-full"
                                     type="text" value="{{old('last_name')}}">
                                </div>

                            </div>


                            <div class="flex flex-col md:flex-row gap-3">
                                <div class="w-full md:w-3/12">
                                    <div class="text-sm">
                                        <span>شماره همراه  </span>
                                        @error('phone')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input name="phone" class="px-2 py-2 my-2 rounded-lg text-sm w-full"
                                     type="text" value="{{old('phone')}}">
                                </div>
                                <div class="w-full md:w-3/12">
                                    <div class="text-sm">
                                        <span>ایمیل  </span>
                                        @error('email')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input name="email" class="px-2 py-2 my-2 rounded-lg text-sm w-full"
                                     type="text" value="{{old('email')}}">
                                </div>
                            </div>




                            <div class="flex gap-3">
                                <div class="w-full md:w-2/12">
                                    <div class="text-sm">
                                        <span>استان </span>
                                        @error('state_id')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <select name="state_id" class="px-2 py-2 my-2 rounded-lg text-sm w-full">
                                        <option value="1">تهران </option>
                                        <option value="2">شیراز</option>
                                    </select>
                                </div>
                                <div class="w-full md:w-4/12">
                                    <div class="text-sm">
                                        <span>آدرس  </span>
                                        @error('address')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input name="address" class="px-2 py-2 my-2 rounded-lg text-sm w-full"
                                     type="text" value="{{old('address')}}">
                                </div>
                            </div>


                            <hr>

                            <div class="flex flex-col md:flex-row gap-3">
                                <div class="w-full md:w-3/12">
                                    <div class="text-sm">
                                        <span>نوع اکانت  </span>
                                        @error('is_admin')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <select name="is_admin" class="px-2 py-2 my-2 rounded-lg text-sm w-full">
                                        <option value="0">کاربر عادی </option>
                                        <option value="1">ادمین</option>
                                    </select>
                                </div>
                                <div class="w-full md:w-3/12">
                                    <div class="text-sm">
                                        <span>وضعبت اکانت </span>
                                        @error('status')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <select name="status" class="px-2 py-2 my-2 rounded-lg text-sm w-full">
                                        <option value="1">فعال</option>
                                        <option value="0">غیر فعال </option>
                                    </select>
                                </div>
                            </div>

                            <hr>


                            <div class="flex gap-5 ">
                                <div class="w-3/12">
                                    <div class="text-sm">
                                        <span>پسورد  </span>
                                        @error('password')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input name="password" class="px-2 py-2 my-2 rounded-lg text-sm w-full"
                                     type="text" value="{{old('password')}}">
                                </div>
                                <div class="w-3/12">
                                    <div class="text-sm">
                                        <span>تایید پسورد </span>
                                        @error('password_confirmation')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input name="password_confirmation" class="px-2 py-2 my-2 rounded-lg text-sm w-full"
                                     type="text" value="{{old('password_confirmation')}}">
                                </div>

                            </div>


                            <div class="mt-5">
                                <button class=" text-sm text-center py-2 px-4 bg-green-700 text-white rounded-lg hover:bg-firooze-300 ">افزودن کاربر جدید </button>
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
