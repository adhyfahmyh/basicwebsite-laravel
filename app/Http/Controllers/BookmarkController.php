<?php

namespace MyLearning\Http\Controllers;

use MyLearning\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $bookmark = new Bookmark;
        $bookmark->user_id = auth()->user()->id;
        $user_id = $bookmark->user_id;
        $content_id = $request->content_id;
        $bookmarks = $request->bookmark;
        $curTime = new DateTime();
        $result = DB::table('bookmarks')
                    ->where('user_id', '=', $user_id)
                    ->where('content_id', '=', $content_id)
                    ->first();
        if (is_null($result)) {
            # code...
            DB::table('bookmarks')
                ->insert([
                    'user_id'=>$user_id, 
                    'content_id'=>$content_id, 
                    'A'=>$bookmarks,
                    'created_at' =>$curTime
                    ]);
        } else {
            # code...
            Bookmark::where([
                'user_id'=>$user_id, 
                'content_id'=>$content_id
                ])
                ->update([
                    'A'=> $bookmarks,
                    'updated_at'=>$curTime
                    ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \MyLearning\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function show(Bookmark $bookmark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MyLearning\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookmark $bookmark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MyLearning\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookmark $bookmark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MyLearning\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookmark $bookmark, Request $request)
    {
        $bookmark->user_id = auth()->user()->id;
        $user_id = $bookmark->user_id;
        $content_id = $request->content_id;
        Bookmark::where([
            'user_id'=>$user_id, 
            'content_id'=>$content_id
            ])->delete();
    }
}
