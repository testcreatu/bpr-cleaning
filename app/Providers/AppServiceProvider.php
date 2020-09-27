<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Services;
use App\SocialLinks;
use App\About;
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
        $finalHeader = [];
        $finalHeader['services'] = Services::where('status','active')->get();
        $finalHeader['contact'] = SocialLinks::get()->first();
        $finalHeader['about'] = About::get()->first();
        View::share('finalHeader',$finalHeader);

    }
}
