<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_image extends Model
{
    public function products(){
        return $this-> belongsToMany('App\Product');
    }
}
