<?php

namespace App\Support\Seo;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

/**
 * Maps the current front route to a stable page_key stored in page_seo_metas.
 *
 * Static keys: home, services.index, projects.index, blog.index, contact.index, faq.index.
 * Detail keys: services.show:{id}, projects.show:{id}, blog.show:{id} (matches admin $seoPageKey).
 */
final class FrontPageSeoKey
{
    public static function resolve(): ?string
    {
        $route = Route::current();
        if ($route === null) {
            return null;
        }

        return match ($route->getName()) {
            'home' => 'home',
            'services.index' => 'services.index',
            'services.show' => self::showKey(Service::class, 'services.show', (string) $route->parameter('slug', '')),
            'projects.index' => 'projects.index',
            'projects.show' => self::showKey(Project::class, 'projects.show', (string) $route->parameter('slug', '')),
            'blog.index' => 'blog.index',
            'blog.show' => self::showKey(Blog::class, 'blog.show', (string) $route->parameter('slug', '')),
            'contact.index' => 'contact.index',
            'faq.index' => 'faq.index',
            default => null,
        };
    }

    /**
     * @param  class-string<Model>  $model
     */
    private static function showKey(string $model, string $prefix, string $slug): ?string
    {
        if ($slug === '') {
            return null;
        }

        $id = $model::activeByRouteSlug($slug)->value('id');

        return $id !== null ? $prefix.':'.$id : null;
    }
}
