@extends('layouts/starter')

{{-- Page title --}}
@section('title')
Home
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop
{{-- breadcrumb --}}
@section('top')

@stop

<style>
h3 {
    font-weight: 500 !important;
}
li {
    font-weight: 500;
}
li{
    list-style: none;
    
}
.scroll-top-to {
   padding-top: 10px;
    
}
</style>
{{-- Page content --}}
@section('content')

<!--====================================
=            List of Institutions          =
=====================================-->
<section class="privacy section mt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<nav class="privacy-nav bg-light br-5">
					<ul>
						<li><a class="nav-link scrollTo" href="#userLicense" class="scrollTo">User License</a></li>
						<li><a class="nav-link scrollTo" href="#disclaimer" class="scrollTo">Disclaimer</a></li>
						<li><a class="nav-link scrollTo" href="#limitations" class="scrollTo">Limitations</a></li>
						<li><a class="nav-link scrollTo" href="#governigLaw" class="scrollTo">Governing Law</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-9">
				<div class="block bg-light" style="box-shadow: none;">
					<!-- User License -->
					<div id="userLicense" class="policy-item">
						<div class="title">
							<h2 class="border-bottom">Institutions</h2>
                            <ul>
                                @foreach($institutions as $institution)
                                    <li class="list-group-item border-0 bg-transparent"><h5><a href="/admissions/institution_details/{{$institution->id}}" class="nav-item">{{$institution->institution_name}}</h5></a></li>
                                @endforeach
                            </ul>
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
