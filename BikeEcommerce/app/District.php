<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function division(){
        return $this-> belongsToMany('App\Division');
    }
}
