<?php

namespace MyLearning\Http\Controllers;

use MyLearning\ContentRecommendation;
use Illuminate\Http\Request;
use MyLearning\Contents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
// use Symfony\Component\HttpKernel\Client;
// use GuzzleHttp\Exception\GuzzleException;
// use GuzzleHttp\Client;

class ContentRecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $data1 = [
            'id_user' => $user_id,
        ];
    
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => "18.140.190.119:8001/recommend",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data1,true),
            CURLOPT_HTTPHEADER => array(
                "Content-Type:application/json"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        $json = json_decode($response,true);
        
        $json_dump = json_decode($response,true);
        $recommendations = array($json["recomendation"]);
        curl_close($curl);
        // dump($json ["recommendation"] [0]);
        $container =[];
        
        // foreach($json ["recommendation"] as $value){
        //     $container[]=json_decode($value, true);
        // }
        // dump($container);
        

        if ($err) {
            return view('contents.content-recommendation',['err'=>$err]);
        } else {
            return view('contents.content-recommendation',[
                'response'=>$response,
                'json'=>$json["recommendation"],
                'recommendations'=>$recommendations,
                'json_dump'=>$json_dump
                ]);
        }
        
        // $contentRecommendation = Contents::orderBy('rating', 'DESC')->get();
        // return view('contents.content-recommendation',['contentRecommendation'=>$contentRecommendation,]);
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
