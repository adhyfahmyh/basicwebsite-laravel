<?php

<<<<<<< HEAD
namespace MyLearning\Http\Controllers;

use Illuminate\Http\Request;
use MyLearning\Post;
use MyLearning\Contents;
=======
namespace PLearning\Http\Controllers;

use Illuminate\Http\Request;
use PLearning\Post;
use PLearning\Contents;
>>>>>>> 83057d45ae102081508fb236bfd2d6dfdfb3d56c
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    // public function getHome(){
    //     return view('dashboard');
    // }
    public function getAbout()
    {
        return view('about');
    }
    public function getContact()
    {
        return view('contact');
    }
    public function getSignin()
    {
        return view('signin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $contents = DB::select('SELECT * from contents order by rating desc');
        $contents = Contents::orderBy('rating', 'desc')->paginate(5);
        return view('welcome')->with('contents', $contents);
    }
}
