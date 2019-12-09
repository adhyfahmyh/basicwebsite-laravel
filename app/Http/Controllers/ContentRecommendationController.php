<?php

namespace MyLearning\Http\Controllers;

use MyLearning\ContentRecommendation;
use Illuminate\Http\Request;
use MyLearning\Contents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Client;

class ContentRecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user_id = Auth::user()->id;
        // $data1 = [
        //     'id_user' => $user_id,
        // ];
    
        // $curl = curl_init();
    
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => "18.140.61.0:8001/recommend",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30000,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => json_encode($data1),
        //     CURLOPT_HTTPHEADER => array(
        //         // Set here required headers
        //         // "x-api-key: KiZTkTO9Ex2ZCOr7xmYRA4bInlJc9kVNrVN2INrc",
        //         "Content-Type:application/json"
        //     ),
        // ));
    
        // $response = curl_exec($curl);
        // $err = curl_error($curl);
        // $json = array(json_decode($response));
        // $recommendations = $json["recommendation"];

        // curl_close($curl);
    
        // if ($err) {
        //     return view('contents.content-recommendation',['err'=>$err]);
        // } else {
        //     return view('contents.content-recommendation',[
        //         'recommendations'=>$recommendations,
        //         'json'=>$json,
        //         'response'=>$response
        //         ]);
        // }
        // $ids = array(36, 35, 32, 33);
        // $ids_ordered = implode(',', $ids);

        // $contentRecommendation = Contents::whereIn('id', $ids) 
        // ->orderByRaw(DB::raw("FIELD(id, $ids_ordered)"))
        // ->get();
        
        $contentRecommendation = Contents::orderBy('rating', 'DESC')->get();
        return view('contents.content-recommendation',['contentRecommendation'=>$contentRecommendation,]);
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
     * @param  \MyLearning\ContentRecommendation  $contentRecommendation
     * @return \Illuminate\Http\Response
     */
    public function show(ContentRecommendation $contentRecommendation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MyLearning\ContentRecommendation  $contentRecommendation
     * @return \Illuminate\Http\Response
     */
    public function edit(ContentRecommendation $contentRecommendation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MyLearning\ContentRecommendation  $contentRecommendation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContentRecommendation $contentRecommendation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MyLearning\ContentRecommendation  $contentRecommendation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContentRecommendation $contentRecommendation)
    {
        //
    }
}
