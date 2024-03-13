@extends('master')
@section('title','ATS Technology | Best Internet Service Provider')
@section('main-body')

<main>
    <section class="py-0">
        <div class="container">
            <div class="rounded-3 p-4 p-sm-5" style="background-image: url({{ asset('images/header-bg.png') }}); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="h2 text-white mb-1">Pay Your Internet Bill Online!</h1>
                        <p class="text-white"><i class="fa fa-info-circle me-2"></i>We have make payment more easier. Now Pay your Internet bill hassel free using Bkash, Nagad, Rocket, Payment Gateways etc.</p>
                    </div>
                </div>
            </div>	
        </div>
    </section>
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="card shadow">
                <div class="card-header border-bottom">
                    <h5 class="mb-0">Bill Payment</h5>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <label class="form-label">Enter Username / Registered Mobile Number</label>
                            <input type="text" class="form-control" placeholder="mdXXXX / 017XXXXXXXX">
                        </div>

                        <div class="col-md-4">
                            <button class="btn btn-primary">Pay Bill</button>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </section>
    <section>
        <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4">
                    <img src="{{ asset('images/bkash.jpg') }}" style="height: 100px">
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <img src="{{ asset('images/nagad.png') }}" style="height: 100px">
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <img src="{{ asset('images/mastercard.jpg') }}" style="height: 100px">
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <img src="{{ asset('images/ssl.png') }}" style="height: 100px">    
                </div>
            </div>
        </div>
        </div>
    </section> 
</main>
@endsection