<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

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

    /**
     * Get translated name
     */
    public function getTranslatedName(): string
    {
        $locale = App::getLocale();
        return $this->name[$locale] ?? $this->name['en'] ?? '';
    }

    /**
     * Get translated role
     */
    public function getTranslatedRole(): string
    {
        $locale = App::getLocale();
        return $this->role[$locale] ?? $this->role['en'] ?? '';
    }

    /**
     * Get translated testimonial text
     */
    public function getTranslatedTestimonial(): string
    {
        $locale = App::getLocale();
        return $this->testimonial[$locale] ?? $this->testimonial['en'] ?? '';
    }

    /**
     * Get image URL
     */
    public function getImageUrl(): string
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return asset('front/assets/img/home-04/avater/avater-1.jpg'); // Default image
    }

    /**
     * Get star rating HTML
     */
    public function getStarsHtml(): string
    {
        $stars = '';
        for ($i = 0; $i < $this->rating; $i++) {
            $stars .= '<span>
                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z" fill="currentColor" />
                </svg>
            </span>';
        }
        return $stars;
    }
}
