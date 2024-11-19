<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Config;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        '*';
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $page = Article::orderBy('sort_order','asc')->get()->toArray();
        $cate=Config::where('title','客服邮箱')->first();
        view()->share('page', $page);
        view()->share('cate', $cate);
    }
}
