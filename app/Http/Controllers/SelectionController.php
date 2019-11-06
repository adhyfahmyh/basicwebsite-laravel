<?php

namespace MyLearning\Http\Controllers;

use Illuminate\Http\Request;
use MyLearning\Selection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SelectionController extends Controller
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
        $selection = new Selection;
        $selection->user_id = auth()->user()->id;
        $user_id = $selection->user_id;
        $content_id = $request->content_id;
        $selection_count = $request->selection_count;
        
        $result = DB::table('user_selection')
                    ->where('user_id', '=', $user_id)
                    ->where('content_id', '=', $content_id)
                    ->first();
        if (is_null($result)) {
            $curTime = new \DateTime();
            DB::table('user_selection')
                ->insert([
                    'user_id'=>$user_id, 
                    'content_id'=>$content_id, 
                    'total_selection'=>$selection_count,
                    'created_at'=>$curTime
                    ]);
        } else {
            # code...
            Selection::where([
                'user_id'=>$user_id, 
                'content_id'=>$content_id
                ])
                ->update([
                    'total_selection'=>$selection_count
                    ]);
        }
        return redirect(url()->previous())->with('total_selection', $selection_count);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $selection = Selection::find($id);
        $selection->user_id = auth()->user()->id;
        // $user_id = $selection->user_id;
        $content_id = $request->content_id;
        $selection_count = $request->selection_count;

        $selection->content_id = $content_id;
        $selection->total_selection = $selection_count;

        $selection->save();
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
