<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('category','user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function user(){
        return $this->hasMany('App\User');
    }
    
    public function site(){
        return $this->hasMany('App\Site');
    }
    
    public function review_user(){
        return $this->belongsTo('App\Review_User');
    }
}
