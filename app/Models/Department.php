<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $fillable = [
        'name', 
        'icon',
        'slug',
        'description',
    ];
    protected $casts = [
        'attachments' => 'array',
    ];
}
