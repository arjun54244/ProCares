<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'department',
        'title',
        'short_description',
        'icon',
        'image',
        'image_alt_tag',
        'description',
        'slug',
        'meta_title',
        'meta_desc',
        'tags',
        'status',
    ];
    protected $casts = [
        'tags' => 'array'
    ];
}
