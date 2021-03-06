<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $table = 'software';


    public function comments(){
        return $this->hasMany('App\Comment')->get();
    }

    public function category(){
        return $this->belongsTo('App\SoftwareCategory');
    }
}

