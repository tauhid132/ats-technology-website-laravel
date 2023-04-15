@extends('master')
@section('title','ATS Technology | Best Internet Service Provider')

@section('main-body')

<main>
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <!-- Content START -->
            <div class="row mb-4 mb-md-5">
                <div class="col-md-12 mx-auto">
                    <h3 class="mb-4">Bill Payment</h3>
                    <p class="fw-bold">We have make payment more easier. Now Pay your Internet bill hassel free using Bkash, Nagad, Rocket, Payment Gateways etc.</p>
                    
                </div>
            </div>
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
    </section>
    
</main>
@endsection