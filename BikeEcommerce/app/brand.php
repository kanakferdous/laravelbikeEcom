<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    public function products(){
        return $this-> belongsToMany('App\Product','product_brand')->withTimestamps();
    }
    public function brand(){
        return $this-> belongsToMany('App\brand','product_brand')->withTimestamps();
    }
}
