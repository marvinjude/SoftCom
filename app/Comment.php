<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'topic', 'email', 'comment', 'software_id'
    ]; 
}
