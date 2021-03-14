<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _Case extends Model
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
