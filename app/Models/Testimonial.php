<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'role',
        'testimonial',
        'image',
        'rating',
        'order',
        'is_active',
    ];

    protected $casts = [
        'name' => 'array',
        'role' => 'array',
        'testimonial' => 'array',
        'is_active' => 'boolean',
    ];
}
