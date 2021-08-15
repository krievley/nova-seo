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

            $defaultTag = new \stdClass();
            $defaultTag->title = 'When Pigs Fly';
            $defaultTag->description = 'A blog dedicated to the love of pigs.';
            $defaultTag->keywords = 'when pigs fly,pigs,pig,blog,posts,post';
            $defaultTag->image = 'flying-pig.jpeg';

            return $view->with('metaTag', $defaultTag);
        });
    }
}
