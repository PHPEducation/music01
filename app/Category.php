<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    public function media()
    {
        return $this->hasMany('App\Media');
    }

    public function album()
    {
        return $this->hasMany('App\Media');
    }
}
