<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
  public function comment()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
