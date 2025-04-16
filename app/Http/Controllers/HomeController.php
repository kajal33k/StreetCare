<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
        return view('frontend.about');
    }

    public function volenteer(){
        return view('frontend.volenteer');
    }

    public function saviour(){
        return view('frontend.saviour');
    }
}
