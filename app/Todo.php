<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    public function mark(){
        return $this->hasMany('App\Mark');
    }
}
