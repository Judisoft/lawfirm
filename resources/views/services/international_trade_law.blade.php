@extends('layouts/default')

{{-- Page title --}}
@section('title')
legal advisory
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop
{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">


            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="d-none d-sm-block">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Legal Advisory, Statuary and Regulatory Compliance Law</a>
                </li>
            </ol>
            <div class="float-right mt-1">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Blank Page
            </div>
        </div>
    </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
  <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{asset('img/hero/about1.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Our Services</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('services')}}">Our Services</a></li> 
                                        <li class="breadcrumb-item"><a>Legal Advisory, Statuary and Regulatory Compliance Law</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
     <!--? Categories Area Start -->
    <div class="categories-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-left mb-80">
                        <h2>Shipping, Aviation and International Trade Law</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-justify">
                        <div class="cat-cap">
                             <p>As one of the growing, new wave and proactive law firm, we excel in shipping, aviation and international trade law.
                                    The shipping industry is one of the major sectors of the Nigerian economy.
                                    The firm, in keeping up with modern legal trends prides itself as being one of the topmost firms in the area of shipping, aviation and international law.
                                    Our range of shipping clients includes ship owners, charterers, financing banks, insurers, clearing agents, crew and port operators. Our services include:
                                    Drafting and reviewing of chartering agreements.
                                    Counselling on marine insurance and commercial risk management.
                                    Registration of shipping and obtaining necessary permits.
                                    Drafting and reviewing of a shipping management agreement.
                                    General maritime litigation and defence amongst others.
                                    Our aviation practice encompasses the full range of regulatory issues affecting private and corporate aircraft owners and operators. Our services include:
                                    Obtaining requisite permits and licenses.
                                    Leasing and mortgaging of aircraft.
                                    Legal Counselling to both foreign and domestic carriers on aircraft management claims such as loss of luggage, delayed or cancelled flights and financial transactions.
                                    General counselling, litigation and defence.
                                    EBAI Law Firm is well equipped with qualified legal practitioners possessed of in-depth knowledge of local laws, international treaties, free trade agreements, international law and the rules of common trade practice.
                                    We assist our clients with import compliance, export licensing and control, trade classification and other government agency requirements.
                                    We provide quality counselling and litigation guaranteed to leave our clients beaming with satisfaction.
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- Categories Area End -->
</main>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
