<?php

namespace App\View\Composers;

use App\Models\PageSeoMeta;
use App\Support\Seo\FrontPageSeoKey;
use Illuminate\View\View;

class FrontSeoComposer
{
    public function compose(View $view): void
    {
        $key = FrontPageSeoKey::resolve();
        $record = $key !== null
            ? PageSeoMeta::query()->where('page_key', $key)->first()
            : null;

        $view->with([
            'frontSeoPageKey' => $key,
            'frontSeoTitle' => $record?->resolvedTitle(),
            'frontSeoKeywords' => $record?->resolvedKeywords(),
            'frontSeoDescription' => $record?->resolvedDescription(),
        ]);
    }
}
