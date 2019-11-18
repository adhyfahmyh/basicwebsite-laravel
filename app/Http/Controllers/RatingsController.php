<?php

namespace PLearning\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use PLearning\Ratings;
use PLearning\Selection;
use PLearning\Contents;
use PLearning\Http\Controllers\ContentsController;
use Illuminate\Support\Facades\DB;
use willvincent\Rateable\Rating;

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
        // $this-> validate($request,[
        //     'rating'=> 'required'
        // ]);
        
        // $rating = new Ratings;
        // $rating->user_id = auth()->user()->id;
        // $rating->content_id = $request->input('content_id');
        // $rating->rating = $request->input('rating');
        // $rating->save();
        // $content_id = $rating->content_id;
        // $content_ratings = Ratings::select('rating')->where('content_id', $content_id);
        // $ratings = DB::table('ratings')
        //         ->where('content_id', $content_id)
        //         ->avg('rating');
        // // $count_content_ratings = count($content_ratings);
        // // $sum_content_ratings = sum($count_content_ratings);
        // // $content_rating = Ratings::all();
        // // $content_rating->each(function(Request $request) {
        // Contents::where('id', $request->input('content_id'))->update([
        //         'rating' => $ratings
        // ]);

        $rating = new Ratings;
        $rating->user_id = auth()->user()->id;
        $user_id = $rating->user_id;
        $content_id = $request->content_id;
        $ratings = $request->rating;
        $result = DB::table('ratings')
                ->where('user_id', '=', $user_id)
                ->where('content_id', '=', $content_id)
                ->first();
        // $arr_rating = DB::select("SELECT `rating` FROM `ratings` WHERE `content_id` = $content_id");
        
        $curTime = new DateTime();
        if (is_null($result)) {
            DB::table('ratings')
                ->insert([
                    'user_id'=>$user_id, 
                    'content_id'=>$content_id, 
                    'rating'=>$ratings,
                    'created_at' =>$curTime
                ]);
            $input_rating = DB::table('ratings')
                    ->where('content_id', $content_id)
                    ->avg('rating');        
            Contents::where('id', $content_id)
            ->update([
                'rating'=> $input_rating
                ]);
        } else {
            Ratings::where([
                'user_id'=>$user_id, 
                'content_id'=>$content_id
                ])
                ->update([
                    'rating'=> $ratings,
                    'updated_at'=>$curTime
                ]);
            $input_rating = 
            DB::table('ratings')
                ->where('content_id', $content_id)
                ->avg('rating');        
            Contents::where('id', $content_id)
            ->update([
                'rating'=> $input_rating
                ]);
        }
            
        // return redirect('contents/'.$rating->content_id)->with('success', 'Berhasil');
        return redirect(url()->previous());
    }

    /**
     * Display the specified resource.
     *
     * @param  \PLearning\Ratings  $ratings
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
     * @param  \PLearning\Ratings  $ratings
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
     * @param  \PLearning\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ratings $ratings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \PLearning\Ratings  $ratings
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

    public function select(Request $request)
    {
        $selection = new Selection;
        $selection->user_id = auth()->user()->id;
        $user_id = $request->user_id;
        $content_id = $request->content_id;
        $selection_count = $request->selection;

        $selection->user_id = $user_id;
        $selection->content_id = $content_id;
        $selection->total_selection = $selection_count;
        $selection->save();
    }
}
