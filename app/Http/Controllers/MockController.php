<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Http\Response;

class MockController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request){
    
        $statusCode = $request->get('statusCode', 200);

        $expected = $request->get('expected', NULL);

        $response_headers = $request->get('responseHeaders', NULL);

        $headers = [];

        if(!empty($response_headers)){
           
            $headers = (array)json_decode(base64_decode($response_headers));
            
        }

        return (new Response($expected, $statusCode))->withHeaders($headers);

    }

    //
}
