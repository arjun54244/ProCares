<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['content',  'email', 'author'];
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
