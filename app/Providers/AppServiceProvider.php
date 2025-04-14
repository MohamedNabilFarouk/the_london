<?php

namespace App\Providers;
use App\SiteSetting;
use App\SocialSetting;
use App\Team;
use App\Category;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $site_settings = SiteSetting::find(1);
       $social_settings = SocialSetting::all();
       $categories = Category::all();
       $team = Team::orderBy('id','desc')->get();
        View::share([
            'site_settings' =>  $site_settings,
           'social_settings' => $social_settings,
           'team' => $team,
           'categories' => $categories,
        ]);
    }
}
