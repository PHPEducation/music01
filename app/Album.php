<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'id',
        'name',
        'content',
        'view',
        'image',
        'status',
        'category_id',
    ];

    public function detailalbum()
    {
        return $this->hasMany('App\DetailAlbum');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
