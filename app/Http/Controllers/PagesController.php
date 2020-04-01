<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home
    public function Home(){
        return view('index');
    }

    // about
    public function about(){
        return view('about');
    }

}
