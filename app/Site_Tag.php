<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site_Tag extends Model
{
    return $this->hasMany('App\Site');
    return $this->hasMany('App\Tag');
}
