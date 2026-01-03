<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'content',
        'excerpt',
        'category',
        'image',
        'author_name',
        'author_role',
        'author_image',
        'published_date',
        'video_url',
        'tags',
        'order',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
        'excerpt' => 'array',
        'category' => 'array',
        'tags' => 'array',
        'published_date' => 'date',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];
}
