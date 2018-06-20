<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoftwareCategory extends Model
{
    function softwares(){
        return $this->hasMany('App\Software');
    }
}
