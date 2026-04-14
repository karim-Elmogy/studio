<?php

namespace App\Support;

/**
 * URL segment normalization that keeps Unicode letters (Arabic, Latin, …), digits, hyphen and underscore.
 * Unlike Illuminate\Support\Str::slug with locale "ar", this does not transliterate Arabic to Latin.
 */
final class UrlSlug
{
    public static function normalize(string $value): string
    {
        $s = trim($value);
        if ($s === '') {
            return '';
        }

        $s = preg_replace('/\s+/u', '-', $s) ?? '';
        $s = preg_replace('/\-{2,}/u', '-', $s) ?? '';
        $s = trim($s, '-');

        $s = str_replace(['/', '\\', '?', '#'], '', $s);

        $s = preg_replace('/[^\p{L}\p{N}\-_]+/u', '', $s) ?? '';

        return trim($s, '-');
    }
}
