<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function viewHome(){
        return view('frontend.home');
    }
    public function viewHomeInternet(){
        return view('frontend.home-internet');
    }
    public function viewCorporateInternet(){
        return view('frontend.corporate-internet');
    }
}
