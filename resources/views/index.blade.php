@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Home
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!--end of page level css-->
@stop
<!--  Main banner section -->
<style>
.fa-3x{
    font-size: 48px !important;
}
.text-blue{
    color: #066BAE !important;
}
.circle-icon {
    background: #062940;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    text-align: center;
    line-height: 100px;
    vertical-align: middle;
    padding: 30px;
}
</style>
@section('content')
<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{asset('img/hero/about1.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="hero__caption">
                                <h1>EBAI<br><span>Law Firm</span></h1>
                            </div>
                            <!--Hero form -->
                            <form action="#" class="search-box">
                                <div class="input-form">
                                    <input type="text" placeholder="How can we help you?">
                                </div>
                                <div class="search-form">
                                    <a href="https://direct.lc.chat/12675303/"><i class="icon-speech fa-2x px-2"></i>FIND OUT</a>
                                </div>	
                            </form>	
                            <!-- Hero Pera -->
                            <div class="hero-pera">
                                <p>For all inquiries, Leave us a message</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? our info Start -->
    <div class="our-info-area pt-70 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30">
                        <div class="info-icon">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="info-caption">
                            <p>Call Us Anytime</p>
                            <span>+ (237) 674-526-116</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30">
                        <div class="info-icon">
                            <span class="flaticon-clock"></span>
                        </div>
                        <div class="info-caption">
                            <p>Sunday CLOSED</p>
                            <span>Mon - Sat 8.00 - 18.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-info mb-30">
                        <div class="info-icon">
                            <span class="flaticon-place"></span>
                        </div>
                        <div class="info-caption">
                            <p>Limbe, SW Region</p>
                            <span>CAMEROON</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our info End -->
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
                    <div class="single-cat text-center">
                        <div class="cat-cap pt-3">
                            <h5><a href="{{route('real_estate')}}">Property and Real Estate Law</a></h5>
                            <p>@php 
                                    $realEstate = "At EBAI Law Firm, our lawyers are highly experienced in property 
                                                    and real estate law matters spanning Advisory, Advocacy, Transactional,
                                                     Managerial, and Regulatory services.
                                                    With over decades of experience, our lawyers are ready to provide the premium legal 
                                                    service you need in your property and real estate matters, including but not limited to:
                                                    Investigation of title to land.
                                                    Preparation and review of land documents.
                                                    Dispute Resolution in land matters.
                                                    Acquisition and sale of properties.
                                                    Commercial property transaction.
                                                    Property development.
                                                    Leasehold and tenancy agreement.
                                                    Perfection and Registration of Title.
                                                    Estate management.
                                                    Recovery of Premises.
                                                    Mortgages.";
                                    echo substr($realEstate, 0, 600)."...";
                                @endphp
                            </p>
                            <a class="btn" href="{{route('real_estate')}}"> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center shadow">
                        <div class="cat-cap pt-3">
                            <h5><a>Corporate, Securities and Finance Law</a></h5>
                            <p>
                                @php
                                    $financeLaw = "At EBAI Law Firm, complex issues relating to corporate practice, securities and finance are handled with utmost dexterity that leaves our clients beaming with satisfaction.
                                                    We offer a variety of services to our clients in areas ranging from Pre-incorporation of business organizations such as enterprises or sole proprietorship, partnership,private limited companies , public limited companies companies limited by shares, companies limited by guarantee, unlimited companies, and incorporated trustees, to incorporation and post-incorporation matters.
                                                    Company contracts, company securities, filing of annual returns, corporate restructuring, company proceedings, winding up of companies, and of course, matters involving incorporated trustees are part of our practice areas, including aiding our clients in settlement of investment disputes as well as counselling on the legal aspects of financial and corporate matters both in Cameroon and Nigeria.
                                                    ";

                                      echo substr($financeLaw, 0, 500)."...";
                                @endphp
                            </p>
                            <a class="btn" href="{{route('corporate_and_finance_law')}}"> Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-cap pt-3">
                            <h5><a>Criminal and Civil Litigation</a></h5>
                             <p>
                                @php 
                                    $generalLitigation = "EBAI Law Firm is concerned with the welfare of our clients, subsequently, our goal is to achieve solutions, solve problems and provide practical pieces of advice to clients with cases either civil or criminal.
                                                    The firm prides itself on being the leading firm handling cases both criminal and civil proficiently.
                                                    Already existing clients can attest to the fact that all briefs brought to the firm are treated with the expertise and skill they deserve.
                                                    Wondering whether your matter is civil or criminal in nature? Leave that to us and be completely assured that the brief would be analyzed expertly and executed with the necessary acumen by our veteran lawyers.";
                                    echo substr($generalLitigation, 0, 450)."...";
                                @endphp
                            </p>
                            <a class="btn" href="{{route('general_litigation')}}"> Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Area End -->
    <!--? About Area Start -->
    <div class="about-low-area padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>About Our Law Firm</span>
                            <h2>Ebai Law Firm</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                        </p>
                        <a href="{{route('about')}}" class="btn">More About Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img">
                            <img src="{{asset('img/gallery/about2.png')}}" alt="">
                        </div>
                        <div class="about-back-img d-none d-lg-block">
                            <img src="{{asset('img/gallery/about1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->
    <!--? contact-form start -->
    <section class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="{{asset('img/gallery/section_bg03.jpg')}}">
        <div class="container">
            <div class="row justify-content-end">
                <!-- Contact wrapper -->
                <div class="col-xl-8 col-lg-9">
                    <div class="contact-form-wrapper">
                        <!-- From tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-50">
                                    <span>Book a Free Consultation</span>
                                    <h2>Request Consulation</h2>
                                    <p>
                                        Fill the Web Form below to request a free Legal consultation appointment
                                    </p>
                                        @if(session()->has('success'))
                                               <script type="text/javascript">
                                                    $(document).ready(function() {
                                                        $('#popupmodal').modal();
                                                    });
                                                </script>
                                                
                                            <div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            <p class="text-center">
                                                                <span class="fa fa-check-circle fa-3x"></span>
                                                                {{Session::get('success')}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if(session()->has('error'))
                                            <script type="text/javascript">
                                                    $(document).ready(function() {
                                                        $('#popupmodal').modal();
                                                    });
                                                </script>
                                                
                                            <div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-body">
                                                        <p class="text-center">
                                                            <span class="fa fa-check-circle fa-3x"></span>
                                                            {{Session::get('error')}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                </div>
                            </div>
                        </div>
                        <!-- form -->
                        <form action="{{route('my-account')}}" class="contact-form" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="row ">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                 <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" name="country" placeholder="Country">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" name="telephone" placeholder="Telephone">
                                    </div>
                                </div>
                                   <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" name="company" placeholder="Company">
                                    </div>
                                </div>
                                   <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" placeholder="Website">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" name="city" placeholder="Town/City of Residence">
                                    </div>
                                </div>
                                   <div class="col-lg-6">
                                    <div class="select-items">
                                        <select name="service">
                                                <option value="">Select Service Type</option>
                                            @foreach ($data as $service)
                                                <option value="{{$service}}">{{$service}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                   <!-- Radio Button -->
                                <div class="col-lg-12">
                                     <h5>I prefer</h5>
                                    <div class="select-items">
                                        <select name="service_type">
                                                <option value="">Choose Delivery Method</option>
                                                <option value="In-Person">In-Person</option>
                                                <option value="Online">Online</option>
                                        </select>
                                    </div>
                                </div>
                                  <div class="col-lg-12">
                                     <h5>Choose Consultation Date</h5>
                                    <div class="select-items">
                                        <input type="date" name="consultation_date">
                                    </div>
                                </div>
                                <!-- Button -->
                                <!-- Radio Button -->
                                <div class="col-lg-12">
                                     <h5>Choose Consultation Time</h5>

                                    <div class="select-items">
                                        <select name="consultation_time">
                                                <option value="">Choose Time</option>
                                                <option value="8am - 10am">8am - 10am</option>
                                                <option value="10:30am - 12:30pm">10:30am - 12:30pm</option>
                                                <option value="2pm - 4pm">2pm - 4pm</option>
                                                <option value="4:30pm - 6pm">4:30pm - 6pm</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-lg-12">
                                    <button type="submit" name="consultation" class="submit-btn">Submit Request</button>
                                </div>
                            </div>
                        </form>	
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form end -->
    <!--Team Ara Start -->
    <div class="team-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Our Lead Staff</span>
                        <h2>What We Can Do For You</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="{{asset('img/gallery/team1.png')}}" alt="">
                            <div class="team-caption">
                                <h4><a href="#">IVA IDA BESSEM EBAI, LLB, MA & BL</a></h4>
                                <p>Senior Partner</p>
                                <p>Head of Firm</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="{{asset('img/gallery/team2.png')}}" alt="">
                            <div class="team-caption">
                                <h4><a href="#">BAIYE MBI, LLB, BL</a></h4>
                                <p>Partner</p>
                                <p>Barrister at Law</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="{{asset('img/gallery/team3.png')}}" alt="">
                            <div class="team-caption">
                                <h4><a href="#">JULIAN TABI EBAI, BSc Econs/Acc, LLB, LLM</a></h4>
                                <p>Associate</p>
                                <p>Barrister at Law</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Ara End -->
    <!--? Testimonial Start -->
    <div class="testimonial-area testimonial-padding section-bg" data-background="{{asset('img/gallery/section_bg04.jpg')}}">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-25">
                        <span>Clients Testimonials</span>
                        <h2>What Our Clients Say!</h2>
                    </div> 
                    <div class="h1-testimonial-active mb-70">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>Lorem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="{{asset('img/gallery/Homepage_testi.png')}}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Client Name</span>
                                        <p>Company</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial ">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <p>Srem ipsum adolor dfsit amet, consectetur adipiscing elit, sed dox beiusmod tempor incci didunt ut labore et dolore magna aliqua. Quis cipsucm suspendisse ultrices gravida. Risus commodo vivercra maecenas accumsan lac.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-img">
                                        <img src="{{asset('img/gallery/Homepage_testi.png')}}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Client Name</span>
                                        <p>Company</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form Start -->
                <div class="col-xl-4 col-lg-5 col-md-8">
                    <div class="testimonial-form text-center">
                        <h3>Subscribe to Our Newsletter <br> <small>Receive Notifications from Us</small></h3>
                        <form action="{{route("my-account")}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <input type="email" name="email" placeholder="Enter Email">
                            <button type="submit" name="newsletter" class="submit-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
                <!-- Form End -->
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!--? Blog Area Start -->
    <div class="home-blog-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-70">
                        <span>Our Recent Blog Items</span>
                        <h2>E&A Legal Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{asset('img/gallery/13.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-date text-center">
                                <span>10</span>
                                <p>MAR</p>
                            </div>
                            <div class="blog-cap">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i> Author's Name</a></li>
                                    <li><a href="#"><i class="ti-comment-alt"></i> 0</a></li>
                                </ul>
                                <h3><a href="blog_details.html">Title of Blog Post goes here</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{asset('img/gallery/1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-date text-center">
                                <span>10</span>
                                <p>MAR</p>
                            </div>
                            <div class="blog-cap">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i> Author's Name</a></li>
                                    <li><a href="#"><i class="ti-comment-alt"></i> 0</a></li>
                                </ul>
                                <h3><a href="blog_details.html">Title of Blog Post goes here</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{asset('img/gallery/14.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-date text-center">
                                <span>10</span>
                                <p>MAR</p>
                            </div>
                            <div class="blog-cap">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i> Author's Name</a></li>
                                    <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                </ul>
                                <h3><a href="blog_details.html">Title of Blog Post goes here</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
</main>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop

