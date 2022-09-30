<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    return $this->hasMany('App\User');
    return $this->belongsTo('App\Mark');
    return $this->belongsTo('App\Site_Tag');
    return $this->belongsTo('App\Review');
}
