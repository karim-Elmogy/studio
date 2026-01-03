<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'category',
        'order',
        'is_active',
    ];

    protected $casts = [
        'question' => 'array',
        'answer' => 'array',
        'category' => 'array',
        'is_active' => 'boolean',
    ];

    // Helper methods for multi-language support
    public function getTranslatedQuestion($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->question[$locale] ?? $this->question['en'] ?? '';
    }

    public function getTranslatedAnswer($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->answer[$locale] ?? $this->answer['en'] ?? '';
    }

    public function getTranslatedCategory($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->category[$locale] ?? $this->category['en'] ?? '';
    }
}
