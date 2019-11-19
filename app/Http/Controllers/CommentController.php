<?php

namespace MyLearning\Http\Controllers;

use MyLearning\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use MyLearning\Contents;

class CommentController extends Controller
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
        $comment = new Comment;
        // $comment->body = $request->get('comment_body');
        // $comment->user()->associate($request->user());
        // $post = Contents::find($request->get('comment_id'));
        // $post->comments()->save($comment);

        // return back();

        $comment->user_id = auth()->user()->id;
        $comment->username = auth()->user()->username;
        $user_id = $comment->user_id;
        $username = $comment->username;
        $content_id = $request->content_id;
        $body = $request->comment_body;

        DB::table('comments')
            ->insert([
                'user_id' => $user_id,
                'username' => $username,
                'content_id' => $content_id,
                'body' => $body,
            ]);

        return back();
    }

    public function replyStore (Request $request)
    {
        $reply = new Comment;
        $reply->user_id = auth()->user()->id;
        $reply->username = auth()->user()->username;
        $user_id = $reply->user_id;
        $username = $reply->username;
        $content_id = $request->content_id;
        $parent_id = $request->comment_id;
        $parent_username = $request->parent_username;
        $body = $request->comment_body;

        DB::table('comments')
            ->insert([
                'user_id' => $user_id,
                'username' => $username,
                'content_id' => $content_id,
                'parent_id' => $parent_id,
                'parent_username' =>$parent_username,
                'body' => $body,
            ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \MyLearning\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MyLearning\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MyLearning\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MyLearning\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
