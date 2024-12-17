<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'position',
        'specialization',
        'description',
    ];
    protected $casts = [
        'experience' => 'json'
    ];
}
