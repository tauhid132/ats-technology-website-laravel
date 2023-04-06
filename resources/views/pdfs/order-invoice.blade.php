@extends('frontend.master')
@section('main-body')
<div class="container-fluid">
    <!-- end page title -->
    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-header border-bottom p-4">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <img src="{{ asset('images/logo_linkfuel.png') }}" class="" alt="logo dark" height="70">
                        
                                   
                                </div>
                                <div class="flex-shrink-0 mt-sm-0 mt-3">
                                    <h6><span class="text-bold text-uppercase fw-semibold mb-1">Address: </span></h6><p> House-465, R-31, Mohakhali DOHS,<br> Dhaka, Bangladesh</p>
                                    <h6><span class="text-bold text-uppercase fw-semibold mb-1">Email:</span><span> info@linkfuel.com</span></h6>
                                    <h6><span class="text-bold text-uppercase fw-semibold mb-1">Website: </span> <a href="https://linkfuel.com" class="link-primary" target="_blank" id="website">www.linkfuel.com</a></h6>
                                    <h6 class="mb-0"><span class="text-bold text-uppercase fw-semibold mb-1">Contact No: </span><span id="contact-no"> +(01) 234 6789</span></h6>
                                </div>
                            </div>
                        </div>
                        <!--end card-header-->
                    </div><!--end col-->
                    <div class="col-lg-12">
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Invoice No</p>
                                    <h5 class="fs-14 mb-0">#LF<span>{{ $order->id }}</span></h5>
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-6">
                                    <h6 class="text-muted text-uppercase fw-semibold mb-3">Billing Address</h6>
                                    <p class="fw-medium mb-2" >{{ $order->orderOf->first_name }} {{ $order->orderOf->last_name }}</p>
                                    <p class="text-muted mb-1" >{{ $order->address }},{{ $order->city }} <br>{{ $order->zip_code }}, {{ $order->country }}</p>
                                    @if($order->phone != null)
                                    <p class="text-muted mb-1"><span>Phone: </span><span>{{ $order->phone }}</span></p>
                                    @else
                                    @endif
                                    <p class="text-muted mb-0"><span>Email: </span><span >{{ $order->orderOf->email }}</span> </p>
                                   
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Date</p>
                                    <h5 class="fs-14 mb-0"><span id="invoice-date">{{ $order->created_at->format('j F, Y') }}</span> <small class="text-muted" >{{ $order->created_at->format('h:i A') }}</small></h5>
                                   
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Payment Status</p>
                                    @if($order->payment_status == 1)
                                    <span class="badge bg-success fs-14">Paid</span>
                                    @else
                                    <span class="badge bg-danger fs-14">Unpaid</span>
                                    @endif
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div><!--end col-->
                  
                    <div class="col-lg-12">
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                    <thead class="bg-info">
                                        <tr class="table-active">
                                            <th scope="col" style="width: 50px;">#</th>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col" class="text-end">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($order->OrderedLinks as $item )
                                        <tr>
                                            <th scope="row">{{ $i }}</th>
                                            <td class="text-start">
                                                <span class="fw-medium">{{ $item->media }}</span>
                                                <p class="text-muted mb-0"><i class="fa fa-check text-success"></i> 400 Word Article</p>
                                                <p class="text-muted mb-0"><i class="fa fa-check text-success"></i> Do Follow Link</p>
                                            </td>
                                            <td>€ {{ $item->sell_price }}</td>
                                            <td>{{ $item->pivot->quantity }}</td>
                                            <td class="text-end">€ {{ $item->sell_price * $item->pivot->quantity  }}</td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                        @endforeach
                                       
                                    </tbody>
                                </table><!--end table-->
                            </div>
                            <div class="border-top border-top-dashed mt-2">
                                <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                    <tbody>
                                        <tr>
                                            <td>Sub Total</td>
                                            <td class="text-end">€ 699.96</td>
                                        </tr>
                                        <tr>
                                            <td>Estimated Tax</td>
                                            <td class="text-end">€ 0</td>
                                        </tr>
                                        <tr>
                                            <td>Discount <small class="text-muted"></small></td>
                                            <td class="text-end">- € 0</td>
                                        </tr>
                                        <tr class="border-top border-top-dashed fs-15">
                                            <th scope="row">Total Amount</th>
                                            <th class="text-end">€ 755.96</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end table-->
                            </div>
                            <div class="mt-3">
                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Payment Details:</h6>
                                <p class="text-muted mb-1">Payment Method: <span class="fw-medium" id="payment-method">Mastercard</span></p>
                                <p class="text-muted mb-1">Card Holder: <span class="fw-medium" id="card-holder-name">David Nichols</span></p>
                                <p class="text-muted mb-1">Card Number: <span class="fw-medium" id="card-number">xxx xxxx xxxx 1234</span></p>
                                <p class="text-muted">Total Amount: <span class="fw-medium" id="">$ </span><span id="card-total-amount">755.96</span></p>
                            </div>
                            <div class="mt-4">
                                <div class="alert alert-info">
                                    <p class="mb-0"><span class="fw-semibold">NOTES:</span>
                                        <span id="note">All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or
                                            credit card or direct payment online. If account is not paid within 7
                                            days the credits details supplied as confirmation of work undertaken
                                            will be charged the agreed quoted fee noted above.
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Print</a>
                                <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download</a>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div><!--end col-->
                </div><!--end row-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    
    <!-- container-fluid -->
</div>
@endsection