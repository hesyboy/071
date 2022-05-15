@extends('admin.layouts.master')

@section('body')
    <div class=" p-3  ">



        <div class="flex items-center">
            <div class="w-full">
                <div class="mb-3">
                    <div class="text-lg font-bold py-2">مشاهده و ثبت تغییرات کاربران</div>
                </div>
                <hr>
                <div class="mt-3">
                    <form action="{{route('admin.users.update',$user)}}" method="post">
                        @csrf
                        @method('put')
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
                                     type="text" value="{{old('name',$user->name)}}">
                                </div>

                                <div class="w-full md:w-3/12">
                                    <div class="text-sm">
                                        <span>نام خانوادگی  </span>
                                        @error('last_name')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input name="last_name" class="px-2 py-2 my-2 rounded-lg text-sm w-full"
                                     type="text" value="{{old('last_name',$user->last_name)}}">
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
                                     type="text" value="{{old('phone',$user->phone)}}">
                                </div>
                                <div class="w-full md:w-3/12">
                                    <div class="text-sm">
                                        <span>ایمیل  </span>
                                        @error('email')
                                        <span class="block bg-red-500 rounded-lg p-1 text-white text-xs">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <input name="email" class="px-2 py-2 my-2 rounded-lg text-sm w-full"
                                     type="text" value="{{old('email',$user->email)}}">
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
                                        <option value="1" @if($user->state_id==1) selected @endif>تهران </option>
                                        <option value="2" @if($user->state_id==2) selected @endif>شیراز</option>
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
                                     type="text" value="{{old('address',$user->address)}}">
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
                                        <option value="0" @if(old('is_admin',$user->is_admin)==0) selected @endif>کاربر عادی </option>
                                        <option value="1" @if(old('is_admin',$user->is_admin)==1) selected @endif>ادمین</option>
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
                                        <option value="1" @if($user->status==1) selected @endif>فعال</option>
                                        <option value="0" @if($user->status==0) selected @endif>غیر فعال </option>
                                    </select>
                                </div>
                            </div>

                            <hr>

                            <div class="text-sm text-gray-500">
                                در صورت عدم نیاز به تغییر پسورد کاربر ، فیلدهای پسورد را خالی بگزارید
                            </div>

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
                                <button class=" text-sm text-center py-2 px-4 bg-green-700 text-white rounded-lg hover:bg-firooze-300 ">ثبت تغییرات </button>
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
