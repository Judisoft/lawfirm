<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>StudPort - Sign In</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/login.css') }}">
    <link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href="{{asset('plugins1/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins1/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
</head>
<style>
h5{
    font-weight: 600;
}
p{
    font-weight: 200 !important;
    font-size: 14px;
}
.img-fluid{
    width: 50px;
    height: 50px;
}
.image1{
    width: 300px;
    height: 300px;
}
.form-wizard-next-btn{
    background-color:#A3060F;
    border-color: #A3060F !important;
    color: #fff;
	font-size: 14px;
    display: inline-block;
    width: 300px;
    padding: 10px;
	text-transform: uppercase;
    border-radius: 2px;
    text-align: center;
  }
.form-wizard-next-btn:hover{
	color: #fff;
	background-color: #A3060F;
	border: #A3060F;
	animation:  .3s ease-in;
}
label{
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
    color: #000 !important;
}
p{
    font-family: "Open Sans", sans-serif;
    font-size: 14px;
    color: #000;
    font-weight: 400;
 }
 input{
     height: 50px !important;
     border: 1px solid var(--dark) !important;
     border-radius: 10px !important;
 }
</style>
<body oncontextmenu='return false' class='snippet-body bg-light'>
<nav class="navbar main-nav fixed-top navbar-expand-lg p-3 bg-light" style="overflow-x: hidden;">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/recruit.png')}}" style="height: 35px; width: 35px;" alt="logo"><span class="h5  text-dark text-capitalize px-2"><b class="text-dark" style="padding-top: 5px;">StudPort | </b> <b class="text-warning">Sign In</b></span></a>    
  </div>
</nav> 
    <div class="container bg-light">
    <div class="row">
        <div class="col-md-6 col-12 ">
            <div class="d-flex flex-column mt-3">
                <div class="d-flex flex-row mb-2">
                    <div class="p-2">
                        <img class="img-fluid" src="{{asset('images/feature/f1.svg')}}" />
                    </div>
                    <div class="p-2">
                        <h5>Be Connected!</h5>
                        <p>Connect with Teachers, students, and institutions across and beyond your local campus.</p>
                    </div>
                </div>
                <div class="d-flex flex-row mb-2">
                    <div class="p-2">
                        <img class="img-fluid" src="{{asset('images/feature/f2.svg')}}" />
                    </div>
                    <div class="p-2">
                        <h5>Insightful Discussions</h5>
                        <p>Ask questions, share ideas, projects & engage in interesting conversations and open discourses.</p>
                    </div>
                </div>
                <div class="d-flex flex-row mb-2">
                    <div class="p-2">
                        <img class="img-fluid" src="{{asset('images/feature/f4.svg')}}" />
                    </div>
                    <div class="p-2">
                        <h5>Explore Opportunities</h5>
                        <p>Find one that is right for you.</p>
                    </div>
                </div>
                <div class="p-2">
                    <img class="image1" src="{{asset('images/feature/home.svg')}}" alt="Registration image">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 pl-4">
            <form action="{{ route('login') }}" class="omb_loginForm" autocomplete="off" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="d-flex flex-column">
                <div class="p-2">
                    <label for="email">Email</label> 
                    <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{!! old('email') !!}">
                    <small>{{ $errors->first('email', 'Enter email') }}</small>
                </div>
                <div class="p-2">
                    <label for="password">Password </label> 
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                    <small>{{ $errors->first('password', 'Enter password') }}</small> 
                </div>
                <div class="d-flex flex-row">
                    <div class="col-lg-6 p-2">
                        <input type="submit" class="form-wizard-next-btn rounded" value="Login to StudPort">
                    </div>
                </div>
                <div class="support p-1 pl-2">
                    <p>Don't have a StudPort Account? <a href="{{route('register')}}" class="text-danger"><b>Sign Up</b></a></p>
                </div>
                        <p class="p-2"><a href="{{route('forgot-password')}}" class="text-danger">Forgot password?</a></p>
            </div>
        </form>
        </div>
    </div>
    <small class="text-dark"><b>Copyright &copy; <?php echo date('Y') ?> All rights reserved</b></small>
</div>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'></script>
</body>
</html>