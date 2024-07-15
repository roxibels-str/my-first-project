<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Student System') }}</title>


        {{-- <my portfolio theme> --}}
            <head>
                <meta charset="utf-8">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">

                <title>My Portfolio</title>

                   <!-- Fonts -->


                 <!-- Favicons -->
                <link href="myporfolio/img/favicon.png" rel="icon">
                <link href="myporfolio/img/apple-touch-icon.png" rel="apple-touch-icon">

                <!-- Fonts -->
                <link href="https://fonts.googleapis.com" rel="preconnect">
                <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

                <!-- Vendor CSS Files -->
                <link href="myporfolio/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                <link href="myporfolio/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
                <link href="myporfolio/vendor/aos/aos.css" rel="stylesheet">
                <link href="myporfolio/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
                <link href="myporfolio/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

                <!-- Main CSS File -->
                <link href="myporfolio/css/main.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            .php-email-form input.invalid{box-shadow: 0 0 3px #d92800 !important; border: 1px solid #d92800 !important;}
            .img-fluid{margin-top: 50px;}

        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl position-relative d-flex align-items-center">

              <a href="https://ehmarie.42web.io/" class="logo d-flex align-items-center me-auto">
                <img src="myporfolio/img/this.png" alt="logo">
              </a>

              <nav id="navmenu" class="navmenu">
                <ul>
                  <li><a href="/" class="active">Home<br></a></li>

                 <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

                <li>
                @if (Route::has('login'))
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="btn-getstarted flex-md-shrink-0">
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="btn-getstarted flex-md-shrink-0">
                            Log in
                        </a>
                        <li>

                                @if (Route::has('register'))
                                <li>
                                    <a
                                        href="{{ route('register') }}"
                                        class="btn-getstarted flex-md-shrink-0">
                                        Register
                                    </a>
                                @endif
                            @endauth
                            <li>
                        </ul>
                    </nav>
                    @endif

            </div>
         </header>

                    <main class="main">

                            <!-- Hero Section -->
            <section id="hero" class="hero section">

                <div class="container">
                  <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                      <h1 data-aos="fade-up">Student System</h1>
                      <p data-aos="fade-up" data-aos-delay="100">
                        <strong>Laravel Project</strong><br>
                        <small>
                            • Node.js<br>
                            • Used Breeze Blade<br>
                            • Used Bootstrap
                        </small>
                      </p>
                      <em>Login/register first to access the system.</em>

                      <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                        <!-- <a href="#about" class="">Get Started <i class="bi bi-arrow-right"></i></a> -->
                        {{-- <a href="myporfolio/files/Rosemarie-Requina-Resume.pdf" target="_blank" rel="noopener noreferrer" class="btn-get-started glightbox d-flex  ms-0 ms-md-0 mt-0 mt-md-0"><span> </span><i class="bi bi-download" width="16" height="16" fill="currentColor"></i></a> --}}
                      </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                      <img src="myporfolio/img/portfolio/Project-1.png" class="img-fluid animated" alt="">
                    </div>
                  </div>
                </div>

              </section><!-- /Hero Section -->




                    </main>

                    <footer id="footer" class="footer">
                        <div class="container copyright text-center mt-4">
                          <p><span>Copyright © 2024</span> <strong class="px-1 sitename">FlexStart</strong> <span>All Rights Reserved</span></p>
                          <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you've purchased the pro version. -->

                            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                            Designed by <a href="https://bootstrapmade.com/"><strong>BootstrapMade</strong></a><br>
                            <a href="https://bootstrapmade.com/license/">Licensing Information</a>
                          </div>
                        </div>

                    </footer>
                </div>
            </div>
        </div>
    </body>

       <!-- Scroll Top -->
       <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

       <!-- Vendor JS Files -->
       <script src="myporfolio/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
       <script src="myporfolio/vendor/php-email-form/validate.js"></script>
       <script src="myporfolio/vendor/aos/aos.js"></script>
       <script src="myporfolio/vendor/glightbox/js/glightbox.min.js"></script>
       <script src="myporfolio/vendor/purecounter/purecounter_vanilla.js"></script>
       <script src="myporfolio/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
       <script src="myporfolio/vendor/isotope-layout/isotope.pkgd.min.js"></script>
       <script src="myporfolio/vendor/swiper/swiper-bundle.min.js"></script>

       <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script>
         // Require form fields
         if(document.addEventListener){
         document.addEventListener('invalid', function(e){
           e.target.className += ' invalid';
         }, true);
       }
       $(".php-email-form input").on('input', function() {
       $(".php-email-form input").removeClass('invalid').addClass('error');
       });
     </script>

       <!-- Main JS File -->
       <script src="myporfolio/js/main.js"></script>
</html>
