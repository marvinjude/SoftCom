<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $table = 'software';


    public function getComments(){
        return $this->hasMany('App\Comment')->get();
    }
}

