<?php

namespace App\Support\Seo;

use App\Models\PageSeoMeta;
use Illuminate\Http\Request;

final class PageSeoMetaSync
{
    /**
     * Persist optional SEO fields from the request when at least one is filled.
     */
    public static function syncOptionalFromRequest(Request $request, string $pageKey): void
    {
        $keys = [
            'meta_title_en',
            'meta_title_ar',
            'meta_keywords_en',
            'meta_keywords_ar',
            'meta_description_en',
            'meta_description_ar',
        ];

        $data = [];
        foreach ($keys as $k) {
            $data[$k] = $request->input($k);
        }

        $hasAny = collect($data)->contains(fn ($v) => $v !== null && $v !== '');

        if (! $hasAny) {
            return;
        }

        PageSeoMeta::updateOrCreate(
            ['page_key' => $pageKey],
            array_map(fn ($v) => ($v === '' || $v === null) ? null : $v, $data)
        );
    }
}
