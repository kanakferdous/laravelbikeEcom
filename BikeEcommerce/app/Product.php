<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function brands(){
        return $this-> belongsToMany('App\brand','product_brand')->withTimestamps();
    }
    public function categories(){
        return $this-> belongsToMany('App\Category','product_category')->withTimestamps();
    }
    public function image(){
        return $this-> hasMany('App\product_image');
    }
}
