<!DOCTYPE html>
<html lang="en">

<head>

  <!--======== Meta Seo Start =======-->
  <meta name="description"
    content="DC- Perfect High-quality, Clipping Path, and Image Editing services, Background Change, Photo Retouching, Ghost Manipulation, Services in World. Get a quote for your next project.">
  <meta name="author" content="Designer Country">
  <meta name="distribution" content="Global">
  <meta name="theme-color" content="#009b97">
  <meta name="theme-color" content="#007571">
  <meta name="rating" content="General">
  <meta name="keywords" content="Clipping Path & Photo Cut out">
  <link rel="canonical" href="http://www.designercountry.com/">
  <!--** Twitter meta **-->
  <meta name="twitter:site" content="@designercounty">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title"
    content=" Clipping Path Service Provider | Remove Image Background | Digital Retouching | Image masking | Image &amp; Photo Editing Designer Country">
  <meta name="twitter:description"
    content="DC- Perfect High-quality, Clipping Path, and Image Editing services, Background Change, Photo Retouching, Ghost Manipulation, Services in World. Get a quote for your next project." />
  <!--**  Open Graph Meta **-->
  <meta property="og:locale" content="en-US">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Designer Country">
  <meta property="og:title" content="Designer Country Service Provider | Image &amp; Photo Editing">
  <meta property="og:url" content="http://www.designercountry.com">
  <meta property="og:description"
    content="DC- Perfect High-quality, professional clipping paths and image-editing services, Image masking, color-correction,Photo Retouching, Removal Background, Shadow Service. Get a quote for your next project.">
  <!--======== Meta Seo End =======-->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <!--==** Logo **==-->
  <link rel="icon" href="{{asset('assets/frontEnd/images/home_page/Dc_Logo.png')}}" type="image/x-icon">
  <!--==** Bootstrap CDN Link **==-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!--==** Ajax CDN Link **==-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!--==** Jquery Link **==-->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <!--==** Font Awesome Link **==-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


  <!--==** Vendors  Link **==-->
  <!-- <link href="{{asset('assets/frontEnd/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" /> -->
  <!-- <link href="{{asset('assets/frontEnd/vendor/icofont/icofont.min.css')}}" rel="stylesheet" /> -->
  <link href="{{asset('assets/frontEnd/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/frontEnd/vendor/animate.css/animate.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/frontEnd/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/frontEnd/vendor/venobox/venobox.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/frontEnd/vendor/aos/aos.css')}}" rel="stylesheet" />
  <!-- Carousel -->
  <link rel="stylesheet" href="{{asset('assets/frontEnd/owl-carousel/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/frontEnd/owl-carousel/css/owl.theme.default.min.css')}}">


  <!--==** Css Link **==-->
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet" href="{{asset('assets/frontEnd/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/frontEnd/css/responsive.css')}}">

  <!--==** Yield Css **==-->
  @yield ('css')
  <!--==** Yield Css **==-->
  <style>

  </style>
</head>

<body>
  <!--==** Header Section Start **==-->
  <section id="header">
    <div class="px-md-5 px-sm-3 px-xs-3">
      <nav class="menu navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid mobile-navbar">
          <a class="navbar-brand" href="{{route('index')}}">
            <img class="logo horizontal-logo" src="{{asset('assets/frontEnd/images/home_page/logo.png')}}"
              alt="designer_country_logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mobile-pl">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown1" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICES <i
                    class="fas fa-caret-down"></i></a>
                <div id="dasktop" class="dropdown-menu" aria-labelledby="navbarDropdown1">
                  <a class="dropdown-item py-md-2 py-sm-2 py-xs-0 mobile mobile-service"
                    href="{{route('clipping.path')}}">Clipping Path</a>
                  <a class="dropdown-item py-md-2 py-sm-2 py-xs-0 mobile mobile-service"
                    href="{{route('background.removal')}}">Background
                    Removal</a>
                  <a class="dropdown-item py-md-2 py-sm-2 py-xs-0 mobile mobile-service"
                    href="{{route('image.masking')}}">Image Masking</a>
                  <a class="dropdown-item py-md-2 py-sm-2 py-xs-0 mobile mobile-service"
                    href="{{route('natural.shadow')}}">Natural Shadow</a>
                  <a class="dropdown-item py-md-2 py-sm-2 py-xs-0 mobile mobile-service"
                    href="{{route('photo.retouching')}}">Photo
                    Retouching</a>
                  <a class="dropdown-item py-md-2 py-sm-2 py-xs-0 mobile mobile-service"
                    href="{{route('ghosht.manneuquin')}}">Ghost
                    Mannequin</a>
                  <a class="dropdown-item py-md-2 py-sm-2 py-xs-0 mobile mobile-service"
                    href="{{route('product.photo.editing')}}">Product
                    Photo Editing</a>
                  <a class="dropdown-item py-md-2 py-sm-2 py-xs-0 mobile mobile-service"
                    href="{{route('color.correction')}}">Color
                    Correction</a>
                  <a class="dropdown-item py-md-2 py-sm-2 py-xs-0 mobile mobile-service"
                    href="{{route('vector.conversion')}}" style="border: none;">Vector Conversion</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{route('pricing')}}">PRICING</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{route('sample')}}">SAMPLES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{route('get.quote')}}">GETQUOTE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{route('upload')}}">UPLOAD</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{route('contact')}}">CONTACT</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown2" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCOUNT</a>
                <div class="account-section dropdown-menu" aria-labelledby="navbarDropdown2">
                  @if (auth()->user())
                  <a class="nav-link text-light" href="{{ route('myprofile') }}"
                    style="border-bottom:1px solid #009b97;">My Profile</a>
                  <a class="nav-link text-light" href="https://designercountry.wetransfer.com/" target="_blank"
                    style="border-bottom:1px solid #009b97;">My Order</a>
                  <a class="nav-link text-light" href="{{ route('logout') }}">Logout</a>
                  @else
                  <a class="nav-link text-light" href="{{route('login')}}"
                    style="border-bottom:1px solid #009b97;">Login</a>
                  <a class="nav-link text-light" href="{{ route('register') }}">Registration</a>
                  @endif
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!--==** Header Section End **==-->

  <!--==** Yield Content Start **==-->
  @yield ('content')
  <!--==** Yield Content End **==-->



  <!--==** Footer Section Start **==-->
  <section id="footer">
    <div class="container pt-md-5 pt-sm-3 pt-xs-2">
      <div class="row">
        <div class="py-md-4 py-sm-4 col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
          <h5 class="text-uppercase text-light pb-col-2 pb-sm-3"><span
              style="border-bottom: 1px solid #19BEB9; padding-bottom: 8px;">Information</span></h5>
          <ul class="pt-md-4 pt-sm-2 pt-xs-2">
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('faq')}}">FAQ</a></li>
            <li><a href="{{route('sample')}}">Samples</a></li>
            <li><a href="{{route('terms.and.conditions')}}">Terms & Condition</a></li>
            <li><a href="{{route('privacy.and.policy')}}">Privacy & Policy</a></li>
            <li><a href="{{route('refund.policy')}}">Refund Policy</a></li>
            <li><a href="{{route('sitemap')}}">Sitemap</a></li>
          </ul>
        </div>
        <div class="py-md-4 py-sm-4 col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
          <h5 class="text-uppercase text-light pb-col-2 pb-sm-3"><span
              style="border-bottom: 1px solid #19BEB9; padding-bottom: 8px;">Company</span></h5>
          <ul class="pt-md-4 pt-sm-2 pt-xs-2">
            <li><a href="{{route('about.us')}}">About</a></li>
            <li><a href="{{route('pricing')}}">Pricing</a></li>
            <li><a href="{{route('payment.method')}}">Payment Method</a></li>
            <li><a href="{{route('contact')}}">Support Center</a></li>
          </ul>
        </div>
        <div class="py-md-4 py-sm-4 col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mobile-pt">
          <h5 class="text-uppercase text-light pb-col-2 pb-sm-3"><span
              style="border-bottom: 1px solid #19BEB9; padding-bottom: 8px;"> Services</span></h5>
          <ul class="pt-md-4 pt-sm-2 pt-xs-2">
            <li><a href="{{route('clipping.path')}}">Clipping Path</a></li>
            <li><a href="{{route('background.removal')}}">Background Removal</a></li>
            <li><a href="{{route('image.masking')}}">Image Masking</a></li>
            <li><a href="{{route('natural.shadow')}}">Natural Shadow</a></li>
            <li><a href="{{route('photo.retouching')}}">Photo Retouching</a></li>
            <li><a href="{{route('ghosht.manneuquin')}}">Ghost Mannequin</a></li>
            <li><a href="{{route('product.photo.editing')}}">Photo Editing</a></li>
            <li><a href="{{route('color.correction')}}">Color Correction</a></li>
            <li><a href="{{route('vector.conversion')}}">Vector Conversion</a></li>
          </ul>
        </div>
        <div class="py-md-4 py-sm-4 col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 mobile-pt">
          <h5 class="text-uppercase text-light pb-col-2 pb-sm-3"><span
              style="border-bottom: 1px solid #19BEB9; padding-bottom: 8px;">Get Started</span></h5>
          <ul class="pt-md-4 pt-sm-2 pt-xs-2">
            <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('get.quote')}}">Get quote</a></li>
            @if (auth()->user())
            <li><a href="{{route('logout')}}">Already Loged in</a></li>
            @else
            <li><a href="{{route('login')}}">Log in</a></li>
            <li><a href="{{ route('register') }}">Sig up</a></li>
            @endif
          </ul>
        </div>
      </div>
      <hr style="border-bottom: 1px solid rgb(88, 145, 175);">
    </div>
    <div class="social-media text-center py-md-5 py-sm-5 py-xs-2">
      <div class="social-link">
        <a href="https://www.facebook.com/designercountry/" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/designercounty" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.linkedin.com/company/designercountry/" target="_blank">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="https://www.instagram.com/designercountry/" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.pinterest.com/designercountry/" target="_blank">
          <i class="fab fa-pinterest"></i>
        </a>
        <a href="https://www.youtube.com/channel/UC8koMuw6KCEB4CchEtrKzlA" target="_blank">
          <i class="fab fa-youtube"></i>
        </a>
      </div>
    </div>
    <div class="copy-right pb-5">
      <p class="text-center text-light pt-3  pb-4 px-4">Designer Country is a brand of <a
          href="#" style="color: #19beb9;">Photoshopspecialist</a>. © 2020 All rights
        reserved.
      </p>
    </div>
  </section>
  <!--==** Footer Section Start **==-->


  <div id="preloader"></div>

  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
  {!! Toastr::message() !!}


  <!--==*** Java Scrip Link **==-->
  @yield ('js')
  <!--==*** Java Scrip Link **==-->



  <!--==*** Script  Link **==-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!--Owl Carousel Script-->
  <script src="{{asset('assets/frontEnd/owl-carousel/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/frontEnd/owl-carousel/js/owl.carousel.play.js')}}"></script>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/frontEnd/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/frontEnd/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/frontEnd/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/frontEnd/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/frontEnd/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/frontEnd/vendor/aos/aos.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/frontEnd/vendor/js/main.js')}}"></script>


</body>

</html>
