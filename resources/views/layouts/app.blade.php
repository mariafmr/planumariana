<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Plan de Emergencia &mdash; Univerdiad Mariana</title>
    <!--<title>{{ config('app.name', 'PLAN EMEGENCIAS') }}</title>-->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- PRINCIPAL -->
    <link rel="stylesheet" href="../principal/fonts/icomoon/style.css">
    
    <link rel="stylesheet" href="../principal/css/bootstrap.min.css">
    <link rel="stylesheet" href="../principal/css/jquery-ui.css">
    <link rel="stylesheet" href="../principal/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../principal/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../principal/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../principal/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../principal/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../principal/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../principal/css/aos.css">

    <link rel="stylesheet" href="../principal/css/style.css">
    
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
         
          
          <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            <div class="container-fluid">
              <div class="d-flex align-items-center">
                <div class="site-logo mr-auto w-25"><a href="index.html"> PLAN DE EMERGENCIA</a></div>
                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                            <li><a href="#home-section" class="nav-link">Inicio</a></li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                        
                            @endguest
                        
                        </ul>
                        </nav>
                    </div>
                </div>
              </div>
            </div>
          </header>
            <div class="intro-section" id="home-section">
              <div class="slide-1" style="background-image: url('../principal/images/imagen1.jpeg');" data-stellar-background-ratio="0.5">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-12">
                      <div class="row align-items-center">
                        <div class="col-lg-6 mb-4">
                          <h1  data-aos="fade-up" data-aos-delay="100">Plan de Prevención, Preparación y Respuesta ante Emergencias de la Universidad Mariana.</h1>
                          <p class="mb-4"  data-aos="fade-up" data-aos-delay="200"></p>
                          <p data-aos="fade-up" data-aos-delay="300"><a href="http://www.umariana.edu.co/" class="btn btn-primary py-3 px-5 btn-pill">Más Información...</a></p>
                        </div>
                        @yield('content')
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>   
        
            
        
           
        
          
          
            
          </div> <!-- .site-wrap -->
        
          <script src="../principal/js/jquery-3.3.1.min.js"></script>
          <script src="../principal/js/jquery-migrate-3.0.1.min.js"></script>
          <script src="../principal/js/jquery-ui.js"></script>
          <script src="../principal/js/popper.min.js"></script>
          <script src="../principal/js/bootstrap.min.js"></script>
          <script src="../principal/js/owl.carousel.min.js"></script>
          <script src="../principal/js/jquery.stellar.min.js"></script>
          <script src="../principal/js/jquery.countdown.min.js"></script>
          <script src="../principal/js/bootstrap-datepicker.min.js"></script>
          <script src="../principal/js/jquery.easing.1.3.js"></script>
          <script src="../principal/js/aos.js"></script>
          <script src="../principal/js/jquery.fancybox.min.js"></script>
          <script src="../principal/js/jquery.sticky.js"></script>
        
          
          <script src="../principal/js/main.js"></script>
            






   
</body>
</html>
