@extends('layouts/starter')

{{-- Page title --}}
@section('title')
Home
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
@stop

{{-- breadcrumb --}}
@section('top')

@stop
<style>
.footer-main .block ul.social-icon li a {
  padding-top: 10px;
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
p{
	font-weight: 400 !important;
	color: #000 !important;
	font-size: 14px !important;
}
h1{
	font-weight: 36px !important;
}
</style>

{{-- Page content --}}
@section('content')
  <div class="section banner-full">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 justify-content-xs-center">
				<div class="image">
					<img class="img-fluid" src="{{asset('images/feature/home.svg')}}" alt="Registration image">
				</div>
			</div>
			<div class="col-lg-6 align-self-center">
				<div class="block">
					<h1 style="font-weight: 800;"><b>Online Application<br><span class="text-warning"> Portal</span> </b></h1>
					<p>
						The Online admission processing platform.
                        <br>You can now apply to all schools from this Portal
						<br>It is Fast, <span class="text-primary">Easy</span> and Efficient.
					</p>
					<ul class="list-inline app-badge">
						<li class="list-inline-item">
							<a href="{{route('login')}}" class="form-wizard-next-btn"><b>Log In</b></a>
						</li>
					</ul>
					<div class="support">
						<p>Don't have a StudPort Account? <a href="{{route('register')}}" class="text-danger"><b>Sign Up</b></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
