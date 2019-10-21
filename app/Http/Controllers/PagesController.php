<?php

namespace MyLearning\Http\Controllers;

use Illuminate\Http\Request;
use MyLearning\Post;
use MyLearning\Contents;

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
        $contents = Contents::orderBy('updated_at', 'desc');
        return view('welcome')->with('contents', $contents);
    }
}
