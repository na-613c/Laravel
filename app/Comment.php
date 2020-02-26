<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $fillable = [
        'url','name','email','site','message', 'user_id','status'
    ];

    public function maintexts(){
        return $this->belongsTo('App\Maintext', 'url', 'site');
    }
}
