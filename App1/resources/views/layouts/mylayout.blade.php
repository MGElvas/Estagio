<!doctype html>
<html lang="en">
<head>
    <title>Ex-alunos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">
    
    <link rel="stylesheet" href="{{asset('Jobboard/css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{asset('Jobboard/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('Jobboard/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('Jobboard/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('Jobboard/fonts/line-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('Jobboard/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Jobboard/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('Jobboard/css/quill.snow.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('Jobboard/css/style.css')}}">    
</head>
<body id="top">

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
        </div>
    </div>
        

    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->
        <!-- NAVBAR -->
        @if(session('status'))
        @else
            <header class="site-navbar mt-3">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="site-logo col-6"><a href="">Ex-Alunos</a></div>
                        <nav class="mx-auto site-navigation">
                            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                                <li><a href="/" class="nav-link active">Home</a></li>
                                <li class="has-children">
                                    <a href="job-listings">Empregos</a>
                                    <ul class="dropdown">
                                        <li><a href="job-single">Mostrar Cargos</a></li>
                                        <li><a href="post-job">Criar Cargos</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="services">Páginas</a>
                                    <ul class="dropdown">
                                        <li><a href="perfils">Perfil</a></li>
                                    </ul>
                                </li>
                                <li class="d-lg-none"><a href="post-job"><span class="mr-2">+</span>Criar Cargo</a></li>
                                <!--LOGIN / USERNAME / LOGOUT / VERIFICAÇOES -->
                                @guest
                                    <li class="">
                                        <ul>
                                            <a href="{{ route('login') }}" class="btn btn-block btn-primary btn-md">Log In</a>
                                        </ul>
                                    </li>
                                @else
                                    <li class="has-children">
                                        <a href="perfils">{{ Auth::user()->name }}</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>                                
                                @endguest
                            </ul>
                        </nav>
                        <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
                        </div>
                    </div>
                </div>
            </header>
        @endif
    </div>




        @yield('content')




        <footer class="site-footer">
            <a href="#top" class="smoothscroll scroll-top">
                <span class="icon-keyboard_arrow_up"></span>
            </a>

            <div class="container">
                <div class="row mb-5">
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Populares</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Web Developers</a></li>
                        <li><a href="#">Python</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">CSS3</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Empresa</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Sobre nós</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Suporte</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Suporte</a></li>
                        <li><a href="#">Privacidade</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Contactos</h3>
                    <div class="footer-social">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-instagram"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
                </div>

                <div class="row text-center">
                    <div class="col-12">
                    <p class="copyright"><small>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
                    </div>
                </div>
            </div>
        </footer>

    

    <!-- SCRIPTS -->
    <script src="{{asset('Jobboard/js/jquery.min.js')}}"></script>
    <script src="{{asset('Jobboard/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Jobboard/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('Jobboard/js/stickyfill.min.js')}}"></script>
    <script src="{{asset('Jobboard/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('Jobboard/js/jquery.easing.1.3.js')}}"></script>

    <script src="{{asset('Jobboard/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('Jobboard/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('Jobboard/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('Jobboard/js/bootstrap-select.min.js')}}"></script>

    <script src="{{asset('Jobboard/js/custom.js')}}"></script>
</body>
</html>