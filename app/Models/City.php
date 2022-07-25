<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class City extends Model
{
    use HasFactory;

    use Sluggable;

    protected $fillable=[
        'name',
        'status'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getAreas(){
        return $this->hasMany(Area::class,'city_id','id');
    }

    public function getAdvertises(){
        return $this->hasMany(Advertise::class,'city_id','id');
    }


}
