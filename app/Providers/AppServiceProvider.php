<?php

namespace App\Providers;

use App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      App::setLocale('fr');
      Schema::defaultStringLength(191);

      view()->composer('news.sidebar', function ($view) {
        $view->with('archives', \App\News::archives());
      });

      view()->composer('layouts.header', function ($view) {
        $view->with([
          'menu' => \App\Modules::menu(),
          'login' => \App\Modules::information('login'),
          'logout' => \App\Modules::information('logout'),
        ]);
      });

      view()->composer('layouts.components.social', function ($view) {
        $view->with([
          'socialList' => \App\Social::used(),
        ]);
      });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
