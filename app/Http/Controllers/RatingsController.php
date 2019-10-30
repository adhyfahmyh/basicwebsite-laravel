<?php

namespace MyLearning\Http\Controllers;

use MyLearning\Ratings;
use Illuminate\Http\Request;
use MyLearning\Contents;
use MyLearning\Http\Controllers\ContentsController;
use Illuminate\Support\Facades\DB;
// use winner

class RatingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ratings = DB::select('SELECT * from ratings');


        // return view('contents.index')->with('contents', $contents)->withQuery ($query);
        return view('contents.index', ['ratings' => $ratings]);
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
        $rating->user_id = auth()->user()->id;
        $rating->content_id = $request->input('content_id');
        $rating->rating = $request->input('rating');
        $rating->save();
        $content_id = $rating->content_id;
        $content_ratings = Ratings::select('rating')->where('content_id', $content_id);
        $ratings = DB::table('ratings')
                ->where('content_id', $content_id)
                ->avg('rating');
        // $count_content_ratings = count($content_ratings);
        // $sum_content_ratings = sum($count_content_ratings);
        // $content_rating = Ratings::all();
        // $content_rating->each(function(Request $request) {
        Contents::where('id', $request->input('content_id'))->update([
                'rating' => $ratings
        ]);
        

        return redirect('contents/'.$rating->content_id)->with('success', 'Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \MyLearning\Ratings  $ratings
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ratings $ratings, $id)
    {
        $ratings = Ratings::find($id);
        return view('contents.show')->with('ratings', $ratings);    
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
