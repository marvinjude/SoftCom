<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name', 'email', 'password','website'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function software(){
        return $this->hasMany('App\Software', 'author_id')->get();
    }

    public function isAdmin(){
        return $this->admin;
    }

    //Totals stars For Products  Uploaded By This User
    public function stars(){
        return $this->software()->sum('stars');
    }
}
