<?php

<<<<<<< HEAD
namespace MyLearning\Http\Controllers\Auth;

use MyLearning\Http\Controllers\Controller;
=======
namespace PLearning\Http\Controllers\Auth;

use PLearning\Http\Controllers\Controller;
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
