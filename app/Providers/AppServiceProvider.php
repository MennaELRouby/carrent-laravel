<?php

namespace App\Providers;

use App\Models\Message;
use Illuminate\Support\ServiceProvider;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share('count', Message::where('vmsg', '=', 0)->count());
        view()->share('msgp', Message::where('vmsg', '=', 0)->get());
    }
}
