<?php

namespace App\Http\Livewire\Admin;

use App\Models\Advertise;
use App\Models\AdvertiseCategory;
use App\Models\City;
use App\Models\User;
use Livewire\Component;

use Livewire\WithFileUploads;


class AddAdvertise extends Component
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

    public $selectedCategory;
    public $filters=[];


    public $image = [];


    public function mount(){
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

    public function updatedCategoryId(){
        if($this->category_id!=null){
            $this->selectedCategory=AdvertiseCategory::find($this->category_id);
            $this->filters= $this->selectedCategory->getFilters;
        }
        // dd($this->filters);
        else{
            $this->selectedCategory='';
            $this->filters=null;
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

        // dd($this->image);

        $this->validate();
        // Execution doesn't reach here if validation fails.

        try {
            $advertise=new Advertise();
            $advertise->user_id = $this->user_id;
            $advertise->title = $this->title;
            $advertise->description = $this->description;
            $advertise->category_id = $this->category_id;
            $advertise->adv_type = $this->adv_type;
            $advertise->price = $this->price;
            $advertise->discount = $this->discount;
            $advertise->city_id = $this->city_id;
            $advertise->area_id = $this->area_id;
            $advertise->location = $this->location;
            $advertise->show_type = $this->show_type;
            $advertise->chat = $this->chat;
            $advertise->show_number = $this->show_number;
            $advertise->status = $this->status;


            if(count($this->image)>0){
                $file=$this->image[0];
                $fileExtention=$file->getClientOriginalExtension();
                $fileName=rand(1,1000).time().'.'.$fileExtention;
                $file->storeAs('public/advertise',$fileName);
                $advertise->image='storage/advertise/'.$fileName;
            }


            $advertise->save();

            return redirect()->route('admin.advertise.index');

            //code...
        } catch (\Throwable $th) {
            dd($th);
        }


    }
    public function render()
    {
        return view('livewire.admin.add-advertise');
    }


}
