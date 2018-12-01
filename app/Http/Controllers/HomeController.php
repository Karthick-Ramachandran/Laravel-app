<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Interest;
use App\Behaviour;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return response()->json([
    'data' => Interest::all()
        ]);

    }
        public function data()
        {
    
            return response()->json([
        'data' => Blog::all()
            ]);
    
    

        

    }


    public function val(){
        return response()->json([
            Blogs::where('recommended', '=', '1')->get()
        ])
    }



}
