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
                        <h2>Labour and Industrial Law</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-justify">
                        <div class="cat-cap">
                             <p>At EBAI Law Firm, our extensive knowledge of both local and international regulations give us an added advantage to help clients around the world deal effectively and legally with regulatory and compliance issues.
                                Regulatory frameworks are constantly evolving, businesses are getting globalized and cross-border transactions are becoming more complex, thus necessitating the need for highly qualified professionals.
                                At EBAI Law Firm, one of our objectives is to create sophisticated and efficient strategies that safeguard our clients’ assets and reputation and enable them to concentrate on pursuing their businesses with confidence.
                                We commit our global resources to help our clients meet regulatory requirements and keep their businesses running smoothly, whether they are based at home or abroad.
                                We provide legal services to individuals and corporate clients who require counselling regarding complex government laws, rules, regulations, procedure, permits, applications or enforcement matters.
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
