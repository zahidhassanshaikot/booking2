<?php

namespace App\Providers;
use App\Category;
use App\ContactMessage;
use View;

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
        Schema::defaultStringLength(191);


        View::composer('admin.master',function ($view){
            $view->with('contact_messages', ContactMessage::take(3)
                ->get()
            );
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
