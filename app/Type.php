<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    public function media()
    {
        return $this->hasMany('App\Media');
    }
}
