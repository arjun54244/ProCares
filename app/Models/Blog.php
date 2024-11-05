<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = ['blog'];
    
    protected $casts = [
        'tags' => 'array'
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
