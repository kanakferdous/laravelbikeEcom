<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){
        return $this-> belongsToMany('App\Product','product_category')->withTimestamps();
    }
    public function categories(){
        return $this-> belongsToMany('App\Category','product_category')->withTimestamps();
    }
}
