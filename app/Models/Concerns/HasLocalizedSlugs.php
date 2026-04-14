<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Builder;

trait HasLocalizedSlugs
{
    /**
     * URL segment for the current front locale (Arabic uses slug_ar, English uses slug_en).
     * Falls back to numeric id when slugs are not set yet.
     */
    public function getFrontSlug(): string
    {
        $slug = app()->getLocale() === 'ar'
            ? (string) ($this->slug_ar ?? '')
            : (string) ($this->slug_en ?? '');

        if ($slug !== '') {
            return $slug;
        }

        return (string) $this->getRouteKey();
    }

    /**
     * Resolve a row by URL segment (slug_ar, slug_en, or numeric id). Ignores active flag — used when switching locale from an already-open URL.
     *
     * @param  Builder<static>  $query
     * @return Builder<static>
     */
    public function scopeByRouteSlug(Builder $query, string $slug): Builder
    {
        if (ctype_digit($slug)) {
            return $query->whereKey((int) $slug);
        }

        return $query->where(function (Builder $q) use ($slug) {
            $q->where('slug_ar', $slug)->orWhere('slug_en', $slug);
        });
    }

    /**
     * @param  Builder<static>  $query
     * @return Builder<static>
     */
    public function scopeActiveByRouteSlug(Builder $query, string $slug): Builder
    {
        return $query->where('is_active', true)->byRouteSlug($slug);
    }
}
