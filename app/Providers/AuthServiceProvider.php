<?php

<<<<<<< HEAD
namespace MyLearning\Providers;
=======
namespace PLearning\Providers;
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
<<<<<<< HEAD
        // 'MyLearning\Model' => 'MyLearning\Policies\ModelPolicy',
=======
        // 'PLearning\Model' => 'PLearning\Policies\ModelPolicy',
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
