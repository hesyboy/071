<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Kyslik\ColumnSortable\Sortable as Sortable;



class ContentCategory extends Model
{
    use HasFactory;
    use Sluggable;
    use Sortable;

    protected $fillable=[
        'title',
        'slug',
        'description',
        'parent_id',
        'seo_title',
        'seo_description',
        'status',
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
        return $this->belongsTo(ContentCategory::class,'parent_id','id')->withDefault([
            'title' => 'دسته اصلی'
        ]);
    }
}
