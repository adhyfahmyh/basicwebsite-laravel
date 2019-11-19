<?php

<<<<<<< HEAD
namespace MyLearning\Http\Controllers\Auth;

use MyLearning\Http\Controllers\Controller;
=======
namespace PLearning\Http\Controllers\Auth;

use PLearning\Http\Controllers\Controller;
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    // public function username()
    // {
    //     return 'email';
    // }
}
