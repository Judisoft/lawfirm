@extends('layouts/starter')

{{-- Page title --}}
@section('title')
Home
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
@stop
{{-- breadcrumb --}}
@section('top')

@stop

<style>
h3 {
    font-weight: 400 !important;
	font-size: 36px !important;
}
li {
    font-weight: 500;
}
p{
	color: #000 !important;
	font-weight: 400;
	padding: 10px;
}
.scroll-top-to {
   padding-top: 10px;
}

.title a:hover{
	text-decoration: underline;
}
.bg-side-bar{
	color: #5983EC;
}
.policy-item a, p{
	font-weight: 600;
}
nav > ul >li a{
	font-family: "Open-Sans", sans-serif;
    font-size: 20px;
}

</style>
{{-- Page content --}}
@section('content')
<!--================================
=            Page Title            =
=================================-->
<section class="video-promo section bg-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content-block">
					<!-- Heading -->
					<h1 class="text-white" style="font-weight: 800;">Apply to your Dream School</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====================================
=            List of Institutions          =
=====================================-->
<section class="privacy section mt-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<nav class="privacy-nav bg-side-bar">
					<ul>
						<li><a class="nav-link scrollTo" href="#userLicense" class="scrollTo">User License</a></li>
						<li><a class="nav-link scrollTo" href="#disclaimer" class="scrollTo">Disclaimer</a></li>
						<li><a class="nav-link scrollTo" href="#limitations" class="scrollTo">Limitations</a></li>
						<li><a class="nav-link scrollTo" href="#governigLaw" class="scrollTo">Governing Law</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-9">
				<div class="card card-body block bg-light">
					<!-- User License -->
					<div id="userLicense" class="policy-item">
						<div class="title">
							<h3 class="text-dark"><b>INSTITUTIONS</h3>
                            <div>
                                @foreach($institutions as $institution)
                                	<p><span class="ti-arrow-circle-right pr-3"></span>
									<a href="/admissions/institution_details/{{$institution->id}}">{{$institution->institution_name}} </a></p>
                                @endforeach
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of List of Institutions  ====-->
  
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
