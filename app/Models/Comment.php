<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['content',  'email', 'author' , 'blog_id'];
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
