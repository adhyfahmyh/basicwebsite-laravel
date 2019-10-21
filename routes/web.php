<?php

use Illuminate\Support\Facades\Route;

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['middleware' => 'auth', 'uses' => 'PagesController@index']);

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');

Route::get('/signin', 'PagesController@getSignin');

Route::get('/messages', 'MessagesController@getMessages');

// Route::get('/profile', 'ProfileController@index');

Route::resource('profile', 'ProfileController')->middleware('auth');
Route::resource('created-content', 'CreatedContentController')->middleware('auth');
Route::resource('saved-content', 'SavedContentController')->middleware('auth');
 
// Route::resource('profile', 'CreatedContentController');
// Route::get('profile/createdContent', function () {
//     return view('user.createdContent');
// });

// Route::get('/profile/{{ Auth::user()->firstname }}/show', 'ProfileController@show');

Route::post('/contact/submit', 'MessagesController@submit')->middleware('auth');

Route::resource('posts', 'PostsController')->middleware('auth');
Route::resource('contents', 'ContentsController')->middleware('auth');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->middleware('auth');

Route::get('/test', 'TestController@index');

Route::any('/search', function() {
    $search = Input::get ( 'search' );
    $contents = Content::where ( 'title', 'LIKE', '%' . $search . '%' )->orWhere ( 'tags', 'LIKE', '%' . $search . '%' )->get ();
    if (count ( $contents ) > 0)
        return view ( 'welcome' )->withDetails ( $contents )->withQuery ( $contents );
    else
        return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
});
