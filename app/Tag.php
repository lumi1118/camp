<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function site_tag(){
        return $this->belongsTo('App\Site_Tag');
    }
}
