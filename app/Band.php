<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    
    protected $fillable = [
        'id',
        'name',
        'information',
        'image',
        'national',
    ];

    public function singer()
    {
        return $this->hasMany('App\Singer');
    }
}
