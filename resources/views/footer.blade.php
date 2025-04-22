<footer class="bg-dark pt-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3">
        <h5 class="text-white mb-2">Follow us on</h5>
        <ul class="list-inline mb-0 mt-3">
          <li class="list-inline-item"> <a class="btn btn-sm px-2 bg-facebook mb-0" href="https://facebook.com/atstechnologybd"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
          <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-instagram mb-0" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
          <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-youtube mb-0" href="#"><i class="fab fa-fw fa-youtube"></i></a> </li>
          <li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-linkedin mb-0" href="https://www.linkedin.com/company/ats-technologybd"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
        </ul>	
      </div>
      <div class="col-lg-8 ms-auto">
        <div class="row g-4">
          
          <div class="col-6 col-md-4">
            <h5 class="text-white mb-2 mb-md-4">Company</h5>
            <ul class="nav flex-column text-primary-hover">
              <li class="nav-item"><a class="nav-link text-muted" href="{{ asset('btrc-tarrif-chart.pdf') }}">BTRC Approved Tarrif</a></li>
              <li class="nav-item"><a class="nav-link text-muted" href="{{ route('privacyPolicy') }}">Privacy & Policy</a></li>
              <li class="nav-item"><a class="nav-link text-muted" href="{{ route('termsCondition') }}">Terms & Conditions</a></li>
              <li class="nav-item"><a class="nav-link text-muted" href="{{ route('returnRefund') }}">Refund Policy</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-4">
            <h5 class="text-white mb-2 mb-md-4">Services</h5>
            <ul class="nav flex-column text-primary-hover">
              <li class="nav-item"><a class="nav-link text-muted" href="{{ route('viewHomeInternet') }}">Home Internet</a></li>
              <li class="nav-item"><a class="nav-link text-muted" href="{{ route('viewSMEInternet') }}">SME Internet</a></li>
              <li class="nav-item"><a class="nav-link text-muted" href="https://selfcare.atsbd.net/quick-pay">Pay Bill</a></li>
              <li class="nav-item"><a class="nav-link text-muted" href="https://vas.atsbd.net">VAS</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-4">
            <h5 class="text-white mb-2 mb-md-4">Support</h5>
            <ul class="nav flex-column text-primary-hover">
              <li class="nav-item"><a class="nav-link text-muted" href="#">Support</a></li>
              <li class="nav-item"><a class="nav-link text-muted" href="#">FAQ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-4 justify-content-between mt-0 mt-md-2">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <img class="sslcommerz" src="{{ asset('images/sslcommerz.webp') }}"> 
      </div>
    </div>
    
    <hr class="mt-4 mb-0">
    
    <div class="row">
      <div class="container">
        <div class="d-lg-flex justify-content-center align-items-center py-3 text-center text-lg-start">
          <div class="text-muted text-primary-hover"> Copyright © {{ date('Y') }} ATS Technology</div>
        </div>
      </div>
    </div>
  </div>
</footer>