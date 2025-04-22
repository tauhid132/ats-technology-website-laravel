@extends('master')
@section('title','ATS Technology | Best Internet Service Provider')

@section('main-body')

<main>
    <section class="py-0">
        <div class="container">
            <div class="rounded-3 p-4 p-sm-5" style="background-image: url({{ asset('images/header-bg.png') }}); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="h2 text-white mb-3">Our Monthly Plan for Home</h1>
                    </div>
                </div>
            </div>	
        </div>
    </section>
    <section class="pt-0 pt-md-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="row g-4">
                                <div class="col-sm-3 col-md-3">
                                    <h6 class="mb-0 text-primary">Home-15</h6>
                                    <h3>15 Mbps</h3>
                                    <p class="mb-0">Unlimited</p>
                                </div>	
                                <div class="col-md-6 row mt-4">
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Upto 100 Mbps IX</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Bufferless Streamimg </span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Private IP</span>
                                            </li>
                                        </ul>
                                    </div>	
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>24/7 Support</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Optical Fiber Connection</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Gaming Cache Server</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 align-items-center  text-end">
                                    <div class="mb-3 text-center">
                                        <span class="h3 plan-price mb-0">500</span>
                                        <span class="h6 fw-light mb-0">BDT/Month</span>
                                    </div>
                                    <a href="{{ route('viewOnlineReg') }}" class="btn btn-success w-100 rounded-5"><i class="fa fa-plus me-2"></i>Register Now</a>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="row g-4">
                                <div class="col-sm-3 col-md-3">
                                    <h6 class="mb-0 text-primary">Home-20</h6>
                                    <h3>20 Mbps</h3>
                                    <p class="mb-0">Unlimited</p>
                                </div>	
                                <div class="col-md-6 row mt-4">
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Upto 100 Mbps IX</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Bufferless Streamimg </span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Private IP</span>
                                            </li>
                                        </ul>
                                    </div>	
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>24/7 Support</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Optical Fiber Connection</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Gaming Cache Server</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 align-items-center  text-end">
                                    <div class="mb-3 text-center">
                                        <span class="h3 plan-price mb-0">600</span>
                                        <span class="h6 fw-light mb-0">BDT/Month</span>
                                    </div>
                                    <a href="{{ route('viewOnlineReg') }}" class="btn btn-success w-100 rounded-5"><i class="fa fa-plus me-2"></i>Register Now</a>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="row g-4">
                                <div class="col-sm-3 col-md-3">
                                    <h6 class="mb-0 text-primary">Home-30</h6>
                                    <h3>30 Mbps</h3>
                                    <p class="mb-0">Unlimited</p>
                                </div>	
                                <div class="col-md-6 row mt-4">
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Upto 100 Mbps IX</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Bufferless Streamimg </span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Private IP</span>
                                            </li>
                                        </ul>
                                    </div>	
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>24/7 Support</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Optical Fiber Connection</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Gaming Cache Server</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 align-items-center  text-end">
                                    <div class="mb-3 text-center">
                                        <span class="h3 plan-price mb-0">700</span>
                                        <span class="h6 fw-light mb-0">BDT/Month</span>
                                    </div>
                                    <a href="{{ route('viewOnlineReg') }}" class="btn btn-success w-100 rounded-5"><i class="fa fa-plus me-2"></i>Register Now</a>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="row g-4">
                                <div class="col-sm-3 col-md-3">
                                    <h6 class="mb-0 text-primary">Home-40</h6>
                                    <h3>40 Mbps</h3>
                                    <p class="mb-0">Unlimited</p>
                                </div>	
                                <div class="col-md-6 row mt-4">
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Upto 100 Mbps IX</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Bufferless Streamimg </span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Private IP</span>
                                            </li>
                                        </ul>
                                    </div>	
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>24/7 Support</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Optical Fiber Connection</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Gaming Cache Server</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 align-items-center  text-end">
                                    <div class="mb-3 text-center">
                                        <span class="h3 plan-price mb-0">800</span>
                                        <span class="h6 fw-light mb-0">BDT/Month</span>
                                    </div>
                                    <a href="{{ route('viewOnlineReg') }}" class="btn btn-success w-100 rounded-5"><i class="fa fa-plus me-2"></i>Register Now</a>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="row g-4">
                                <div class="col-sm-3 col-md-3">
                                    <h6 class="mb-0 text-primary">Home-60</h6>
                                    <h3>60 Mbps</h3>
                                    <p class="mb-0">Unlimited</p>
                                </div>	
                                <div class="col-md-6 row mt-4">
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Upto 100 Mbps IX</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Bufferless Streamimg </span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Private IP</span>
                                            </li>
                                        </ul>
                                    </div>	
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>24/7 Support</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Optical Fiber Connection</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Gaming Cache Server</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 align-items-center  text-end">
                                    <div class="mb-3 text-center">
                                        <span class="h3 plan-price mb-0">1000</span>
                                        <span class="h6 fw-light mb-0">BDT/Month</span>
                                    </div>
                                    <a href="{{ route('viewOnlineReg') }}" class="btn btn-success w-100 rounded-5"><i class="fa fa-plus me-2"></i>Register Now</a>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="row g-4">
                                <div class="col-sm-3 col-md-3">
                                    <h6 class="mb-0 text-primary">Home-80</h6>
                                    <h3>80 Mbps</h3>
                                    <p class="mb-0">Unlimited</p>
                                </div>	
                                <div class="col-md-6 row mt-4">
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Upto 100 Mbps IX</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Bufferless Streamimg </span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Real/Public IP</span>
                                            </li>
                                        </ul>
                                    </div>	
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>24/7 Support</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Optical Fiber Connection</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Gaming Cache Server</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 align-items-center  text-end">
                                    <div class="mb-3 text-center">
                                        <span class="h3 plan-price mb-0">1500</span>
                                        <span class="h6 fw-light mb-0">BDT/Month</span>
                                    </div>
                                    <a href="{{ route('viewOnlineReg') }}" class="btn btn-success w-100 rounded-5"><i class="fa fa-plus me-2"></i>Register Now</a>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="row g-4">
                                <div class="col-sm-3 col-md-3">
                                    <h6 class="mb-0 text-primary">Home-100</h6>
                                    <h3>100 Mbps</h3>
                                    <p class="mb-0">Unlimited</p>
                                </div>	
                                <div class="col-md-6 row mt-4">
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Upto 100 Mbps IX</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Bufferless Streamimg </span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Real/Public IP</span>
                                            </li>
                                        </ul>
                                    </div>	
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>24/7 Support</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Optical Fiber Connection</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Gaming Cache Server</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 align-items-center  text-end">
                                    <div class="mb-3 text-center">
                                        <span class="h3 plan-price mb-0">2000</span>
                                        <span class="h6 fw-light mb-0">BDT/Month</span>
                                    </div>
                                    <a href="{{ route('viewOnlineReg') }}" class="btn btn-success w-100 rounded-5"><i class="fa fa-plus me-2"></i>Register Now</a>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="row g-4">
                                <div class="col-sm-3 col-md-3">
                                    <h6 class="mb-0 text-primary">Home-120</h6>
                                    <h3>120 Mbps</h3>
                                    <p class="mb-0">Unlimited</p>
                                </div>	
                                <div class="col-md-6 row mt-4">
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Upto 100 Mbps IX</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Bufferless Streamimg </span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Real/Public IP</span>
                                            </li>
                                        </ul>
                                    </div>	
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>24/7 Support</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Optical Fiber Connection</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Gaming Cache Server</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 align-items-center  text-end">
                                    <div class="mb-3 text-center">
                                        <span class="h3 plan-price mb-0">3000</span>
                                        <span class="h6 fw-light mb-0">BDT/Month</span>
                                    </div>
                                    <a href="{{ route('viewOnlineReg') }}" class="btn btn-success w-100 rounded-5"><i class="fa fa-plus me-2"></i>Register Now</a>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="row g-4">
                                <div class="col-sm-3 col-md-3">
                                    <h6 class="mb-0 text-primary">Home-150</h6>
                                    <h3>150 Mbps</h3>
                                    <p class="mb-0">Unlimited</p>
                                </div>	
                                <div class="col-md-6 row mt-4">
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Upto 100 Mbps IX</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Bufferless Streamimg </span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Real/Public IP</span>
                                            </li>
                                        </ul>
                                    </div>	
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>24/7 Support</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Optical Fiber Connection</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Gaming Cache Server</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 align-items-center  text-end">
                                    <div class="mb-3 text-center">
                                        <span class="h3 plan-price mb-0">4000</span>
                                        <span class="h6 fw-light mb-0">BDT/Month</span>
                                    </div>
                                    <a href="{{ route('viewOnlineReg') }}" class="btn btn-success w-100 rounded-5"><i class="fa fa-plus me-2"></i>Register Now</a>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>

                {{-- <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <div class="row g-4">
                                <div class="col-sm-3 col-md-3">
                                    <h6 class="mb-0 text-primary">Blizzard</h6>
                                    <h3>100 Mbps</h3>
                                    <p class="mb-0">Unlimited</p>
                                </div>	
                                <div class="col-md-6 row mt-4">
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-1"></i>Upto 100 Mbps IX</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Bufferless Streamimg </span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Real/Public IP</span>
                                            </li>
                                        </ul>
                                    </div>	
                                    <div class="col-sm-6 col-md-6">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>24/7 Support</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Optical Fiber Connection</span>
                                            </li>
                                            <li class="list-group-item d-flex pb-0 mb-2">
                                                <span class="h6 fw-normal mb-0"><i class="fa-solid fa-check-circle text-success me-2"></i>Gaming Cache Server</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3 align-items-center  text-end">
                                    <div class="mb-3 text-center">
                                        <span class="h3 plan-price mb-0">4000</span>
                                        <span class="h6 fw-light mb-0">BDT/Month</span>
                                    </div>
                                    <a href="{{ route('viewOnlineReg') }}" class="btn btn-success w-100 rounded-5">Register Now</a>
                                </div>
                                
                            </div>
                        </div>	
                    </div>
                </div> --}}


            </div>
        </div>
    </section>
    
    
    
    
</main>
@endsection