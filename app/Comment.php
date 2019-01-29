<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //comment ->post
    public function  post(){
        return $this->belongsTo(Blog::class);
    }

    public function  user(){   //comment->user->name
        return $this->belongsTo(User::class);
    }
}
