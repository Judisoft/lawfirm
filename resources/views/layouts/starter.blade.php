<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            StudPort
        @show
    </title>
    <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="{{asset('plugins1/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/slick/slick-theme.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/fancybox/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins1/aos/aos.css')}}">

  <!-- CUSTOM CSS -->
  <link href="{{asset('plugins1/css/style.css')}}" rel="stylesheet">
    
    @yield('header_styles')
<!--end of page level css-->
</head>
<style>
.btn-sell{
    color: #fff;
    background-color: var(--success);
    padding: 0;
    border-radius:1.5em;
    margin-top: 3px;
}
.footer-main .block ul.social-icon li a {
  padding-top: 10px;
}

</style>
<body class="body-wrapper bg-light" data-spy="scroll" data-target=".privacy-nav">
<nav class="navbar main-nav fixed-top navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0 bg-light border-bottom" style="overflow-x: hidden;">
  <div class="container">
    <a class="navbar-brand" href="index.html"><img src="{{asset('images/recruit.png')}}" style="height: 40px; width: 40px;" alt="logo"><span class="h5 text-dark text-capitalize"><b>Admissions Portal<b></span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
       <li class="nav-item {!! (Request::is('/admissions/institution_details/') ? 'active' : '') !!}">
          <a class="nav-link" href="/admissions/institutions/">Institutions</a>
        </li>
        @if(Sentinel::check())
          <li class="nav-item">
            <a class="nav-link " href="{{route('my-account')}}">Apply Now</a>
          </li>
        @endif
        <li class="nav-item">
          <a class="nav-link {!! (Request::is('about_us') ? 'active' : '') !!}" href="{{route('about')}}">Admissions</a>
        </li>
       
        <li class="nav-item {!! (Request::is('contact') ? 'active' : '') !!}">
          <a class="nav-link" href="{{route('contact')}}">Need help?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-primary text-light" href="{{route('login')}}"><i class="ti-shopping-cart px-2"></i><b>Buy Textbooks</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>                    
@yield('top')
@yield('content')
<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
          <div class="block">
            <a href="index.html" class="text-light"><b>Admissions Portal</b></a>
            <!-- Social Site Icons -->
            <ul class="social-icon list-inline mt-2">
              <li class="list-inline-item">
                <a href="#"><i class="ti-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="ti-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="ti-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Product</h6>
            <!-- links -->
            <ul>
              <li><a href="team.html">Teams</a></li>
              <li><a href="blog.html">Blogs</a></li>
              <li><a href="FAQ.html">FAQs</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Resources</h6>
            <!-- links -->
            <ul>
              <li><a href="sign-up.html">Singup</a></li>
              <li><a href="sign-in.html">Login</a></li>
              <li><a href="blog.html">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="career.html">Career</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="team.html">Investor</a></li>
              <li><a href="privacy.html">Terms</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center bg-dark py-4">
    <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href="{{ route('home') }}" class="text-light">FalconsTech</a></small class="text-secondary">
  </div>
</footer>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="{{asset('plugins1/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('plugins1/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('plugins1/slick/slick.min.js')}}"></script>
  <script src="{{asset('plugins1/fancybox/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('plugins1/syotimer/jquery.syotimer.min.js')}}"></script>
  <script src="{{asset('plugins1/aos/aos.js')}}"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="{{asset('plugins1/google-map/gmap.js')}}"></script>
  <script src="{{asset('plugins1/js/script.js')}}"></script>
</body>

</html>
