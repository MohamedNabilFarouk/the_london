<?php

namespace App\Providers;
use App\SiteSetting;
use App\SocialSetting;
use App\Service;
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
       $allservices = Service::all();
     
        View::share([
            'site_settings' =>  $site_settings,
           'social_settings' => $social_settings,
           'allservices' => $allservices,
        ]);
    }
}
