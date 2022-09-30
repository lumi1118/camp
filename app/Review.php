<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    return $this->hasMany('App\User');
    return $this->hasMany('App\Site');
    return $this->belongsTo('App\Review_User');
}
