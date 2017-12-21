<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {

        View::share('conference_start_date', config('movement.conference_start_date'));
        View::share('conference_end_date', config('movement.conference_end_date'));

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }
}
