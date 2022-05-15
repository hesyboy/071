<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertiseCategory extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'icon',
        'parent_id',
        'status'
    ];

    public function getParent(){
        return $this->belongsTo(AdvertiseCategory::class,'parent_id','id')->withDefault([
            'title' => 'دسته اصلی'
        ]);
    }
}
