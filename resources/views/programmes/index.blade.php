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
h1{
    font-size: 60px !important;
    font-weight: 400;
}
h2{
    font-size: 60px !important;
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
.bg-programs{
	opacity: 0.3;
}
.program-list, nav, ul>li{
    font-family: "Open-Sans", sans-serif;
    font-size: 20px;
    font-weight:400 !important;
    list-style: none;
    color: #4567C8;
}
.program{
    background-color: #fff;
    padding: 10px;
}
.program:hover{
    background-color:#054871 ;
    color: #fff;
    cursor: grab;
    animation: .3 ease-in;
}
</style>
{{-- Page content --}}
@section('content')

<!--================================
=            Page Title            =
=================================-->
<section class="video-promo section bg-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content-block">
					<!-- Heading -->
					<h1 style="font-weight: 800; color:#fff;">Find a Program</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====================================
=            List of programs          =
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
				<div class="card card-body block bg-light rounded-0">
					<!-- User License -->
					<div id="userLicense" class="policy-item">
						<div class="title">
                            <div class="program-list">
                                @foreach ($programs as $program)
                                    <ul>
                                        <li><a class="nav-link" href="#">{{$program->name}}</a></li>
                                    </ul>
                                @endforeach
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
