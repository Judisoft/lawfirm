@extends('layouts/default')

{{-- Page title --}}
@section('title')
Services
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop
<style>
h5{
    font-size: 10px !important;
}
</style>
{{-- Page content --}}
@section('content')
  <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{('img/hero/about1.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Our Services</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a>Our Services</a></li> 
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
                    <div class="section-tittle text-center mb-80">
                        <span>Our Services</span>
                        <h2>What We Can Do For You</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat shadow text-center">
                        <h3><a href="{{route('real_estate')}}">Property and Real Estate Law</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat shadow text-center mb-50">
                        <h3><a href="{{route('corporate_and_finance_law')}}">Corporate, Securities and Finance Law</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat shadow text-center mb-50">
                        <h3><a href="{{route('general_litigation')}}">Civil and Criminal Litigation</a></h3>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat shadow text-center mb-50">
                        <h3><a href="{{route('labour_and_industrial_law')}}">Labour and Industrial Law</a></h3>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat shadow text-center mb-50">
                        <h3><a href="{{route('legal_advisory')}}">Legal Advisory and Statuary and Regulatory Compliance Law</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat shadow text-center mb-50">
                        <h3><a href="services.html">Contract Law</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat shadow text-center mb-50">
                        <h3><a href="{{route('consumer_protection_law')}}">Consumer Protection Law</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat shadow text-center mb-50">
                        <h3><a href="{{route('international_trade')}}">Shipping, Aviation and International Trade Law</a></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat shadow text-center mb-50">
                        <h3><a href="{{route('entertainment_and_sports_law')}}">Entertainment and Sports Law</a></h3>
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
