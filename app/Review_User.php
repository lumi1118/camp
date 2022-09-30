<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review_User extends Model
{
    return $this->hasMany('App\Review');
    return $this->hasMany('App\User');
}
