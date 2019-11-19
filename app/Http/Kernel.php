<?php

<<<<<<< HEAD
namespace MyLearning\Http;
=======
namespace PLearning\Http;
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
<<<<<<< HEAD
        \MyLearning\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \MyLearning\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \MyLearning\Http\Middleware\TrustProxies::class,
=======
        \PLearning\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \PLearning\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \PLearning\Http\Middleware\TrustProxies::class,
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
<<<<<<< HEAD
            \MyLearning\Http\Middleware\EncryptCookies::class,
=======
            \PLearning\Http\Middleware\EncryptCookies::class,
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
<<<<<<< HEAD
            \MyLearning\Http\Middleware\VerifyCsrfToken::class,
=======
            \PLearning\Http\Middleware\VerifyCsrfToken::class,
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
<<<<<<< HEAD
        'auth' => \MyLearning\Http\Middleware\Authenticate::class,
=======
        'auth' => \PLearning\Http\Middleware\Authenticate::class,
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
<<<<<<< HEAD
        'guest' => \MyLearning\Http\Middleware\RedirectIfAuthenticated::class,
=======
        'guest' => \PLearning\Http\Middleware\RedirectIfAuthenticated::class,
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];

    /**
     * The priority-sorted list of middleware.
     *
     * This forces non-global middleware to always be in the given order.
     *
     * @var array
     */
    protected $middlewarePriority = [
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
<<<<<<< HEAD
        \MyLearning\Http\Middleware\Authenticate::class,
=======
        \PLearning\Http\Middleware\Authenticate::class,
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
        \Illuminate\Session\Middleware\AuthenticateSession::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
        \Illuminate\Auth\Middleware\Authorize::class,
    ];
}
