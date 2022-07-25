<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertiseAttribute extends Model
{
    use HasFactory;


    protected $table='advertise_attributes';

    protected $fillable=[
        'value',
        'filter_id',
        'order',

    ];

    public function getFilter(){
        return $this->belongsTo(AdvertiseFilter::class,'filter_id','id')->withDefault(['title' => '---']);
    }
}
