<?php

namespace App\Providers;

use App\Http\View\Composers\ProfileComposer;
use App\Models\MetaTag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('*', function ($view) {
            $parsed = parse_url(url()->current());
            $currentPath = isset($parsed['path']) ? $parsed['path'] : '/';

            $metaTag = MetaTag::where('path', $currentPath)->first();

            if($metaTag) {
                return $view->with('metaTag', $metaTag);
            }

            $defaultTag = MetaTag::where('path', 'default')->first();

            return $view->with('metaTag', $defaultTag);
        });
    }
}
