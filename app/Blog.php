<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{


    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){  //posts->user   person who wrote the comment
        return $this->belongsTo(User::class);
    }

    public  function addComment($body){
        $this->comments()->create(compact('body'));
//      Comment::create([
//          'body'=> $body,
//          'post_id' =>$this->id
//      ]);
    }
}
