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
                        <div class="card-body p-0">
                            <form class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label text-black">Your Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-black">Email address</label>
                                    <input type="email" class="form-control" placeholder="Enter Your Email Address">
                                </div>
                                <div class="col-6">
                                    <label class="form-label text-black">Mobile Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Mobile Number">
                                </div>
                                <div class="col-md-6">
									<label class="form-label text-black">Chosen Package</label>
									<select class="form-select js-choice" data-search-enabled="true">
										<option value="">Select item</option>
										<option>Sedan</option>
										<option>Micro</option>
										<option>CUV</option>
										<option>SUV</option>
										<option>Pick up</option>
										<option>Coupe</option>
									</select>
								</div>
                                <div class="col-12">
                                    <label class="form-label text-black">Connection Address</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                
                                <div class="col-12">
                                    <button class="btn btn-success mb-0" type="button">Submit</button>
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