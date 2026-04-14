<?php

namespace App\View\Components\Admin;

use App\Models\PageSeoMeta;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SeoMetaPanel extends Component
{
    public PageSeoMeta $meta;

    public function __construct(
        public ?string $pageKey = null,
        public bool $embedded = false,
    ) {
        if ($this->embedded) {
            $this->meta = new PageSeoMeta;

            return;
        }

        $key = $this->pageKey ?? '';

        $this->meta = PageSeoMeta::firstOrNew(['page_key' => $key]);
    }

    public function render(): View
    {
        return view('components.admin.seo-meta-panel');
    }
}
