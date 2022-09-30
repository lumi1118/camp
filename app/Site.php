<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    return $this->hasMany('App\User');
}
