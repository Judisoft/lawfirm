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


{{-- Page content --}}
@section('content')
  <div class="section banner-full">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 justify-content-xs-center">
				<div class="image" data-aos="flip-right">
					<img class="img-fluid" src="{{asset('images/feature/iphone-black.jpg')}}" alt="Iphone-Black">
				</div>
			</div>
			<div class="col-lg-8 align-self-center">
				<div class="block">
					<h1 style="font-weight: 700;"><b>Admissions Management <br><span class="text-primary"> Portal</span> </b></h1>
					<p>
						The platform that makes Admissions Easy
                        <br>You can now apply to many schools from this Portal
						<br>Fast, <span class="text-primary">Easy</span> and Efficient.
					</p>
					<ul class="list-inline app-badge">
						<li class="list-inline-item">
							<a href="{{route('register')}}">Create my account</a>
						</li>
						<li class="list-inline-item">
							<a href="{{route('login')}}" class="btn btn-primary"><b>Login</b></a>
						</li>
					</ul>
					<div class="support">
						<img class="img-fluid" src="{{asset('images/icons/supported-services.png')}}" alt="supported-services">
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
