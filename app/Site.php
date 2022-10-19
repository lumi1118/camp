<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public function user(){
        return $this->hasMany('App\User');
    }
    
    public function mark(){
        return $this->belongsTo('App\Mark');
    }
    
    public function sitt_tag(){
        return $this->belongsTo('App\Site_Tag');
    }
    
    public function review(){
        return $this->belongsTo('App\Review');
    }
}
