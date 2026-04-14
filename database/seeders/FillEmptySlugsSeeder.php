<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;
use App\Support\UrlSlug;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FillEmptySlugsSeeder extends Seeder
{
    /**
     * Fill slug_en / slug_ar from translated titles when either slug is empty.
     *
     * Run: php artisan db:seed --class=FillEmptySlugsSeeder
     */
    public function run(): void
    {
        foreach (
            [
                Service::class,
                Project::class,
                Blog::class,
            ] as $modelClass
        ) {
            /** @var class-string<Model> $modelClass */
            $this->fillForModel($modelClass);
        }
    }

    /**
     * @param  class-string<Model>  $modelClass
     */
    private function fillForModel(string $modelClass): void
    {
        $query = $modelClass::query()->where(function ($q) {
            $q->whereNull('slug_en')
                ->orWhere('slug_en', '')
                ->orWhereNull('slug_ar')
                ->orWhere('slug_ar', '');
        });

        $query->orderBy('id')->chunkById(100, function ($rows) use ($modelClass) {
            /** @var \Illuminate\Support\Collection<int, Model> $rows */
            $table = (new $modelClass)->getTable();

            foreach ($rows as $model) {
                $updates = [];

                $title = $model->getAttribute('title');
                $titleEn = is_array($title) ? (string) ($title['en'] ?? '') : '';
                $titleAr = is_array($title) ? (string) ($title['ar'] ?? '') : '';

                $baseEn = UrlSlug::normalize($titleEn) ?: ('item-' . $model->getKey());
                $baseAr = UrlSlug::normalize($titleAr) ?: ('item-' . $model->getKey());

                if ($this->isSlugEmpty($model->getAttribute('slug_en'))) {
                    $updates['slug_en'] = $this->uniqueSlug($table, 'slug_en', $baseEn, (int) $model->getKey());
                }

                if ($this->isSlugEmpty($model->getAttribute('slug_ar'))) {
                    $updates['slug_ar'] = $this->uniqueSlug($table, 'slug_ar', $baseAr, (int) $model->getKey());
                }

                if ($updates !== []) {
                    $model->update($updates);
                }
            }
        });
    }

    private function isSlugEmpty(mixed $value): bool
    {
        return $value === null || $value === '';
    }

    private function uniqueSlug(string $table, string $column, string $base, int $id): string
    {
        $candidate = $base;
        $n = 0;

        while (
            DB::table($table)
                ->where($column, $candidate)
                ->where('id', '!=', $id)
                ->exists()
        ) {
            $n++;
            $candidate = $base . '-' . $n;
        }

        return $candidate;
    }
}
