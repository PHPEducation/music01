<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailAlbum extends Model
{
    protected $fillable = [
        'id',
        'album_id',
        'media_id',
    ];

    public function media()
    {
        return $this->belongsTo('App\Singer', 'media_id', 'id');
    }

    public function album()
    {
        return $this->belongsTo('App\Album', 'album_id', 'id');
    }

    public function comment()
    {
        return $this->morphTo('App\Comment', 'commentable');
    }
}
