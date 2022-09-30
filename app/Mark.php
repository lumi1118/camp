<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    return $this->hasMany('App\Site');
    return $this->belongsTo('App\Site_Tag');
    return $this->belongsTo('App\ToDo');
}
