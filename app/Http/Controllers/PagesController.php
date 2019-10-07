<?php

namespace MyLearning\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function getHome(){
    //     return view('dashboard');
    // }
    public function getAbout(){
        return view('about');
    }
    public function getContact(){
        return view('contact');
    }
    public function getSignin(){
        return view('signin');
    }
    public function index()
    {
        return view('welcome');
    }
}
