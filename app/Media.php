<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'id',
        'name',
        'content',
        'mp3_video',
        'view',
        'image',
        'status',
        'link',
        'singer_id',
        'category_id',
        'type_id',
    ];

    public function type()
    {
        return $this->belongsTo('App\Type', 'type_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function singer()
    {
        return $this->belongsTo('App\Singer', 'singer_id', 'id');
    }

    public function detailalbum()
    {
        return $this->hasMany('App\DetailAlbum');
    }

    public function myplaylist()
    {
        return $this->hasMany('App\Myplaylist');
    }

    public function comment()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
