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

    public function protector(){
        return view('frontend.protector');
    }

    public function informer(){
        return view('frontend.informer');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function blog(){
        return view('frontend.blog');
    }

    public function donate(){
        return view('frontend.donate');
    }

    public function learn(){
        return view('frontend.learn');
    }

    public function adopt(){
        return view('frontend.adopt');
    }

    public function care(){
        return view('frontend.care');
    }

    public function medical(){
        return view('frontend.medical');
    }

    public function protect(){
        return view('frontend.protect');
    }

    public function rescue(){
        return view('frontend.rescue');
    }

    public function know(){
        return view('frontend.know');
    }

    public function gaurdian(){
        return view('frontend.gaurdian');
    }

    public function help(){
        return view('frontend.help');
    }

    public function report(){
        return view('frontend.report');
    }
}
