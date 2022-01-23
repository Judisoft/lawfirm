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
    font-weight: 600 !important;
    color: var(--gray);
}
li {
    font-weight: 700;
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

.choice-btn:hover{
background-color: #85929E;
color: #fff;
padding: 100px;
cursor: grab;
  }
  .btn{
      font-weight: 700 !important;
      font-size: 16px !important;
      color: #000;
      height: 60px;
      background-color: var(--light) !important;
      border-radius: 3px;
  }
  .btn:hover{
      background-color: #CCD1D1 !important;
  }
  .fancy-holder{
      height: 100px !important;
  }
  
</style>
{{-- Page content --}}
@section('content')
<!--================================
=            Page Title            =
=================================-->
<section class="section page-title bg-5"style="overflow-x: hidden;">
	<div class="container" >
		<div class="row">
        <div class="col-md-6 col-lg-6 col-12 ">
            <div class="d-flex flex-column mt-3">
                <div class="p-2">
                    <img class="image1" src="{{asset('images/feature/home.svg')}}" alt="Registration image">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 pl-4">
            <div class="d-flex flex-column mt-3">
                <div class="fancy-holder p-2">
                    <a href="#"><button type="button" class="btn btn-secondary btn-lg btn-block  text-dark">START A NEW APPLICATION</button></a>
                </div>
                <div class="fancy-holder p-2">
                    <a href="{{route('my-account')}}"><button type="button" class="btn btn-secondary btn-lg btn-block text-dark">CONTINUE AN EXISTING APPLICATION</button></a>
                </div>
            </div>
        </div>
    </div>
	</div>
</section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
