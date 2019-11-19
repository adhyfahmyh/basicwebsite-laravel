<?php

namespace MyLearning\Http\Controllers;

use Illuminate\Http\Request;
use MyLearning\User;
use MyLearning\Post;
use MyLearning\Bookmark;
use DB;

class SavedContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {    
        $user_id = auth()->user()->id;
        $saved_contents = DB::select("SELECT 'content_id' from 'bookmarks' WHERE 'user_id'=$user_id");
        return view('user.saved-content')->with('saved_contents',$saved_contents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id = auth()->user()->id;
        // $saved_contents = DB::select("SELECT 'content_id' from 'bookmarks' WHERE 'user_id'=$user_id");
        $content_id = DB::table('bookmarks')
                            ->where('user_id', 'like', '%'.$user_id.'%')
                            ->pluck('content_id');
        $saved_contents = DB::table('contents')
                            ->whereIn('id', $content_id)
                            ->paginate(8);
        return view('user.saved-content')->with('saved_contents', $saved_contents);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
