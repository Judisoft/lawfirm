@extends('layouts/default')

{{-- Page title --}}
@section('title')
corporate law
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
                                        <li class="breadcrumb-item"><a>Corporate, Securities and Finance Law</a></li> 
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
                        <h2>Corporate, Securities and Finance Law</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-justify">
                        <div class="cat-cap">
                             <p>EBAI  Law Firm is top sports and entertainment law firm in Cameroon  advising sport and entertainments participants on legal matters in the sector.
                                We add immense values to our sports and entertainment clients by drawing on our experience in the areas of business law and intellectual property law.
                                Whether working with individual entertainers, artists, producers, production companies, sports personalities, coaches or agents on their career path, we have the requisite experience required to strategically advise and handle matters on various legal considerations involved in sports and entertainment industries.
                            </p>
                            <p>
                                Our entertainment and sports lawyers are always ready to represent clients throughout the country and beyond.
                                We are entertainment law firm of high pedigree assisting clients on various aspects of sports and entertainment law in Cameroon 
                            </p>
                            <p>
                                Specific Sports and Entertainment Areas we specialize in:
                            </p>
                            <ul>
                                <li>Media & Music</li>
                                <li>Football & Athletes</li>
                                <li>Sponsorship & Endorsement</li>
                                <li>Brand Protection and Merchandizing</li>
                                <li>Copyright and Trademark</li>
                                <li>Licensing & Royalty</li>
                            </ul>
                            <p>We offer services in:</p>
                            <ul>
                                <li>Negotiating and drafting of sports and entertainment contracts and agreements</li>
                                <li>Enforcing contracts and agreements that promote and protect our clients’ interests</li>
                                <li>Structuring and advising on sponsorship and endorsement agreements</li>
                                <li>Registering and protection of trademark for our clients and managing the related legal issues involved</li>
                                <li>Protection of copyrights and handling all legal issues arising from copyright infringement</li>
                                <li>Offering general legal services on sports and entertainment industries</li>
                            </ul>
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
