<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageSeoMetaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return array_merge(
            ['page_key' => ['required', 'string', 'max:191', 'regex:/^[a-z0-9._:\\-]+$/i']],
            self::metaFieldRules()
        );
    }

    /**
     * @return array<string, array<int, string>>
     */
    public static function metaFieldRules(): array
    {
        return [
            'meta_title_en' => ['nullable', 'string', 'max:255'],
            'meta_title_ar' => ['nullable', 'string', 'max:255'],
            'meta_keywords_en' => ['nullable', 'string', 'max:512'],
            'meta_keywords_ar' => ['nullable', 'string', 'max:512'],
            'meta_description_en' => ['nullable', 'string', 'max:2000'],
            'meta_description_ar' => ['nullable', 'string', 'max:2000'],
        ];
    }
}
