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

Route::get('/', 'PagesController@index')->middleware('auth');

// Route::get('/about', 'PagesController@getAbout');

// Route::get('/contact', 'PagesController@getContact');

// Route::get('/signin', 'PagesController@getSignin');

// Route::get('/messages', 'MessagesController@getMessages');

// Route::get('/profile', 'ProfileController@index');

Route::post('/contact/submit', 'MessagesController@submit')->middleware('auth');

Route::resource('profile', 'ProfileController')->middleware('auth');
Route::resource('created-content', 'CreatedContentController')->middleware('auth');
Route::resource('saved-content', 'SavedContentController')->middleware('auth');

Route::resource('posts', 'PostsController')->middleware('auth');
Route::resource('contents', 'ContentsController')->middleware('auth');
Route::post('contents/$content->id/rating', ['uses' => 'RatingsController@store', 'as' => 'content.rating']);
Route::post('contents/$content->id/selection', ['uses' => 'SelectionController@store', 'as' => 'content.selection']);
Route::post('contents/$content->id/timespent', ['uses' => 'TimespentController@store', 'as' => 'content.timespent']);
Route::post('contents/$content->id/bookmark', ['uses' => 'BookmarkController@store', 'as' => 'content.bookmark']);
Route::post('contents/$content->id/delete-bookmark', ['uses' => 'BookmarkController@destroy', 'as' => 'content.delete_bookmark']);
Route::post('contents/$content->id/comment', ['uses' => 'CommentController@store', 'as' => 'content.comment']);
Route::post('contents/$content->id/replycomment', ['uses' => 'CommentController@replyStore', 'as' => 'content.reply_comment']);

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->middleware('auth');

Route::get('/test', 'TestController@index');

// Route::any('/search', function() {
//     $search = Input::get ( 'search' );
//     $contents = Content::where ( 'title', 'LIKE', '%' . $search . '%' )->orWhere ( 'tags', 'LIKE', '%' . $search . '%' )->get ();
//     if (count ( $contents ) > 0)
//         return view ( 'welcome' )->withDetails ( $contents )->withQuery ( $contents );
//     else
//         return view ( 'welcome' )->withMessage ( 'Konten yang anda cari tidak ada, silahkan coba kembali!' );
// });
