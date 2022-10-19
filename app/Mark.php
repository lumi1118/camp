<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    public function site(){
    return $this->hasMany('App\Site');
    }
    
    public function site_tag(){
    return $this->belongsTo('App\Site_Tag');
    }
    
    public function todo(){
    return $this->belongsTo('App\Todo');
    }
}
