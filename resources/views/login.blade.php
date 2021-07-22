<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>StudPort - Login</title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/login.css') }}">
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    </head>
<body oncontextmenu='return false' class='snippet-body'>
    <div class="container bg-light">
    <div class="row">
        <div class="col-md-6 col-12">
            <div id="over">
                <div class="green-label text-uppercase">now available</div>
                <div id="payment">
                    <div class="text-white pt-2"><h5>Studort Bookshop</h5></div>
                    <div class="text-justify text-lighter">Buy your textbooks online at a discount</div>
                </div>
                <div id="rupee"> <span>- 20%</span> </div>
            </div>
            <div class="text-justify py-3"> Place an order for your textbooks and have them supplied to you at cheap and affordaboe prices</div>
            <div class="d-flex align-items-center pb-4"> <a href="#">Learn More <span class="fas fa-arrow-right text-primary"></span> </a> </div>
            <div class="text-justify pb-3">Don't have an account yet? Sign Up for free</div>
            <div class="d-flex align-items-center pb-4"> <a href="{{route('register')}}">Sign Up<span class="fas fa-arrow-right text-primary"></span> </a> </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="wrapper bordered bg-md-white d-flex flex-column align-items-between">
                <div class="form">
                    <div class="h4 font-weight-bold text-center mb-4">Login StudPort</div>
                    <div class="btn d-flex align-items-center"> <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" alt="">
                        <div class="px-5">Login with Google</div>
                    </div>
                    <div class="border-top my-4"></div>
                    <form action="{{ route('login') }}" class="omb_loginForm" autocomplete="off" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group"> 
                        <label for="email">Your email</label> 
                        <input type="email" class="form-control" name="email" value="{!! old('email') !!}">
                        <small>{{ $errors->first('email', ':message') }}</small>
                    </div>
                    <div class="form-group"> 
                        <label for="password">Password </label> 
                        <input type="password" class="form-control" name="password">
                        <small>{{ $errors->first('password', ':message') }}</small> 
                    </div>
                    <div class="checkbox mb-2">
                        <label for="remember-me">
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block rounded-0" value="Log in">
                    </div>
                    <div class="bg-transparent">
                        <a href="{{ route('forgot-password') }}">Forgot Password?</a>
                    </div>
                </div>
                <div class="text-center text-muted mt-auto"> Need help? <span><a href="{{route('contact')}}">Contact Us</a></span> </div>
            </div>
        </div>
    </div>
</div>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'></script>
</body>
</html>