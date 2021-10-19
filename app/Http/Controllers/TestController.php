<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Http\Response;

class TestController extends Controller
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

        $headers = $request->headers->all();

        return response()->json(['success' => true, 'method' => $request->method() ,'headers' => $headers, 'payload' => $request->all()]);
    
    }



}
