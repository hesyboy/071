<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class AdvertiseCategory extends Model
{
    use HasFactory;

    use Sluggable;

    protected $fillable=[
        'title',
        'description',
        'icon',
        'parent_id',
        'status'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getParent(){
        return $this->belongsTo(AdvertiseCategory::class,'parent_id','id')->withDefault([
            'title' => 'دسته اصلی'
        ]);
    }
}
