<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myplaylist extends Model
{
    protected $fillable = [
        'id',
        'name',
        'content',
        'image',
        'user_id',
        'media_id',
    ];

    public function media()
    {
        return $this->belongsTo('App\Media', 'media_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
