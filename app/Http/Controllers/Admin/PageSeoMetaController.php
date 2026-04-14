<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdatePageSeoMetaRequest;
use App\Models\PageSeoMeta;
use Illuminate\Http\RedirectResponse;

class PageSeoMetaController extends Controller
{
    public function update(UpdatePageSeoMetaRequest $request): RedirectResponse
    {
        $data = $request->validated();

        PageSeoMeta::updateOrCreate(
            ['page_key' => $data['page_key']],
            [
                'meta_title_en' => $data['meta_title_en'] ?? null,
                'meta_title_ar' => $data['meta_title_ar'] ?? null,
                'meta_keywords_en' => $data['meta_keywords_en'] ?? null,
                'meta_keywords_ar' => $data['meta_keywords_ar'] ?? null,
                'meta_description_en' => $data['meta_description_en'] ?? null,
                'meta_description_ar' => $data['meta_description_ar'] ?? null,
            ]
        );

        return back()->with('success', __('admin.seo_saved'));
    }
}
