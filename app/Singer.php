<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    protected $fillable = [
        'id',
        'name',
        'realname',
        'national',
        'birth',
        'life',
        'sex',
        'view',
        'image',
        'band_id',
    ];

    public function media()
    {
        return $this->hasMany('App\Media');
    }

    public function band()
    {
        return $this->belongsTo('App\Band', 'band_id', 'id');
    }

    
}
