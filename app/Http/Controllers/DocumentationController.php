<?php

namespace App\Http\Controllers;

class DocumentationController extends Controller
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

    public function introduction(){

        return view('documentation.introduction');
    }
    
    public function installation(){

        return view('documentation.installation');
    }

    public function query(){

        return view('documentation.query');
    }
  
    public function mock(){

        return view('documentation.mock');
    }
    
    public function ratelimiter(){

        return view('documentation.ratelimiter');
    }

    public function references(){

        return view('documentation.references');
    }
    
    //
}
