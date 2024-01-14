<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Jurse2025</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: HeroBiz
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Jurse2025<span></span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                    <li><a class="nav-link scrollto" href="{{route('home')}}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{route('dates')}}">Dates</a></li>
                    <li class="dropdown"><a href="participation"><span>Participation</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{route('programs')}}">PROGRAM</a></li>
                            <li><a href="{{route('guidelines')}}">GUIDELINES</a></li>
                            <li><a href="{{ route('call-for-papers')}}">CALL FOR PAPERS</a></li>
                            <li><a href="{{ route('registration')}}">REGISTRATION</a></li>
                            <li><a href="{{ route('social-events')}}">SOCIAL EVENTS</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/"><span>Présentation</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ route('keynotes')}}">KEYNOTES</a></li>
                            <li><a href="{{ route('topics')}}">TOPICS</a></li>
                            <li><a href="{{ route('specialsessions')}}">SPECIAL SESSIONS</a></li>
                            <li><a href="{{ route('technical')}}">TECHNICAL TUTORIALS</a></li>
                            <li><a href="{{ route('studentcontest')}}">STUDENT CONTEST</a></li>
                            <li><a href="{{ route('exibitors')}}">EXHIBITORS</a></li>

                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ route('commitees')}}">Committees</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('sponsors')}}">Sponsors</a></li>
                    <li class="dropdown"><a href="/"><span>Venue</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="{{ route('herakilton')}}">HERAKILTON & CRETE</a></li>
                            <li><a href="{{ route('conference')}}">CONFERENCE VENUE</a></li>
                            <li><a href="{{ route('hotel')}}">HOTELS</a></li>

                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ route('photosvideos')}}">Video & Photo</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('contact')}}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-4">
                        <div class="footer-info text-center">
                            <h3>Stay connected!</h3>
                            <div class="footer-legal" style="background: transparent;">
                                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                                    <a href="/" class="twitter"><i class="bi bi-twitter"></i></a>
                                    <a href="/" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="/" class="instagram"><i class="bi bi-instagram"></i></a>
                                    <a href="/" class="google-plus"><i class="bi bi-skype"></i></a>
                                    <a href="/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="footer-info text-center">
                            <h3>Contact person</h3>
                            <ul id="contact">
                                <li>Nektarios Chrysoulakis</li>
                                <li>zedd2@iacm.forth.gr</li>
                                <li>+30 2810-391-762</li>
                                <li>+30 6932-929-775</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="footer-info text-center">
                            <h3>Venu</h3>
                            <ul id="contact">
                                <li>Cultural Conference Center of Heraklion</li>
                                <li>N. Plastira Avenue 49, Heraklion, 71201 Greece</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        © Copyright 2024: Remote Sensing Laboratory, Foundation for Research and Technology - Hellas
                        (FORTH)
                    </div>
                </div>
            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="/" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>