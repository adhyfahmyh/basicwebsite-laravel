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
        $user_id = Auth::user()->id;
        $data1 = [
            'id_user' => $user_id,
        ];
    
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => "52.221.179.83:8001/recommend",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data1),
            CURLOPT_HTTPHEADER => array(
                // Set here required headers
                // "x-api-key: KiZTkTO9Ex2ZCOr7xmYRA4bInlJc9kVNrVN2INrc",
                "Content-Type:application/json"
            ),
        ));
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
    
        curl_close($curl);
    
        if ($err) {
            return view('contents.content-recommendation',['err'=>$err,]);
        } else {
            return view('contents.content-recommendation',['response'=>$response,]);
        }
        // $ids = array(36, 35, 32, 33);
        // $ids_ordered = implode(',', $ids);

        // $contentRecommendation = Contents::whereIn('id', $ids) 
        // ->orderByRaw(DB::raw("FIELD(id, $ids_ordered)"))
        // ->get();
        // $apiKey = "747806a8fb01dcb5556352284eb93254";
        // $cityId = "1649378";
        // $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

        // $ch = curl_init();

        // curl_setopt($ch, CURLOPT_HEADER, 0);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        // curl_setopt($ch, CURLOPT_VERBOSE, 0);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // $response = curl_exec($ch);

        // curl_close($ch);
        // $data = json_decode($response);
        // $currentTime = time();

        
        // $user_id = Auth::user()->id;

        // return view('contents.content-recommendation',['contentRecommendation'=>$contentRecommendation,]);
        // return view('contents.content-recommendation',[
        //     'data'          =>$data, 
        //     'currentTime'   =>$currentTime,
        //     'user_id'       =>$user_id
        //     ]);
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
