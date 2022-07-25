<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Advertise;
use App\Models\AdvertiseCategory;
use App\Models\City;
use App\Models\User;

use Livewire\WithFileUploads;

class EditAdvertise extends Component
{
    use WithFileUploads;


    public $user_id;
    public $title;
    public $description;
    public $category_id;
    public $adv_type;
    public $price;
    public $discount;
    public $city_id;
    public $area_id;
    public $location;
    public $show_type;
    public $chat;
    public $show_number;
    public $status;

    public $users;
    public $categories;
    public $cities=[];
    public $areas=[];


    public $image = [];


    public $advertise;


    public function mount(Advertise $advertise){

        $this->advertise=$advertise;

        $this->user_id = $advertise->user_id;
        $this->title = $advertise->title;
        $this->description = $advertise->description;
        $this->category_id = $advertise->category_id;
        $this->adv_type = $advertise->adv_type;
        $this->price = $advertise->price;
        $this->discount = $advertise->discount;
        $this->city_id = $advertise->city_id;

        if($this->city_id != ""){
            $this->areas=City::find($this->city_id)->getAreas()->get();
            // dd($this->areas);
        }
        else{
            $this->areas=[];
            $this->area_id='';
        }


        $this->area_id = $advertise->area_id;
        $this->location = $advertise->location;
        $this->show_type = $advertise->show_type;
        $this->chat = $advertise->chat;
        $this->show_number = $advertise->show_number;
        $this->status = $advertise->status;

        // $this->image[0]=$advertise->image;


        $this->users=User::all();
        $this->categories=AdvertiseCategory::all();
        $this->cities=City::all();
        // $this->areas=City::find($this->city_id)->getAreas()->get();
    }

    public function updatedCityId(){
        if($this->city_id != null){
            $this->areas=City::find($this->city_id)->getAreas()->get();
            $this->area_id='';
            // dd($this->areas);
        }
        else{
            $this->areas=[];
            $this->area_id='';
        }


    }


    protected function updated($input){

        $this->validateOnly($input);

    }

    protected $rules = [
        'user_id' => 'required',
        'title' => 'required|min:6',
        'description' => 'required',
        'image.*' => 'required|mimes:JPG,PNG,jpeg,jpg,png,gif|max:1024',
        'category_id' => 'required',
        'adv_type' => 'required',
        'price' => 'required',
        'discount' => 'required',
        'city_id' => 'required',
        'area_id' => 'required',
        'location' => 'required',
        'show_type' => 'required',
        'chat' => 'required',
        'show_number' => 'required',
        'status' => 'required',
    ];


    public function submit()
    {


        $this->validate();
        // Execution doesn't reach here if validation fails.

        try {
            $this->advertise->user_id = $this->user_id;
            $this->advertise->title = $this->title;
            $this->advertise->description = $this->description;
            $this->advertise->category_id = $this->category_id;
            $this->advertise->adv_type = $this->adv_type;
            $this->advertise->price = $this->price;
            $this->advertise->discount = $this->discount;
            $this->advertise->city_id = $this->city_id;
            $this->advertise->area_id = $this->area_id;
            $this->advertise->location = $this->location;
            $this->advertise->show_type = $this->show_type;
            $this->advertise->chat = $this->chat;
            $this->advertise->show_number = $this->show_number;
            $this->advertise->status = $this->status;


            if(count($this->image)>0){
                $file=$this->image[0];
                $fileExtention=$file->getClientOriginalExtension();
                $fileName=rand(1,1000).time().'.'.$fileExtention;
                $file->storeAs('public/advertise',$fileName);
                $this->advertise->image='storage/advertise/'.$fileName;
            }


            $this->advertise->save();

            return redirect()->route('admin.advertise.index');

            //code...
        } catch (\Throwable $th) {
            dd($th);
        }


    }

    public function render()
    {
        return view('livewire.admin.edit-advertise');
    }
}
