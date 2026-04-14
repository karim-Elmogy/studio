<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSeoMeta extends Model
{
    protected $fillable = [
        'page_key',
        'meta_title_en',
        'meta_title_ar',
        'meta_keywords_en',
        'meta_keywords_ar',
        'meta_description_en',
        'meta_description_ar',
    ];

    public function resolvedTitle(): ?string
    {
        return $this->pickLocalized($this->meta_title_ar, $this->meta_title_en);
    }

    public function resolvedKeywords(): ?string
    {
        return $this->pickLocalized($this->meta_keywords_ar, $this->meta_keywords_en);
    }

    public function resolvedDescription(): ?string
    {
        return $this->pickLocalized($this->meta_description_ar, $this->meta_description_en);
    }

    private function pickLocalized(?string $ar, ?string $en): ?string
    {
        $useAr = str_starts_with(app()->getLocale(), 'ar');

        if ($useAr) {
            if ($ar !== null && $ar !== '') {
                return $ar;
            }
            if ($en !== null && $en !== '') {
                return $en;
            }

            return null;
        }

        if ($en !== null && $en !== '') {
            return $en;
        }
        if ($ar !== null && $ar !== '') {
            return $ar;
        }

        return null;
    }
}
