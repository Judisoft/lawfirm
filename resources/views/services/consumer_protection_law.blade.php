@extends('layouts/default')

{{-- Page title --}}
@section('title')
consumer protection law
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
                    <a>Corporate, Securities and Finance Law</a>
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
                                        <li class="breadcrumb-item"><a>Consumer Protection Law</a></li> 
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
                        <h2>Consumer Protection Law</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-justify">
                        <div class="cat-cap">
                             <p>With increased advancement in technology, the need for greater protection of the consumer is increasingly needed in a bid to protect the consumer from inferior and substandard goods and services, and where the consumer has already been exposed to such goods, he/she needs as a matter of urgency remedies to alleviate the harsh effects, and to serve as deterrent to manufacturers of fake or/and substandard goods.
                                At EBAI Law Firm, our client’s welfare is our utmost responsibility, consequently, we offer services geared towards protecting clients from unfair trade practices and contaminated goods.
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
