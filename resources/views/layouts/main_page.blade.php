<!DOCTYPE html>
<html lang="en">
    <head>
      
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
        <!-- Fonts CSS-->
        <link rel="stylesheet" href="{{asset('css/heading.css')}}">
        <link rel="stylesheet" href="{{asset('css/body.css')}}">

        @yield('css')
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" ><img src="assets/img/portfolio/LOGO3.png"></a>
            
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('/')}}">HOME</a>
                        </li> 
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">ABOUT</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">CONTACT</a>
                        </li>
                        <li class="dropdown nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                        href="#hospitalCategories" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">HOSPITAL CATEGORIES<span class="fa fa-angle-down mx-0 mx-lg-1"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('level-1')}}">Level 1 Hospitals</a></li>
                                <li><a href="{{url('level-2')}}">Level 2 Hospitals</a></li>
                                <li><a href="{{url('level-3')}}">Level 3 Hospitals</a></li>
                            </ul>
                        </li>
         
                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="{{url('/search')}}" method="POST">
                            @csrf
                            <input type="search" class="form-control form-control-dark" name="keyword" placeholder="Search..." aria-label="Search" required>
                        </form>
                        
                    </ul>
</div>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">AROUND THE WEB</h4><a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/StartBootstrap"><i class="fab fa-fw fa-facebook-f"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <section class="copyright py-4 text-center text-white">
            <div class="container"><small class="pre-wrap">Copyright © Your Website 2020</small></div>
        </section>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>

        @yield('js')
    </body>
</html>
