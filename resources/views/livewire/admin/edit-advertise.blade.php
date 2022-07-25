<div>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        @csrf
        <div class="w-full flex flex-col gap-5">





            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">


                <div class="w-full md:w-3/12">
                    <div class="text-sm">
                        <span>انتخاب کاربر  </span>
                        @error('user_id')
                        <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                        @enderror
                    </div>
                    <select wire:model="user_id" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                        <option value="">انتخاب کنید </option>
                        @foreach ($users as $item)
                            <option value={{$item->id}}>{{$item->phone}} {{$item->name}} {{$item->last_name}} </option>
                        @endforeach
                    </select>
                </div>


                <div class="flex w-full flex-col md:flex-row gap-3">
                    <div class="w-full md:w-6/12">
                        <div class="text-sm">
                            <span>عنوان آگهی   </span>
                            @error('title')
                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                            @enderror
                        </div>
                        <input wire:model.lazy="title" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400"
                         type="text">
                    </div>


                    <div class="w-full md:w-3/12">
                        <div class="text-sm">
                            <span>دسته بندی  </span>
                            @error('category_id')
                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                            @enderror
                        </div>
                        <select  wire:model="category_id" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                            <option value="">انتخاب کنید </option>
                            @foreach ($categories as $item)
                                <option value={{$item->id}}>{{$item->title}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full md:w-3/12">
                        <div class="text-sm">
                            <span>نوع آگهی  </span>
                            @error('adv_type')
                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                            @enderror
                        </div>
                        <select wire:model="adv_type" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                            <option value="">انتخاب کنید </option>
                            <option value="0">شخصی </option>
                            <option value="1">فروشگاهی </option>
                        </select>
                    </div>

                </div>

                <div class="w-full md:w-12/12">
                    <div class="text-sm mb-2">
                        <span>توضیحات دسته بندی  </span>
                        @error('description')
                        <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                        @enderror
                    </div>
                     <textarea name="description" wire:model="description" rows="5"  class="px-2 py-1 my-2 rounded text-sm w-full border bg-gray-50 border-gray-400"></textarea>
                </div>





            </div>



            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">

                <div class="flex w-full flex-col md:flex-row gap-3">
                    <div class="w-full md:w-3/12">
                        <div class="text-sm">
                            <span>قیمت</span>
                            @error('price')
                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                            @enderror
                        </div>
                        <input name="price" wire:model="price" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400"
                         type="text">
                    </div>

                    <div class="w-full md:w-3/12">
                        <div class="text-sm">
                            <span>تخفیف</span>
                            @error('discount')
                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                            @enderror
                        </div>
                        <input name="discount" wire:model="discount" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400"
                         type="text">
                    </div>
                </div>
            </div>


            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">

                <div class="flex w-full flex-col md:flex-row gap-3">
                    <div class="w-full md:w-3/12">
                        <div class="text-sm">
                            <span>شهر  </span>
                            @error('city_id')
                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                            @enderror
                        </div>
                        <select wire:model="city_id" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                            <option value="">انتخاب کنید </option>
                            @foreach ($cities as $item)
                                <option value={{$item->id}}>{{$item->name}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full md:w-3/12">
                        <div class="text-sm">
                            <span>محله  </span>
                            @error('area_id')
                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                            @enderror
                        </div>
                         <select wire:model="area_id" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                            <option value="">انتخاب کنید </option>
                            @foreach ($areas as $item)
                                <option value={{$item->id}}>{{$item->name}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full md:w-6/12">
                        <div class="text-sm">
                            <span>لوکیشن</span>
                            @error('location')
                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                            @enderror
                        </div>
                        <input wire:model="location" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400"
                         type="text">
                    </div>
                </div>
            </div>


            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">

                <div class="flex w-full flex-col md:flex-row gap-3">
                    <div class="w-full md:w-6/12">
                        <div class="text-sm my-3">
                            <span> تصاویر آگهی </span>
                            @error('image')
                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="flex gap-3 items-center">


                                @if (count($image)==0)
                                <div class="w-24 h-24 border-2 border-dashed rounded-lg p-1 relative">
                                    <img id="preview" class="rounded-lg w-32 max-h-32"  src="{{asset('/images/simple.jpg')}}">
                                </div>
                                @elseif (count($image)==1)
                                <div class="w-24 h-24 border-2 border-dashed rounded-lg p-1 relative">
                                    <img id="preview" class="rounded-lg w-32 max-h-32"  src="{{asset($image[0])}}">
                                </div>
                                @else
                                    @foreach ($image as $item)
                                    <div class="w-24 h-24 border-2 border-dashed rounded-lg p-1 relative">
                                        <img id="preview" class="rounded-lg w-32 max-h-32"  src="{{$item->temporaryUrl()}}">
                                    </div>
                                    @endforeach


                                @endif

                                <label class="flex items-center justify-center p-1  rounded  tracking-wide uppercase cursor-pointer hover:bg-gray-200 hover:text-white text-gray-400 ease-linear transition-all duration-150">
                                    <div class="flex items-center justify-center">
                                        <div class="w-24 h-24 border-2 border-dashed rounded-lg p-1 flex items-center justify-center ">
                                           <span class="text-4xl">+</span>
                                        </div>
                                        <div>
                                            <input name="image" wire:model="image" type="file" class="hidden" multiple />
                                        </div>
                                    </div>

                                </label>
                                {{-- <ion-icon name="add-outline" class="text-6xl text-gray-200 absolute top-4 w-20 text-center"></ion-icon> --}}
                            </div>

                    </div>

                </div>

            </div>




            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">

                <div class="flex w-full flex-col md:flex-row gap-3">
                    <div class="w-full md:w-3/12">
                        <div class="text-sm">
                            <span>نوع نمایش  </span>
                            @error('show_type')
                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                            @enderror
                        </div>
                        <select wire:model="show_type"  class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                            <option value="">انتخاب کنید </option>
                            <option value="1">عادی</option>
                            <option value="0">فوری </option>
                        </select>
                    </div>

                    <div class="w-full md:w-3/12">
                        <div class="text-sm">
                            <span>امکان چت  </span>
                            @error('chat')
                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                            @enderror
                        </div>
                         <select wire:model="chat" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                            <option value="">انتخاب کنید </option>
                            <option value="1">فعال</option>
                            <option value="0">غیر فعال </option>
                        </select>
                    </div>

                    <div class="w-full md:w-3/12">
                        <div class="text-sm">
                            <span>نمایش اطلاعات تماس </span>
                            @error('show_number')
                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                            @enderror
                        </div>
                         <select wire:model="show_number" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                            <option value="">انتخاب کنید </option>
                            <option value="1">فعال</option>
                            <option value="0">غیر فعال </option>
                        </select>
                    </div>
                </div>
            </div>




            <div class="flex flex-col gap-3 bg-white p-5 shadow rounded">

                <div class="flex w-full flex-col md:flex-row gap-3">
                    <div class="w-full md:w-3/12">
                        <div class="text-sm">
                            <span>وضعیت  </span>
                            @error('status')
                            <span class="block bg-red-500 rounded p-1 text-white text-xs">{{$message}}</span>
                            @enderror
                        </div>
                        <select wire:model="status" class="px-2 py-2 my-2 rounded text-sm w-full bg-gray-50 border-gray-400">
                            <option value="">انتخاب کنید </option>
                            <option value="1">فعال</option>
                            <option value="2">در انتظار تایید</option>
                            <option value="0">غیر فعال </option>
                        </select>
                    </div>

                </div>
            </div>














            <div>
                <div class="bg-gray-800 h-4 rounded"></div>


                <div class="flex justify-end gap-3 items-center mt-2">
                    <div class="mt-2">
                        <button type="submit" class=" text-sm text-center py-2 px-4 bg-orange-600 hover:bg-orange-700 text-gray-100 rounded  ">ثبت تغییرات آگهی </button>
                    </div>
                    <div class="mt-2">
                        <a href="{{route('admin.advertise.index')}}" class=" text-sm text-center py-2 px-4 bg-gray-800 hover:bg-gray-700 text-gray-100 rounded  ">انصراف </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
