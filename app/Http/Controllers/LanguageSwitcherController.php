<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class LanguageSwitcherController extends Controller
{
    public function switch(Request $request, string $locale): Response
    {
        $allowed = ['en', 'ar'];
        if (! in_array($locale, $allowed, true)) {
            $locale = (string) config('app.locale');
        }

        session(['locale' => $locale]);
        App::setLocale($locale);

        $target = $this->targetFromReturnQuery($request)
            ?? $this->targetFromReferers($request);

        if ($target !== null) {
            return redirect()->to($target);
        }

        return redirect()->back();
    }

    /**
     * Explicit return path from the front (most reliable when Referer is stripped).
     */
    private function targetFromReturnQuery(Request $request): ?string
    {
        $raw = $request->query('return');
        if (! is_string($raw) || $raw === '') {
            return null;
        }
        if (str_contains($raw, '..')) {
            return null;
        }

        if (preg_match('#^https?://#i', $raw)) {
            $parts = parse_url($raw);
            if (! is_array($parts)) {
                return null;
            }
            $host = $parts['host'] ?? '';
            if ($host !== '' && ! $this->hostMatchesRequest($host, $parts['port'] ?? null, $request)) {
                return null;
            }
            $path = isset($parts['path']) && is_string($parts['path']) ? $parts['path'] : '/';
        } else {
            if (! str_starts_with($raw, '/')) {
                return null;
            }
            $path = parse_url('http://placeholder.invalid'.$raw, PHP_URL_PATH);
            if (! is_string($path) || $path === '') {
                $path = '/';
            }
        }

        return $this->localizedDetailTargetFromPath($path);
    }

    private function hostMatchesRequest(string $host, mixed $port, Request $request): bool
    {
        $refererHttpHost = $host . ($port !== null && $port !== '' ? ':' . $port : '');

        return strcasecmp($refererHttpHost, $request->getHttpHost()) === 0
            || strcasecmp(preg_replace('/^www\./i', '', $refererHttpHost), preg_replace('/^www\./i', '', $request->getHttpHost())) === 0;
    }

    private function targetFromReferers(Request $request): ?string
    {
        $candidates = array_unique(array_filter([
            $request->headers->get('referer'),
            $request->session()->get('_previous.url'),
        ], fn ($v) => is_string($v) && $v !== ''));

        foreach ($candidates as $url) {
            $path = parse_url($url, PHP_URL_PATH);
            if (! is_string($path) || $path === '') {
                continue;
            }
            $path = '/' . trim(str_replace('\\', '/', $path), '/');
            $target = $this->localizedDetailTargetFromPath($path);
            if ($target !== null) {
                return $target;
            }
        }

        return null;
    }

    private function localizedDetailTargetFromPath(string $path): ?string
    {
        $path = '/' . trim(str_replace('\\', '/', $path), '/');

        $segments = array_values(array_filter(explode('/', trim($path, '/'))));
        if (in_array('admin', $segments, true)) {
            return null;
        }
        if (
            count($segments) >= 2
            && $segments[0] === 'lang'
            && in_array(strtolower($segments[1]), ['en', 'ar'], true)
        ) {
            return null;
        }

        if (! preg_match('#/(services|projects|blog)/([^/]+)/?$#u', $path, $m)) {
            return null;
        }

        $type = $m[1];
        $slug = rawurldecode($m[2]);
        if ($slug === '') {
            return null;
        }

        return match ($type) {
            'services' => $this->detailUrl(Service::query()->byRouteSlug($slug)->first(), 'services.show'),
            'projects' => $this->detailUrl(Project::query()->byRouteSlug($slug)->first(), 'projects.show'),
            'blog' => $this->detailUrl(Blog::query()->byRouteSlug($slug)->first(), 'blog.show'),
            default => null,
        };
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Model|null  $model
     */
    private function detailUrl($model, string $routeName): ?string
    {
        if ($model === null) {
            return null;
        }

        /** @var Service|Project|Blog $model */
        return route($routeName, $model->getFrontSlug());
    }
}
