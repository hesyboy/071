<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertiseFilter extends Model
{
    use HasFactory;

    protected $table='advertise_filters';

    protected $fillable=[
        'title',
        'filter_type',
        'category_id',
        'status',

    ];

    public function getCategory(){
        return $this->belongsTo(AdvertiseCategory::class,'category_id','id')->withDefault(['title' => '---']);
    }

    public function get_attributes(){
        return $this->hasMany(AdvertiseAttribute::class,'filter_id','id');
    }
}
