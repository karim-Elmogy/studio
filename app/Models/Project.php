<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'image',
        'client',
        'year',
        'tags',
        'type',
        'order',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'category' => 'array',
        'tags' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];
}
