<?php

<<<<<<< HEAD
namespace MyLearning\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Log;
=======
namespace PLearning\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
<<<<<<< HEAD
            // Log::debug('error');
=======
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
            return route('login');
        }
    }
}
