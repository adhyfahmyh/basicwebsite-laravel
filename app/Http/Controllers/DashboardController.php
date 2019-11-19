<?php

<<<<<<< HEAD
namespace MyLearning\Http\Controllers;

use Illuminate\Http\Request;
use MyLearning\User;
=======
namespace PLearning\Http\Controllers;

use Illuminate\Http\Request;
use PLearning\User;
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('posts', $user->posts);
    }
}
