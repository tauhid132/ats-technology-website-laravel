@extends('master')
@section('title','ATS Technology | Best Internet Service Provider')
@section('main-body')

<main>
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-md-12 mx-auto">
                    <h3 class="mb-2">New Connection Request</h3>
                    <p class="fw-bold">Please provide your information. Our Sales Executive will contact you as soon as possible.</p>
                </div>
               
                <div class="col-lg-12">
                    <div class="card shadow p-3">
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong> {{ $error }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endforeach
                        @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong> {{ session()->get('error') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>  {{ session()->get('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="card-body p-0">
                            <form class="row g-2" method="post" action="{{ route('viewOnlineReg') }}">
                                @csrf
                                <div class="col-md-6">
                                    <label class="form-label text-black">Your Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-black">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-black">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile" minlength="11" maxlength="11" placeholder="Enter Mobile Number" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-black">Chosen Package</label>
                                    <select class="form-select" name="package" required>
                                        <option value="">Select Package</option>
                                        <option value="10 Mbps">10 Mbps - 500 BDT</option>
                                        <option value="20 Mbps">20 Mbps - 800 BDT</option>
                                        <option value="40 Mbps">40 Mbps - 1000 BDT</option>
                                        <option value="50 Mbps">50 Mbps - 1250 BDT</option>
                                        <option value="60 Mbps">60 Mbps - 1500 BDT</option>
                                        <option value="80 Mbps">80 Mbps - 2000 BDT</option>
                                        <option value="90 Mbps">90 Mbps - 3000 BDT</option>
                                        <option value="100 Mbps">100 Mbps - 4000 BDT</option>
                                    </select>
                                </div>
                                <div class="col-12-md-12">
                                    <label class="form-label text-black">Connection Address</label>
                                    <textarea class="form-control" name="address" rows="3" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label text-black">Location in Google Map (Optional)</label>
                                    <input type="text" class="form-control" name="google_map_location">
                                </div>
                                
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-success mb-0" type="submit"><i class="fa fa-paper-plane"></i> Submit</button>
                                </div>	
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>
@endsection