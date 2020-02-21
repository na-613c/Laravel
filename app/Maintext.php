<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintext extends Model
{
    public function comments(){
        return $this->hasMany('App\Comment','site','url');
    }
}
