<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    return $this->belongsTo('App\Site_Tag');
}
