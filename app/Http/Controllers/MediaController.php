<?php

namespace App\Http\Controllers;
use \App\Post;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
        public function index()
    {

        return view('media' , ["post"=>$post]);
    }
}
