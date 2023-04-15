@extends('master')
@section('title','ATS Technology | Best Internet Service Provider')
@section('main-body')

<main>
    <section class="pt-0 pt-lg-5">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-lg-4 p-4 text-center">
                    <div class="row g-4">
                        <div class="col-sm-12 col-lg-12">
                            <div class="card card-body shadow p-4 h-100">
                                <h5 class="mb-2">Head Office</h5>
                                <address class="mb-1">House- 465, Road-31, (3rd Floor)</address>
                                <p class="mb-1">Mohakhali New DOHS, Dhaka 1206</p>
                                <h5 class="mb-2 mt-4">Registerd Office</h5>
                                <address class="mb-1">19/1A, Rasulbag Mohakhali, 1206</address>
                                <h5 class="mb-2 mt-4">Tejgoen Office</h5>
                                <address class="mb-1">House-20/4, Monipuripara, Tejgoen</address>
                                <h5 class="mb-2 mt-4">Banani Office</h5>
                                <address class="mb-1">House-36 (1st Floor), Amtoli, Banani</address>
                            </div>	
                        </div>
                        <div class="col-sm-12 col-lg-12">
                            <div class="card card-body shadow p-4 h-100">
                                <h5 class="mb-3">Contact</h5>
                                <address class="mb-1">Tel: 09614 23 23 23</address>
                                <p class="mb-1">Email: info@atsbd.net</p>
                            </div>	
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card shadow p-4">
                        <div class="card-header p-0 pb-4">
                            <h3 class="mb-0">Send us message</h3>
                        </div>
                        <div class="card-body p-0">
                            <form class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label text-black">Your Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-black">Email Address</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label text-black">Mobile Number</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label text-black">Message</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="col-12 form-check ms-2">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">
                                        By submitting this form you agree to our terms and conditions.
                                    </label>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-success mb-0" type="button">Send Message</button>
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