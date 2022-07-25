<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Area extends Model
{
    use HasFactory;

    use Sluggable;

    protected $fillable=[
        'name',
        'status',
        'city_id',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getcity(){
        return $this->belongsTo(City::class,'city_id','id')->withDefault(['name' => '---']);
    }


    public function getAdvertises(){
        return $this->hasMany(Advertise::class,'area_id','id');
    }
}
