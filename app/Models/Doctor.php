<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'experience',
        'image',
        'position',
        'specialization',
        'description',
        'location',
        'status',
    ];

    protected $casts = [
        'location' => 'array', 
    ];
}
