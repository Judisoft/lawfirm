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
    font-weight: 700 !important;
	font-size: 28px !important;
}
h1{
    font-size: 50px !important;
    font-weight: 400;
}

p{
    font-weight: 500;
}
.btn-rounded-icon:hover{
    color: #000 !important;
    background-color: #fff;
}
.scroll-top-to {
   padding-top: 10px;
    
}
.footer-main .block ul.social-icon li a {
  padding-top: 10px;
}
em{
	font-weight: 400;
	color: var(--dark);
}
li{
	font-weight: 500;
	color: var(--dark);
	list-style: none;
}
</style>

{{-- Page content --}}
@section('content')
<!--================================
=            Page Title            =
=================================-->
<section class="video-promo section mt-0 bg-2">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="content-block">
					<!-- Heading -->
					<h1 class="text-white bg-apply text-center" style="font-weight: 800;">{{$institution->institution_name}}</h1>
					<!-- Popup Video -->
					<a data-fancybox href="https://www.youtube.com/watch?v=jrkvirglgaQ">
						<i class="ti-control-play video"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--====================================
=            Privacy Policy            =
=====================================-->
<section class="privacy section pt-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<nav class="privacy-nav" style="border-left: 3px solid var(--primary);">
					<ul>
						<li><a class="nav-link scrollTo" href="#aboutUs" class="scrollTo">About Us</a></li>
						<li><a class="nav-link scrollTo" href="#studyProgrammes" class="scrollTo">Study Programs</a></li>
						<li><a class="nav-link scrollTo" href="#requirements" class="scrollTo">Requirements</a></li>
                        <li><a class="nav-link scrollTo" href="#facilities" class="scrollTo">Facilities</a></li>
						<li><a class="nav-link scrollTo" href="#admissionDecisions" class="scrollTo">Admission Decision</a></li>
						<li><a class="nav-link scrollTo" href="#deadlines" class="scrollTo">Deadlines</a></li>
						<li><a class="nav-link scrollTo" href="#contacts" class="scrollTo">Contacts</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-9">
				<div class="block rounded-0">
					<!-- About Us -->
					<div id="aboutUs" class="policy-item">
						<div class="title">
							<h3>About Us</h3>
						</div>
						<div class="policy-details">
							<p>Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
						</div>
					</div>
					<!-- User License -->
					<div id="studyProgrammes" class="policy-item">
						<div class="title">
							<h3>Our Programs</h3>
						</div>
						<div class="policy-details">
							<div id="gstAccordion" data-children=".item">
						  <!-- Accordion Item 01 -->
						  <div class="item">
						  	<div class="item-link p-2">
							    <a data-toggle="collapse" data-parent="#gstAccordion" href="#gstAccordion1">
							      <h6><i class="ti-control-play"></i> Hnd Programmes &nbsp; ({{$hndProgrammes->count()}})</h6>
							    </a>
						  	</div>
						    <div id="gstAccordion1" class="collapse accordion-block">
						    	<ul>
									@forelse ($hndProgrammes as $programme)
										<li>{{$programme->name. ', '.$programme->degree}}</li>
									@empty
									<em>No Hnd Programme available</em>
									@endforelse
								</ul>
						    </div>
						  </div>
						  <!-- Accordion Item 02 -->
						  <div class="item">
						  	<div class="item-link p-2">
							    <a data-toggle="collapse" data-parent="#gstAccordion" href="#gstAccordion2">
							      <h6><i class="ti-control-play"></i> Bachelors Programmes &nbsp; ({{$bachelorsProgrammes->count()}})</h6>
							    </a>
						  	</div>
						    <div id="gstAccordion2" class="collapse accordion-block">
						      	<ul>
									@forelse ($bachelorsProgrammes as $programme)
										<li>{{$programme->name. ', '.$programme->degree}} </li>
									@empty
									<em>No Bachelors Programme available</em>
									@endforelse
								</ul>
						    </div>
						  </div>
						  <!-- Accordion Item 03 -->
						  <div class="item">
						  	<div class="item-link p-2">
							    <a data-toggle="collapse" data-parent="#gstAccordion" href="#gstAccordion3">
									<h6><i class="ti-control-play"></i> Masters Programmes &nbsp; ({{$mastersProgrammes->count()}})</h6>
							    </a>
						  	</div>
						    <div id="gstAccordion3" class="collapse accordion-block">
						      	<ul>
									@forelse ($mastersProgrammes as $programme)
										<li>{{$programme->name. ', '.$programme->degree}}</li>
									@empty
									<em>No Masters Programme available</em>
									@endforelse
								</ul>
						    </div>
						  </div>
						    <!-- Accordion Item 04 -->
						  <div class="item">
						  	<div class="item-link p-2">
							    <a data-toggle="collapse" data-parent="#gstAccordion" href="#gstAccordion4">
									<h6><i class="ti-control-play"></i> Phd Programmes &nbsp; ({{$phdProgrammes->count()}})</h6>
							    </a>
						  	</div>
						    <div id="gstAccordion4" class="collapse accordion-block">
						      	<ul>
									@forelse ($phdProgrammes as $programme)
										<li>{{$programme->name. ', '.$programme->degree}}</li>
									@empty
									<em>No PhD Programme available</em>
									@endforelse
								</ul>
						    </div>
						  </div>
						</div>
						</div>
					</div>
					<!-- Disclaimer -->
					<div id="requirements" class="policy-item">
						<div class="title">
							<h3>Requirements</h3>
						</div>
						<div class="policy-details">
							<p>Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
						</div>
					</div>
                    <!-- Facilities -->
					<div id="facilities" class="policy-item">
						<div class="title">
							<h3>Facilities</h3>
						</div>
						<div class="policy-details">
							<p>Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
						</div>
					</div>
					<!-- Limitations -->
					<div id="admissionDecisions" class="policy-item">
						<div class="title">
							<h3>Admission Decisions</h3>
						</div>
						<div class="policy-details">
							<p>Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
						</div>
					</div>
					<!-- Deadlines -->
					<div id="deadlines" class="policy-item">
						<div class="title">
							<h3>Deadlines</h3>
						</div>
						<div class="policy-details">
							<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinara.</p>
							<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinara.</p>
						</div>
					</div>
					<!-- Contacts -->
					<div id="contacts" class="policy-item">
						<div class="title">
							<h3>Contacts</h3>
						</div>
						<div class="policy-details">
							<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinara.</p>
							<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinara.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Institution details  ====-->
<!--====  Apply  ====-->
<section class="call-to-action-app section bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 style="font-weight: 400;">Apply Now and Secure your Place</h2>
                <br>
				<ul class="list-inline">
                    <li class="list-inline-item">
						<a href="{{route('login')}}" class="btn btn-rounded-icon">
							<i class="ti-lock"></i>
							Sign In
						</a>
					</li>
					<li class="list-inline-item">
						<a href="{{route('register')}}" class="btn btn-rounded-icon">
							<i class="ti-user"></i>
							Sign Up
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
 <!--====  End of Apply section  ====-->   
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
