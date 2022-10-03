<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model{
  public function comment(){
        return $this->morphMany(Comment::class, 'commentable');
    }
}
