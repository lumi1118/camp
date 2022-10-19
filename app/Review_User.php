<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review_User extends Model
{
    
    public function review(){
        return $this->hasMany('App\Review');
    }
    
    public function user(){
        return $this->hasMany('App\User');
    }
}
