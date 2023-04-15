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
    public function viewPayBill(){
        return view('frontend.pay-bill');
    }
    public function viewContact(){
        return view('frontend.contact-us');
    }
    public function viewOnlineReg(){
        return view('frontend.online-registration');
    }
}
