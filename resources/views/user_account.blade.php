<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>StudPort Admissions Portal</title>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<!-- PLUGINS CSS STYLE -->
<link rel="stylesheet" href="{{asset('plugins1/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/slick/slick.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/slick/slick-theme.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/fancybox/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/aos/aos.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/user_account/style.css')}}">

<!-- CUSTOM CSS -->
<link href="{{asset('plugins1/css/style.css')}}" rel="stylesheet">
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</head>
<body oncontextmenu='return false' class='snippet-body'>
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
            <a class="nav-link " href="{{route('my-account')}}">Apply </a>
          </li>
        @endif
        <li class="nav-item">
          <a class="nav-link {!! (Request::is('about_us') ? 'active' : '') !!}" href="{{route('about')}}">Admissions</a>
        </li>
       
        <li class="nav-item {!! (Request::is('contact') ? 'active' : '') !!}">
          <a class="nav-link" href="{{route('contact')}}">Need help?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-sell text-light" href="{{route('login')}}"><i class="ti-shopping-cart px-2"></i><b>Buy Textbooks</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-9 col-md-10">
            <div class="card b-0 rounded-0 show">
                <div class="row justify-content-between mx-auto step-container">
                    <div class="col-md-3 col-4 step-box active">
                        <h6 class="step-title-0"> <span class="ti-agenda"></span> <span class="break-line"></span> <span class="step-title">Programme Choice</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-user"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-folder"></span> <span class="break-line"></span> <span class="step-title">Doucuments Upload</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-wallet"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                <div class="p-3 justify-content-center text-center">
                    <h4 class="heading">Select Institution</h4>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="customCheck1">
                                    <option value="">select institution</option>
                                    @foreach ($institutions as $institution)
                                        <option value="{{$institution->institution_name}}">{{$institution->institution_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div> 
                    <button name="next" id="next1" class="btn btn-success rounded-0 mb-5 next">Next <span class="ti-arrow-right"></span></button>
                </div>
            </div>
            <div class="card b-0 rounded-0">
                <div class="row justify-content-between mx-auto step-container">
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="ti-check"></span> <span class="break-line"></span> <span class="step-title">Programme Choice</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box active">
                        <h6 class="step-title-0"> <span class="ti-user"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-folder"></span> <span class="break-line"></span> <span class="step-title">Doucuments Upload</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-wallet"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                <div class="p-3 justify-content-center text-center">
                    <h4 class="heading">Feedback</h4>
                    <div class="row justify-content-center mb-4">
                        <div class="col-xl-7 col-lg-8 col-10 list text-left"> <label class="text-danger mb-3">* Required</label>
                            <div class="form-group"> <label class="form-control-label">Subject * :</label> <input type="text" id="sub" name="subject" placeholder="Subject" class="form-control" onblur="validate(1)"> </div>
                            <div class="form-group"> <label class="form-control-label">Message * :</label> <textarea type="textarea" id="msg" name="message" placeholder="Message" class="form-control" onblur="validate(2)"></textarea> </div>
                        </div>
                    </div> 
                    <div class="d-flex justify-content-between">
                        <div class="p-1"><button class="btn btn-success rounded-0 mb-5 prev"><span class="ti-arrow-left"></span>Back</button></div>
                        <div class="p-1"><button id="next2" class="btn btn-success rounded-0 mb-5 next" onclick="validate(0)">Next <span class="ti-arrow-right"></span></button></div>
                    </div>
                </div>
            </div>
            <div class="card b-0 rounded-0">
                <div class="row justify-content-center mx-auto step-container">
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="ti-check"></span> <span class="break-line"></span> <span class="step-title">Programme Choice</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="ti-check"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box active">
                        <h6 class="step-title-0"> <span class="ti-folder"></span> <span class="break-line"></span> <span class="step-title">Doucuments Upload</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-wallet"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                <div class="p-3 justify-content-center text-center">
                    <h4 class="heading">Confirmation</h4>
                    <div class="row d-flex justify-content-center">
                        <div class="mb-4">
                            <h6 class="confirm">Verify all entered details and press confirm</h6>
                        </div>
                    </div> 
                    <div class="d-flex justify-content-between">
                        <div class="p-1"><button class="btn btn-success rounded-0 mb-5 prev"><span class="ti-arrow-left"></span>Back</button></div>
                        <div class="p-1"><button id="next3" class="btn btn-success rounded-0 mb-5 next">Next <span class="ti-arrow-right"></span></button></div>
                    </div>
                </div>
            </div>
            <div class="card b-0 rounded-0">
                <div class="row justify-content-center mx-auto step-container">
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="ti-check"></span> <span class="break-line"></span> <span class="step-title">Programme Choice</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="ti-check"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="ti-check"></span> <span class="break-line"></span> <span class="step-title">Doucuments Upload</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box active">
                        <h6 class="step-title-0"> <span class="ti-circle"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                <div class="p-3 justify-content-center text-center">
                    <h4 class="heading">Confirmation</h4>
                    <div class="row d-flex justify-content-center">
                        <div class="mb-4">
                            <h6 class="confirm">Verify all entered details and press confirm</h6>
                        </div>
                    </div> 
                    <div class="d-flex justify-content-between">
                        <div class="p-1"><button class="btn btn-success rounded-0 mb-5 prev"><span class="ti-arrow-left"></span>Back</button></div>
                        <div class="p-1"><button id="next4" class="btn btn-success rounded-0 mb-5 next">Next <span class="ti-arrow-right"></span></button></div>
                    </div>
                </div>
            </div>
            <div class="card b-0 rounded-0">
                <div class="row justify-content-center mx-auto step-container">
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check"></span> <span class="break-line"></span> <span class="step-title">Programme Choice</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check"></span> <span class="break-line"></span> <span class="step-title">Doucuments Upload</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box active">
                        <h6 class="step-title-0"> <span class="fa fa-check"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                <div class="p-3 justify-content-center text-center">
                    <h3 class="heading">Thank You for your Feedback!</h3>
                    <div class="row justify-content-center">
                        <div class=""> <img src="https://i.imgur.com/4Y9xMCF.gif" class="fit-image mb-5"> </div>
                    </div><button class="btn btn-success rounded-0 mb-5 prev"><span class="ti-arrow-left"></span>Back</button> <button id="next3" class="btn btn-success rounded-0 mb-5 next"><a href="{{route('my-account')}}">Finish</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script src="{{ asset('vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>

</body>
</html>