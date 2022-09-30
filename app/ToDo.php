<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    return $this->hasMany('App\Mark');
}
