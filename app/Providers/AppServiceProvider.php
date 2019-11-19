<?php

<<<<<<< HEAD
namespace MyLearning\Providers;
=======
namespace PLearning\Providers;
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
    }
}
