<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site_Tag extends Model
{
    public function site(){
        return $this->hasMany('App\Site');
    }
    
    public function tag(){
        return $this->hasMany('App\Tag');
    }
}
