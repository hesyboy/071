<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Advertise extends Model
{
    use HasFactory;
    use Sluggable;


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    protected $fillable=[
        'user_id',
        'title',
        'description',
        'slug',
        'category_id',
        'adv_type',
        'price',
        'discount',
        'city_id',
        'area_id',
        'location',
        'show_type',
        'chat',
        'show_number',
        'status',
    ];


    public function getCategory(){
        return $this->belongsTo(AdvertiseCategory::class,'category_id','id')->withDefault(['title' => '---']);
    }

    public function getUser(){
        return $this->belongsTo(User::class,'user_id','id')->withDefault(['phone' => '---']);
    }


}




