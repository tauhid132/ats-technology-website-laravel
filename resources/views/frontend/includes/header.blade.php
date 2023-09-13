
<div class="alert alert-warning py-2 bg-primary border-0 rounded-0 alert-dismissible fade show text-center overflow-hidden" role="alert">
    <span style="margin-right:30px" class="text-white text-end"><i class="fa fa-envelope text-white"></i> info@atsbd.net</span> <span class="text-white"><i class="fa fa-phone text-white"></i> 09614 23 23 23</span>
</div>
<header class="navbar-light header-sticky">
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="light-mode-item navbar-brand-item" src="images/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler ms-auto ms-sm-0 p-2 p-sm-2 float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-animation">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="d-none d-sm-inline-block small">Menu</span>
            </button>
            
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll mx-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link {{ Request::is('/') ? 'active':''  }}" href="{{ route('home') }}" >Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Request::is('home-internet') ? 'active':''  }}" href="{{ route('viewHomeInternet') }}" >Packages</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" >Coverage</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link  {{ Request::is('pay-bill') ? 'active':''  }}" href="{{ route('viewPayBill') }}" >Pay Bill</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link " href="https://vas.atsbd.net" >VAS</a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ Request::is('contact-us') ? 'active':''  }}" href="{{ route('viewContact') }}" >Contact Us</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn btn-success ml-2"><i class="fa fa-user"></i> Selfcare</a>
        </div>
    </nav>
</header>