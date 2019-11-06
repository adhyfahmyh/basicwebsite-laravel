<?php

namespace MyLearning\Http\Controllers;

use MyLearning\Timespent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Command\ListCommand\Enumerator;

class TimespentController extends Controller
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
        $timespent = new Timespent;
        $timespent->user_id = auth()->user()->id;
        $user_id = $timespent->user_id;
        $content_id = $request->content_id;
        $time_count = $request->time_count;

        $result = DB::table('timespents')
                    ->where('user_id', '=', $user_id)
                    ->where('content_id', '=', $content_id)
                    ->first();
        if (is_null($result)) {
            $curTime = new \DateTime();
            DB::table('timespents')
                ->insert([
                    'user_id'=>$user_id, 
                    'content_id'=>$content_id, 
                    'timespent'=>$time_count,
                    'created_at'=>$curTime
                    ]);
        } else {
            # code...
            Timespent::where([
                'user_id'=>$user_id, 
                'content_id'=>$content_id
                ])
                ->update([
                    'timespent'=> $time_count
                    ]);
        }
        return redirect(url()->previous());
    }

    /**
     * Display the specified resource.
     *
     * @param  \MyLearning\Timespent  $timespent
     * @return \Illuminate\Http\Response
     */
    public function show(Timespent $timespent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MyLearning\Timespent  $timespent
     * @return \Illuminate\Http\Response
     */
    public function edit(Timespent $timespent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MyLearning\Timespent  $timespent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timespent $timespent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MyLearning\Timespent  $timespent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timespent $timespent)
    {
        //
    }
}
