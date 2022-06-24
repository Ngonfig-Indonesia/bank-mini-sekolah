<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('portal/fonts/icomoon/style.css') }}">

  <link rel="stylesheet" href="{{ asset('portal/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('portal/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('portal/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('portal/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('portal/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{ asset('portal/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{ asset('portal/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{ asset('portal/fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{ asset('portal/css/aos.css')}}">
  <link href="{{ asset('portal/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ asset('portal/css/style.css')}}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="{{ route('portal.index') }}" class="d-block">
              <img src="{{ url('portal/images/logo.jpg')}}" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="{{ route('portal.index') }}" class="nav-link text-left">Home</a>
                </li>
                <li>
                  <a href="{{ route('profil.index') }}" class="nav-link text-left">Profil Jurusan</a>
                </li>
                <li>
                  <a href="{{ route('informasis.index') }}" class="nav-link text-left">Informasi</a>
                </li>
                <li>
                  <a href="{{ route('siswa.gurus.index') }}" class="nav-link text-left">Data Jurusan</a>
                </li>
                <li>
                    <a href="{{ route('alumnis.index') }}" class="nav-link text-left">Alumni</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
         
        </div>
      </div>

    </header>

     @yield('content')
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
        </div>
      </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="{{ asset('portal/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('portal/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('portal/js/jquery-ui.js')}}"></script>
  <script src="{{ asset('portal/js/popper.min.js')}}"></script>
  <script src="{{ asset('portal/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('portal/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('portal/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('portal/js/jquery.countdown.min.js')}}"></script>
  <script src="{{ asset('portal/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('portal/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('portal/js/aos.js')}}"></script>
  <script src="{{ asset('portal/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{ asset('portal/js/jquery.sticky.js')}}"></script>
  <script src="{{ asset('portal/js/jquery.mb.YTPlayer.min.js')}}"></script>




  <script src="{{ asset('portal/js/main.js')}}"></script>

</body>

</html>