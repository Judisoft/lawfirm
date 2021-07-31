  
<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>StudPort Admissions Portal</title>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<!-- PLUGINS CSS STYLE -->
<link rel="stylesheet" href="{{asset('plugins1/bootstrap/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/slick/slick.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/slick/slick-theme.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/fancybox/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/aos/aos.css')}}">
<link rel="stylesheet" href="{{asset('plugins1/user_account/style.css')}}">

<!-- CUSTOM CSS -->
<link href="{{asset('plugins1/css/style.css')}}" rel="stylesheet">
<link href="{{asset('plugins1/css/upload.css')}}" rel="stylesheet">
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</head>
<body oncontextmenu='return false' class='snippet-body'>
<nav class="navbar main-nav fixed-top navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0 bg-light border-bottom" style="overflow-x: hidden;">
  <div class="container">
    <a class="navbar-brand" href="index.html"><img src="{{asset('images/recruit.png')}}" style="height: 40px; width: 40px;" alt="logo"><span class="h5 text-dark text-capitalize"><b>Admissions Portal<b></span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
       <li class="nav-item {!! (Request::is('/admissions/institution_details/') ? 'active' : '') !!}">
          <a class="nav-link" href="/admissions/institutions/">Institutions</a>
        </li>
        @if(Sentinel::check())
          <li class="nav-item">
            <a class="nav-link " href="{{route('my-account')}}">Apply </a>
          </li>
        @endif
        <li class="nav-item">
          <a class="nav-link {!! (Request::is('about_us') ? 'active' : '') !!}" href="{{route('about')}}">Admissions</a>
        </li>
       
        <li class="nav-item {!! (Request::is('contact') ? 'active' : '') !!}">
          <a class="nav-link" href="{{route('contact')}}">Need help?</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-primary text-light" href="{{route('login')}}"><i class="ti-shopping-cart px-2"></i><b>Buy Textbooks</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
  

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-9 col-md-10 col-sm-10">
            <div class="card b-0 rounded-0 show">
                <div class="d-flex justify-content-end">
                <div class="mr-3 p-2"><a href="{{route('print')}}" target="_blank" class="btn-print"><i class="ti-printer"></i> Print</a></div>
                </div>
                <div class="row justify-content-between mx-auto step-container">
                    <div class="col-md-3 col-4 step-box active">
                        <h6 class="step-title-0"> <span class="ti-agenda"></span> <span class="break-line"></span> <span class="step-title">Institutions & Programmes</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-user"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-folder"></span> <span class="break-line"></span> <span class="step-title">Doucuments Upload</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-wallet"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                @include('notifications')
                <div class="p-3 pt-5 justify-content-center mb-5 text-center">
                    <h4 class="heading">Institutions - Faculties - Departments</h4>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                            Select Institution <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                        
                        
                        {!! Form::model($user, ['url' => URL::to('my-account'), 'method' => 'put', 'name' => 'myForm', 'class' => 'form-horizontal','enctype'=>"multipart/form-data", 'onsubmit'=>"return results();"]) !!}
{{ csrf_field() }}
<fieldset>
                            <div class="form-group">
                                <select class="form-control" id="institution" name="institution">
                                    <option value="">Select institution</option>
                                @foreach ($institutions as $institution)
                                    <option value="{{ $institution->institution_name }}"
                                    @if ($institution->institution_name == old('institution', $user->institution)) selected="selected"
                                    @endif>{{ $institution->institution_name }}</option>
                                @endforeach
                                </select>
                                <small class="text-danger"><b>{{ $errors->first('institution', ':message') }}</b></small>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Certificate <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="degree"  name="degree" >
                                    <option value="">Select a Degree/Diploma Programme</option>
                                    @foreach ($programmes as $item)
                                        <option value="{{ $item->degree }}"
                                        @if ($item->degree == old('degree', $user->degree)) selected="selected"
                                        @endif>{{ $item->degree }}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger"><b>{{ $errors->first('degree', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                            First Choice <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="first_choice"  name="first_choice">
                                        <option value="">Select first choice</option>
                                    @foreach ($programme_choices as $item)
                                        <option value="{{ $item->department }}"
                                        @if ($item->department == old('first_choice', $user->first_choice)) selected="selected"
                                        @endif>{{ $item->department }}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger"><b>{{ $errors->first('first_choice', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                            Second Choice
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="second_choice"  name="second_choice">
                                <option value="">Select first choice</option>
                                    @foreach ($programme_choices as $item)
                                        <option value="{{ $item->department }}"
                                        @if ($item->department == old('second_choice', $user->second_choice)) selected="selected"
                                        @endif>{{ $item->department }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>  
                    <button type="button" class="form-wizard-next-btn float-right rounded-0 mb-5 next">Next <span class="ti-arrow-right"></span></button>
                </div>
            </div>
            <div class="card b-0 rounded-0">
                <div class="row justify-content-between mx-auto step-container">
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check-circle"></span> <span class="break-line"></span> <span class="step-title">Institutions & Programmes</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box active">
                        <h6 class="step-title-0"> <span class="ti-user"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-folder"></span> <span class="break-line"></span> <span class="step-title">Doucuments Upload</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-wallet"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                <div class="p-3 justify-content-center mb-5 pt-5 text-center">
                    <h4 class="heading">Applicant's Information</h4>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                            First Name <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input id="first_name" name="first_name" type="text" placeholder="First Name" class="form-control required" value="{{Sentinel::getUser()->first_name}}"/>
                                <small class="text-danger"><b>{{ $errors->first('first_name', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                            Last Name <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input id="last_name" name="last_name" type="text" placeholder="Last Name" class="form-control required" value="{{Sentinel::getUser()->last_name}}"/>
                                <small class="text-danger"><b>{{ $errors->first('last_night', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                         Address <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="address" name="address"  placeholder="Address" class="form-control required" value="{{ old('address', $user->address) }}"/>
                                <small class="text-danger"><b>{{ $errors->first('address', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                            Email <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="email" id="email" name="email"  placeholder="Email" class="form-control required" value="{{old('email', $user->email)}}"/>
                                <small class="text-danger"><b>{{ $errors->first('email', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Telephone <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="telephone" name="telephone"  placeholder="Telephone" class="form-control required" value="{{old('telephone', $user->telephone) }}"/>
                                <small class="text-danger"><b>{{ $errors->first('telephone', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                     <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Postal <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="postal" name="postal"  placeholder="Postal Address" class="form-control required" value="{{old('postal', $user->postal) }}"/>
                                <small class="text-danger"><b>{{ $errors->first('postal', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Date of Birth <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="date" id="dob" name="dob"  class="form-control required" value="{{ old('dob', $user->dob) }}" data-date-format="YYYY-MM-DD" placeholder="yyyy-mm-dd"/>
                                <small class="text-danger"><b>{{ $errors->first('dob', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Place of Birth <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="pob" name="pob"  placeholder="Place of birth" class="form-control required" value="{{ old('pob', $user->pob) }}"/>
                                <small class="text-danger"><b>{{ $errors->first('pob', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Gender <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="gender" name="gender">
                                <option value="">Select gender</option>
                                <option value="male" @if($user->gender === 'male') selected="selected"
                                                    @endif >Male</option>
                                <option value="female" @if($user->gender === 'female')
                                    selected="selected" @endif >Female</option>
                                <option value="other" @if($user->gender === 'other') selected="selected"
                                                    @endif >Other</option>
                                </select>
                                <small class="text-danger"><b>{{ $errors->first('gender', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Marital Status
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="marital_status" name="marital_status">
                                <option value="single" @if($user->gender === 'single') selected="selected"
                                                    @endif >Single</option>
                                <option value="married" @if($user->gender === 'married')
                                    selected="selected" @endif >Married</option>
                                <option value="divorced" @if($user->gender === 'divorced') selected="selected"
                                                    @endif >Divorced</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Nationality <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="country" name="country">
                                        <option value="">Select nationality</option>
                                    @foreach ($countries as $item)
                                        <option value="{{$item->name}}" 
                                        @if($item->name == old('country', $user->country)) selected="selected" @endif>
                                        {{$item->name}}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger"><b>{{ $errors->first('country', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          First Language <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="first_language" name="first_language">
                                    <option value="english" @if($user->first_language === 'english') selected="selected"
                                                    @endif >English</option>
                                    <option value="French" @if($user->first_language === 'french')
                                        selected="selected" @endif >French</option>
                                </select>
                                <small class="text-danger"><b>{{ $errors->first('first_language', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Language of Correspondence
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="correspondence_language" name="correspondence_language"  placeholder="Language of correspondence" class="form-control required" value="{{ old('correspondence_language', $user->correspondence_language) }}"/>
                            </div>
                        </div>
                    </div>
                     <h4 class="heading">Parent/Guardian Information</h4>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Name (as written on NIC) <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="g_name" name="g_name"  placeholder="First Name" class="form-control required" value="{{ old('g_name', $user->g_name) }}"/>
                                <small class="text-danger"><b>{{ $errors->first('g_name', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Email <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="g_email" name="g_email"  placeholder="Email" class="form-control required" value="{{ old('g_email', $user->g_email) }}"/>
                                <small class="text-danger"><b>{{ $errors->first('g_email', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Telephone <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="g_telephone" name="g_telephone"  placeholder="Telephone" class="form-control required" value="{{ old('g_telephone', $user->g_telephone) }}"/>
                                <small class="text-danger"><b>{{ $errors->first('g_telephone', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                         Occupation
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="g_occupation" name="g_occupation"  placeholder="Occupation" class="form-control required" value="{{ old('g_occupation', $user->g_occupation) }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Address <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="g_address" name="g_address"  placeholder="Address" class="form-control required" value="{{ old('guardian_address', $user->g_address) }}"/>
                                <small class="text-danger"><b>{{ $errors->first('g_address', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>

                    <h4 class="heading">Previous school(s) attended</h4>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Secondary school <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="previous_inst1" name="previous_inst1"  placeholder="Secondary School" class="form-control required" value="{{ old('previous_inst1', $user->previous_inst1) }}"/>
                                <small class="text-danger"><b>{{ $errors->first('previous_inst1', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          High school <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="previous_inst2" name="previous_inst2"  placeholder="Higher Education" class="form-control required" value="{{ old('previous_inst2', $user->previous_inst2) }}"/>
                                <small class="text-danger"><b>{{ $errors->first('previous_inst2', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          University/Higher Institution <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="previous_inst3" name="previous_inst3"  placeholder="Higher Institution" class="form-control required" value="{{ old('previous_inst3', $user->previous_inst3) }}"/>
                                <small class="text-danger"><b>{{ $errors->first('previous_inst3', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="form-wizard-prev-btn float-left rounded-0 mb-5 mt-3  prev"><span class="ti-arrow-left"></span>Back</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" id="next2" class="form-wizard-next-btn float-right rounded-0 mb-4 next">Next <span class="ti-arrow-right"></span></button>
                    
                </div>
            </div>
            <div class="card b-0 rounded-0">
                <div class="row justify-content-center mx-auto step-container">
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check-circle"></span> <span class="break-line"></span> <span class="step-title">Institutions & Programmes</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check-circle"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box active">
                        <h6 class="step-title-0"> <span class="ti-folder"></span> <span class="break-line"></span> <span class="step-title">Doucuments Upload</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-wallet"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                <div class="p-3 justify-content-center mb-5 pt-5 text-center">
                    <h4 class="heading">DOCUMENTS UPLOAD</h4>
                    <div class="row d-flex justify-content-center">
                        <div class="mb-5">
                            <h5 class="confirm list">Upload all required documents. <br>
                                Accepted file extensions - .jpeg, .jpg, .png,.pdf, .bmp <br>
                                Maximum file size : 5MB
                            </h5>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Photo <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="file-drop-area"> <span class="file-message"></span> 
                            <input type="file" class="form-control bg-transparent border-0"  name="pic" value="{{old('pic', $user->pic)}}"> </div>
                            <div id="divImageMediaPreview"> </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 list">
                         <small class="text-danger"><b>{{ $errors->first('pic', 'Upload photo') }}</b></small>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Birth Certificate <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="file-drop-area"> <span class="file-message"></span> 
                            <input type="file" class="form-control bg-transparent border-0"  name="doc1"> </div>
                            <div id="divImageMediaPreview"> </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 list">
                         <small class="text-danger"><b>{{ $errors->first('doc1', 'Upload Bith Certificate') }}</b></small>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          National ID Card <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="file-drop-area"> <span class="file-message"></span> 
                            <input type="file" class="form-control bg-transparent border-0" accept=".pdf,.jpg,.jpeg,.png" name="doc2"> </div>
                            <div id="divImageMediaPreview"> </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 list">
                         <small class="text-danger"><b>{{ $errors->first('doc2', 'Upload National ID Card') }}</b></small>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          GCE O/L Certificate <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="file-drop-area"> <span class="file-message"></span> 
                            <input type="file" class="form-control bg-transparent border-0"  name="doc3"> </div>
                            <div id="divImageMediaPreview"> </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 list">
                         <small class="text-danger"><b>{{ $errors->first('doc3', 'Upload GCE O/L Certificate') }}</b></small>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          GCE A/L Certificate <br>or<br>Result Slip
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="file-drop-area"> <span class="file-message"></span> 
                            <input type="file" class="form-control bg-transparent border-0" accept=".pdf,.jpg,.jpeg,.png" name="doc4"> </div>
                            <div id="divImageMediaPreview"> </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 list">
                         <small class="text-danger"><b>{{ $errors->first('doc4', 'Upload GCE A/L Certificate') }}</b></small>
                        </div>
                    </div>

                    <button type="button" class="form-wizard-prev-btn float-left rounded-0 mb-5 prev"><span class="ti-arrow-left"></span>Back</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" id="next3" class="form-wizard-next-btn float-right rounded-0 mb-5 next">Next <span class="ti-arrow-right"></span></button>
                </div>
            </div>
            <div class="card b-0 rounded-0">
                <div class="row justify-content-center mx-auto step-container">
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check-circle"></span> <span class="break-line"></span> <span class="step-title">Institutions & Programmes</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check-circle"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check-circle"></span> <span class="break-line"></span> <span class="step-title">Doucuments Upload</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box active">
                        <h6 class="step-title-0"> <span class="ti-wallet"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                <div class="p-3 justify-content-center mb-5 pt-5 text-center">
                    <h4 class="heading">Verify and Confirm your information</h4>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-9 col-md-9 mb-4">
                            <h6 class="confirm">Verify your Information and press confirm to proceed to payment</h6>
                            <table id="user" class="table table-bordered table-striped">
                                <tbody class="text-left">
                                <tr>
                                    <td>Institution</td>
                                    <td>
                                        <a>{{old('institution', $user->institution)}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Degree</td>
                                    <td>
                                        <a>{{old('degree', $user->degree)}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>First Choice</td>
                                    <td>
                                        <a>{{old('first_choice', $user->first_choice)}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Second Choice</td>
                                    <td>
                                        <a>{{old('second_choice', $user->second_choice)}}</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>First Name</td>
                                    <td>
                                        <a>{{old('firs_name', $user->first_name)}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>
                                        <a>{{old('last_name', $user->last_name)}}</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Address</td>
                                    <td>
                                        <a>{{old('address', $user->address)}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <a>{{old('email', $user->email)}}</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Telephone</td>
                                    <td>
                                        <a>{{old('telephone', $user->telephone)}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Postal</td>
                                    <td>
                                        <a>{{old('postal', $user->postal)}}</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Date of Birth</td>
                                    <td>
                                        <a>{{old('dob', $user->dob)}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>
                                        <a>{{old('last_name', $user->last_name)}}</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Place of Birth</td>
                                    <td>
                                        <a>{{old('pob', $user->pob)}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>
                                        <a>{{old('gender', $user->gender)}}</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Marital Status</td>
                                    <td>
                                        <a>{{old('marital_status', $user->marital_status)}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nationality</td>
                                    <td>
                                        <a>{{old('country', $user->country)}}</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>First Language</td>
                                    <td>
                                        <a>{{old('first_language', $user->first_language)}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Correspondence Language</td>
                                    <td>
                                        <a>{{old('correspondence_language', $user->correspondence_language)}}</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Name</td>
                                    <td>
                                        <a>{{old('g_name', $user->g_name)}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <a>{{old('g_email', $user->g_email)}}</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Telephone</td>
                                    <td>
                                        <a>{{old('g_telephone', $user->g_telephone)}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>
                                        <a>{{old('g_address', $user->g_address)}}</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Secondary School</td>
                                    <td>
                                        <a>{{old('previous_inst1', $user->previous_inst1)}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>High School</td>
                                    <td>
                                        <a>{{old('previous_inst2', $user->previous_inst2)}}</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>University/Higher Institution</td>
                                    <td>
                                        <a>{{old('previous_inst3', $user->previous_inst3)}}</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                    <button type="button" class="form-wizard-prev-btn float-left rounded-0 mb-5 prev"><span class="ti-arrow-left"></span>Back</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="form-wizard-next-btn float-right rounded-0 mb-5 next" id="btn">Save</button>
                </div>
            </div>
            
            <div class="card b-0 rounded-0">
                <div class="row justify-content-center mx-auto step-container">
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check-circle"></span> <span class="break-line"></span> <span class="step-title">Institutions & Programmes</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check-circle"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check-circle"></span> <span class="break-line"></span> <span class="step-title">Doucuments Upload</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="ti-wallet"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                <div class="p-3 mb-5 justify-content-center text-center">
                    <h3 class="heading">Enter your Payment Details to<br> complete your application</h3>
                                   <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Paid through <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="paid_via"  name="paid_via">
                                    <option value="">select a payment method</option>
                                    <option value="momo" style="background-image:url(../images/momo.jpg);">MTN Mobile Money</option>
                                    <option value="om" style="background-image:url(images/volvo.png);">Orange Money</option>
                                    <option value="express_union" style="background-image:url(images/volvo.png);">Express Union Mobile Money</option>
                                </select>
                                <small class="text-danger"><b>{{ $errors->first('paid_via', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Payment Reference <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="payment_reference"  name="payment_reference"  placeholder="Enter payment/transaction ID here" class="form-control required"/>
                            </div>
                        </div>
                    </div>
                    <div class="justify-content-left notice mb-3">
                        <h5 class="text-left text-dark"><small>Registration Fee: @foreach($payment_details as $fee) {{$fee->registration_fee}} FCFA</small>  @endforeach</h5>
                        <h5 class="text-left text-dark"><small>Application Fee: 1000 FCFA</small></h5>
                        <h4 class="text-right text-danger">Total: @foreach($payment_details as $fee) <b>{{$fee->registration_fee + 1000}} FCFA</b>  @endforeach</h5>


                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="p-0"><img src="{{asset('images/momo.jpeg')}}" class="payment"></div>
                        <div class="p-0"><img src="{{asset('images/om.png')}}" class="payment"></div>
                        <div class="p-0"><img src="{{asset('images/express_union.png')}}" class="payment"></div>
                        <div class="p-0"><img src="{{asset('images/bank.jpeg')}}" class="payment"></div>
                    </div>
                    <button class="form-wizard-prev-btn float-left rounded-0 mb-5 prev"><span class="ti-arrow-left"></span>Back</button> <button type="submit" id="next3" class="form-wizard-next-btn float-right rounded-0 mb-3 next">Submit</button>
                    <br>
                    <div class="d-flex justify-content-between border-top mt-5">
                        
                        <div class="text-left">
                            <small>MTN Mobile Money: @foreach($payment_details as $payment) {{$payment->momo}} @endforeach</small><br>
                            <small>Orange Money: @foreach($payment_details as $payment) {{$payment->om}} @endforeach</small><br>
                            <small>Bank Account [Afriland First Bank]: @foreach($payment_details as $payment) {{$payment->bank_account}} @endforeach</small>
                        </div>
                        <div class="text-justify">
                            <small>Telephone: @foreach($payment_details as $payment) {{$payment->telephone}} @endforeach</small><br>
                            <small>Email: @foreach($payment_details as $payment) {{$payment->email}} @endforeach</small><br>
                        </div>
                    </div>
                </div>
                <div class="card b-0 rounded-0">
                <div class="row justify-content-center mx-auto step-container">
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check-circle"></span> <span class="break-line"></span> <span class="step-title">Institutions & Programmes</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check-circle"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check-circle"></span> <span class="break-line"></span> <span class="step-title">Doucuments Upload</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="fa fa-check-circle"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                <div class="p-3 justify-content-center text-center">
                    <h4 class="heading">End</h4>
                    <div class="row d-flex justify-content-center">
                        <div class="mb-4">
                            <h6 class="confirm">Verify all entered details and press confirm</h6>
                        </div>
                    </div> 
                    <button type="button" class="form-wizard-prev-btn rounded-0 mb-5 prev"><span class="ti-arrow-left"></span>Back</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary rounded-0 mb-5 next">Save</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</fieldset>
{!!  Form::close()  !!}
<script>
    function results(){

        var first_name = document.getElementById('first_name').value;
        var email = document.getElementById('email').value;

        document.write("<h1>Thank You</h1>");
        document.write("<h1>Hello</h1>");

        document.write(first_name + "<br/>");
        document.write(email + "<br/>");


    }
</script>

<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
          <div class="block">
            <a href="index.html" class="text-light"><b>Admissions Portal</b></a>
            <!-- Social Site Icons -->
            <ul class="social-icon list-inline mt-2">
              <li class="list-inline-item">
                <a href="#"><i class="ti-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="ti-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="ti-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Product</h6>
            <!-- links -->
            <ul>
              <li><a href="team.html">Teams</a></li>
              <li><a href="blog.html">Blogs</a></li>
              <li><a href="FAQ.html">FAQs</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Resources</h6>
            <!-- links -->
            <ul>
              <li><a href="sign-up.html">Singup</a></li>
              <li><a href="sign-in.html">Login</a></li>
              <li><a href="blog.html">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="career.html">Career</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="team.html">Investor</a></li>
              <li><a href="privacy.html">Terms</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center bg-dark py-4">
    <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href="{{ route('home') }}" class="text-light">FalconsTech</a></small class="text-secondary">
  </div>
</footer>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script src="{{ asset('vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>

<script type='text/javascript'>
$(document).ready(function(){
let current_fs, next_fs, previous_fs;
$(".next").click(function(){
current_fs = $(this).parent().parent();
next_fs = $(this).parent().parent().next();
$(current_fs).removeClass("show");
$(next_fs).addClass("show");
current_fs.animate({}, {
step: function() {
current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({
'display': 'block'
});
}
});
});
$(".prev").click(function(){
current_fs = $(this).parent().parent();
previous_fs = $(this).parent().parent().prev();
$(current_fs).removeClass("show");
$(previous_fs).addClass("show");
current_fs.animate({}, {
step: function() {
current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({
'display': 'block'
});
}
});
});
});
</script>
<script type='text/javascript'>$(document).on('change', '.file-input', function() {
var filesCount = $(this)[0].files.length;
var textbox = $(this).prev();
if (filesCount === 1) {
var fileName = $(this).val().split('\\').pop();
textbox.text(fileName);
} else {
textbox.text(filesCount + ' files selected');
}
if (typeof (FileReader) != "undefined") {
var dvPreview = $("#divImageMediaPreview");
dvPreview.html("");
$($(this)[0].files).each(function () {
var file = $(this);
var reader = new FileReader();
reader.onload = function (e) {
var img = $("<img />");
img.attr("style", "width: 150px; height:100px; padding: 10px");
img.attr("src", e.target.result);
dvPreview.append(img);
}
reader.readAsDataURL(file[0]);
});
} else {
alert("This browser does not support HTML5 FileReader.");
}
});
</script>
</body>
</html>
