<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewConnectionMail;
use Illuminate\Support\Facades\Mail;

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

    public function viewSMEInternet(){
        return view('frontend.sme-plans');
    }
    // public function mail(){
    //     Mail::to('tauhid132@gmail.com')->send(new NewConnectionMail());
    // }
    public function onlineReg(Request $request){
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'package' => $request->package,
            'address' => $request->address,
        ];
        Mail::to('atstechnologybd@gmail.com')->send(new NewConnectionMail($details));
        return back()->with('success','Registered Successfully! We will contact you as soon as possible.');
    }

    public function privacyPolicy(){
        return view('frontend.privacy-policy');
    }
    public function termsCondition(){
        return view('frontend.terms-and-conditions');
    }
    public function returnRefund(){
        return view('frontend.return-and-refund');
    }
}
