<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Univerdiad Mariana &mdash; Plan de Emergencia</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
      
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
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
                        <li><a href="#courses-section" class="nav-link">Brigada</a></li>
                        <li><a href="#programs-section" class="nav-link">Amenazas</a></li>
                        <li><a href="#teachers-section" class="nav-link">Contactos</a></li>
                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/ho') }}"></a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    
                    </ul>
                    </nav>
                  </div>
                  <div class="ml-auto w-25">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                      <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                        <li class="cta"><a href="#contact-section" class="nav-link"><span>Contactos</span></a></li>
                      </ul>
                    </nav>
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
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
                          <h1  data-aos="fade-up" data-aos-delay="100">Plan de Prevención, Preparación y Respuesta ante Emergencias de la SEDE
                            PRINCIPAL de la Universidad Mariana.</h1>
                          <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">
                          </p>
                          <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary py-3 px-5 btn-pill">Más Información</a></p>
        
                        </div>
        
                        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                          <form action="" method="post" class="form-box">
                            <h3 class="h4 text-black mb-4">Inicio Sesión</h3>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Digite su correo">
                            </div>
                            <div class="form-group">
                              <input type="password" class="form-control" placeholder="Digite su contraseña">
                            </div>
                            <div class="form-group mb-4">
                              <input type="password" class="form-control" placeholder="Digite su contraseña">
                            </div>
                            <div class="form-group">
                              <input type="submit" class="btn btn-primary btn-pill" value="Enviar">
                            </div>
                          </form>
        
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>   
          </div>
           
            <div class="site-section courses-title" id="courses-section">
              <div class="container">
                <div class="row mb-5 justify-content-center">
                  <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                    <h2 class="section-title">BRIGADISTAS</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
              <div class="container">
                <div class="row">
                 
                  <div class="owl-carousel col-12 nonloop-block-14">
                    <div class="course bg-white h-100 align-self-stretch">
                      <figure class="m-0">
                        <a href="course-single.html"><img src="../principal/images/avatar1.jpg" alt="Image" class="img-fluid"></a>
                      </figure>
                      <div class="course-inner-text py-4 px-4">
                        <span class="course-price">1</span>
                        <div class="meta"><span class="icon-clock-o"></span>JEFE DE BRIGADA</div>
                        <h3><a href="#">HENRY ANDRADE</a></h3>
                        <p>henry@umariana.edu.co</p>
                        <p>315242548</p>
                      </div>
                      <div class="d-flex border-top stats">
                        <div class="py-3 px-4"><span class="icon-users"></span>  7314923 </div>
                        <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> ext.214</div>
                      </div>
                    </div>
                    <div class="course bg-white h-100 align-self-stretch">
                      <figure class="m-0">
                        <a href="course-single.html"><img src="../principal/images/avatar1.jpg" alt="Image" class="img-fluid"></a>
                      </figure>
                      <div class="course-inner-text py-4 px-4">
                        <span class="course-price">2</span>
                        <div class="meta"><span class="icon-clock-o"></span>COORD - GRUPO CONTRA INCENDIO</div>
                        <h3><a href="#">CARLOS INSUASTY</a></h3>
                        <p>carlos@umariana.edu.co</p>
                        <p>315242548</p>
                      </div>
                      <div class="d-flex border-top stats">
                        <div class="py-3 px-4"><span class="icon-users"></span>  7314923 </div>
                        <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> ext.214</div>
                      </div>
                    </div>
                    <div class="course bg-white h-100 align-self-stretch">
                      <figure class="m-0">
                        <a href="course-single.html"><img src="../principal/images/avatar3.jpg" alt="Image" class="img-fluid"></a>
                      </figure>
                      <div class="course-inner-text py-4 px-4">
                        <span class="course-price">3</span>
                        <div class="meta"><span class="icon-clock-o"></span>COORD - GRUPO DE PRIMEROS AUXILIOS</div>
                        <h3><a href="#">DIANA LOPEZ</a></h3>
                        <p>diana@umariana.edu.co</p>
                        <p>3152458899</p>
                      </div>
                      <div class="d-flex border-top stats">
                        <div class="py-3 px-4"><span class="icon-users"></span>  7315445 </div>
                        <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> ext.211</div>
                      </div>
                    </div>
                    <div class="course bg-white h-100 align-self-stretch">
                      <figure class="m-0">
                        <a href="course-single.html"><img src="../principal/images/avatar1.jpg" alt="Image" class="img-fluid" width="50px"></a>
                      </figure>
                      <div class="course-inner-text py-4 px-4">
                        <span class="course-price">4</span>
                        <div class="meta"><span class="icon-clock-o"></span>COORD - GRUPO DE EVACUACIÓN</div>
                        <h3><a href="#">JAVIER VILLALBA</a></h3>
                        <p>javier@umariana.edu.co</p>
                        <p>31542858</p>
                      </div>
                      <div class="d-flex border-top stats">
                        <div class="py-3 px-4"><span class="icon-users"></span>  7312923 </div>
                        <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> ext.212</div>
                      </div>
                    </div>
               
                  </div>
        
                
        
                </div>
                <div class="row justify-content-center">
                  <div class="col-7 text-center">
                    <button class="customPrevBtn btn btn-primary m-1">Anterior</button>
                    <button class="customNextBtn btn btn-primary m-1">Siguiente</button>
                  </div>
                </div>
              </div>
            </div>
        
        
            <div class="site-section" id="programs-section">
              <div class="container">
                <div class="row mb-5 justify-content-center">
                  <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
                
                    <h2 class="section-title">NOTICIAS</h2>
                    <p></p>
                
                </div>

                </div>
                <div class="row mb-5 align-items-center">
                  <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="../principal/images/imagen1.png" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-black mb-4">PROTOCOLOS DE EMERGENCIAS</h2>
                    <p class="mb-4"></p>
                    
                    <div class="d-flex align-items-center custom-icon-wrap mb-3">
                      <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
                      <div><h3 class="m-0">Ver más</h3></div>
                    </div>
        
                    <div class="d-flex align-items-center custom-icon-wrap">
                      <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
                      <div><h3 class="m-0">Enlace</h3></div>
                    </div>
        
                  </div>
                </div>
        
                <div class="row mb-5 align-items-center">
                  <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="../principal/images/imagen3.png" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-black mb-4">SIMULACRO POR SISMO</h2>
                    <p class="mb-4"></p>
        
                    <div class="d-flex align-items-center custom-icon-wrap mb-3">
                      <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
                      <div><h3 class="m-0">Ver más</h3></div>
                    </div>
        
                    <div class="d-flex align-items-center custom-icon-wrap">
                      <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
                      <div><h3 class="m-0">Enlace</h3></div>
                    </div>
        
                  </div>
                </div>
        
                <!--<div class="row mb-5 align-items-center">
                  <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="../principal/images/undraw_teacher.svg" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-black mb-4">Education is life</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>
        
                    <div class="d-flex align-items-center custom-icon-wrap mb-3">
                      <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
                      <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
                    </div>
        
                    <div class="d-flex align-items-center custom-icon-wrap">
                      <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
                      <div><h3 class="m-0">150 Universities Worldwide</h3></div>
                    </div>
        
                  </div>
                </div>-->
        
              </div>
            </div>
          
            <div class="site-section" id="teachers-section">
              <div class="container">
                <div class="row mb-5 justify-content-center">
                  <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
                    @foreach ( $threats as $threat)
                    <h2 class="section-title">{{$threat->title }}</h2>
                    @endforeach 
                  </div>
                </div>
            
                <div class="row">
                  @foreach ( $threats as $threat)
                  <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="teacher text-center">
                      @if ( $threat->images->count()<=0 )
                      <img alt="Image"  src="/imagenes/avatar.png" class="img-fluid w-50 rounded-circle mx-auto mb-4">
                      @else
                          <img alt="Image" src="{{  $threat->images->random()->url }}" class="img-fluid w-50 rounded-circle mx-auto mb-4">   
                      @endif
                      <div class="py-2">
                        <h3 class="text-black">{{$threat->subtitle }}</h3>
                        <p class="position">Physics Teacher</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
                      </div>
                    </div>
                  </div>
                  @endforeach 
                
                </div>
              </div>
            </div>
         
           <!-- <div class="row">
              @foreach ( $threats as $threat)
                  <div class="col-xl-4 col-md-6 col-lg-4">
                      <div class="single_department">
                         
                          <div class="department_content">
                              <h3><a> {{$threat->title }}</a></h3>
                              <p>{{$threat->subtitle }}</p>
                                
                          </div>
                      </div>
                  </div>                 
              @endforeach              
            </div>-->
        
            <div class="site-section bg-image overlay" style="background-image: url('../principal/images/imagen4.jpeg');">
              <div class="container">
                <div class="row justify-content-center align-items-center">
                  <div class="col-md-8 text-center testimony">
                    <img src="../principal/images/imagen2.jpeg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                    <h3 class="mb-4">Brigada de Emergencia</h3>
                    <blockquote>
                      <p>&ldquo; La Brigada de Emergencia es una organización compuesta por un conjunto de
                        personas motivadas, capacitadas y entrenadas, que en razón de su
                        permanencia y nivel de responsabilidad asumen la ejecución de procedimientos
                        operativos necesarios para prevenir o controlar las emergencias.
                         &rdquo;</p>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
        
            <div class="site-section pb-0">
        
              <div class="future-blobs">
                <div class="blob_2">
                  <img src="../principal/images/blob_2.svg" alt="Image">
                </div>
                <div class="blob_1">
                  <img src="../principal/images/blob_1.svg" alt="Image">
                </div>
              </div>
              <div class="container">
                <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
                  <div class="col-lg-7 text-center">
                    <h2 class="section-title">Amenazas</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 ml-auto align-self-start"  data-aos="fade-up" data-aos-delay="100">
        
                    <div class="p-4 rounded bg-white why-choose-us-box">
        
                      <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                        <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                        <div><h3 class="m-0">Amenazas de tipo tecnológico</h3></div>
                      </div>
        
                      <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                        <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                        <div><h3 class="m-0">Amenazas de tipo Social</h3></div>
                      </div>
        
                      <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                        <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                        <div><h3 class="m-0">Amenazas de tipo natural</h3></div>
                      </div>
        
                      <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                        <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                        <div><h3 class="m-0">Amenazas de Tipo Ambiental
                        </h3></div>
                      </div>
        
                     <!-- <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                        <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                        <div><h3 class="m-0">Best Online Teaching Assistant Courses</h3></div>
                      </div>
        
                      <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                        <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                        <div><h3 class="m-0">Best Teachers</h3></div>
                      </div>-->
        
                    </div>
        
        
                  </div>
                  <div class="col-lg-7 align-self-end"  data-aos="fade-left" data-aos-delay="200">
                    <img src="../principal/images/imagen2.png" alt="Image" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
        
            
        
        
        
            <div class="site-section bg-light" id="contact-section">
              <div class="container">
        
                <div class="row justify-content-center">
                  <div class="col-md-7">
        
        
                    
                    <h2 class="section-title mb-3">Mensaje</h2>
                    <p class="mb-5"></p>
                  
                    <form method="post" data-aos="fade">
                      <div class="form-group row">
                        <div class="col-md-6 mb-3 mb-lg-0">
                          <input type="text" class="form-control" placeholder="Digite sus nombres">
                        </div>
                        <div class="col-md-6">
                          <input type="text" class="form-control" placeholder="Digite sus apellidos">
                        </div>
                      </div>
        
                      <div class="form-group row">
                        <div class="col-md-12">
                          <input type="text" class="form-control" placeholder="Asunto">
                        </div>
                      </div>
        
                      <div class="form-group row">
                        <div class="col-md-12">
                          <input type="email" class="form-control" placeholder="Correo Electrónico">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-12">
                          <textarea class="form-control" id="" cols="30" rows="10" placeholder="Descripción"></textarea>
                        </div>
                      </div>
        
                      <div class="form-group row">
                        <div class="col-md-6">
                          
                          <input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Enviar Mensaje">
                        </div>
                      </div>
        
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
             
            <footer class="footer-section bg-white">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h3>About OneSchool</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro consectetur ut hic ipsum et veritatis corrupti. Itaque eius soluta optio dolorum temporibus in, atque, quos fugit sunt sit quaerat dicta.</p>
                  </div>
        
                  <div class="col-md-3 ml-auto">
                    <h3>Links</h3>
                    <ul class="list-unstyled footer-links">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Courses</a></li>
                      <li><a href="#">Programs</a></li>
                      <li><a href="#">Teachers</a></li>
                    </ul>
                  </div>
        
                  <div class="col-md-4">
                    <h3>Subscribe</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto architecto? Numquam, natus?</p>
                    <form action="#" class="footer-subscribe">
                      <div class="d-flex mb-5">
                        <input type="text" class="form-control rounded-0" placeholder="Email">
                        <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
                      </div>
                    </form>
                  </div>
        
                </div>
        
                <div class="row pt-5 mt-5 text-center">
                  <div class="col-md-12">
                    <div class="border-top pt-5">
                    <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
                    </div>
                  </div>
                  
                </div>
              </div>
            </footer>
        
          
            
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



 