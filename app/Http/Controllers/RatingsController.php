<?php

namespace MyLearning\Http\Controllers;

use MyLearning\Ratings;
use Illuminate\Http\Request;
use MyLearning\Contents;
use MyLearning\Http\Controllers\ContentsController;

class RatingsController extends Controller
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
        $this-> validate($request,[
            'rating'=> 'required'
        ]);
        
        // Create Post 
        $rating = new Ratings;
        // $content = Contents::find($id);
        $rating->user_id = auth()->user()->id;
        $rating->content_id = $request->input('content_id');
        $rating->rating = $request->input('rating');
        $rating->save();

        return redirect('contents/'.$rating->content_id)->with('success', 'Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \MyLearning\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function show(Ratings $ratings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MyLearning\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function edit(Ratings $ratings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MyLearning\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ratings $ratings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MyLearning\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ratings $ratings)
    {
        //
    }
    public function getData()
    {
        // $rating = DB::select("SELECT * from ratings");
        // return view('contents.show')->with('rating', $rating);
        $get = DB::table('ratings')->get();
        return view('contents.show', ['data', $get]);
    }
}
