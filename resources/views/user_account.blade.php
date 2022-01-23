  
<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>Student Portal CM</title>
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
<nav class="navbar main-nav fixed-top navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0 bg-light border-bottom shadow" style="overflow-x: hidden;">
  <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/recruit.png')}}" style="height: 35px; width: 35px;" alt="logo"><span class="h5  text-dark text-capitalize px-2"><b class="text-dark" style="padding-top: 5px;">Student Portal CM</b> <b class="text-warning"></b></span></a>    
        <button class="navbar-toggler mt-3" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
       <li class="nav-item {!! (Request::is('/admissions/institution_details/') ? 'active' : '') !!}">
          <a class="nav-link" href="/admissions/institutions/">Institutions</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="{{route('study-programs')}}">Programs </a>
        </li>
        @if(Sentinel::check())
          <li class="nav-item">
            <a class="nav-link " href="{{route('application')}}">Apply</a>
          </li>
        @endif
        <li class="nav-item {!! (Request::is('contact') ? 'active' : '') !!}">
          <a class="nav-link" href="{{route('contact')}}">Need help?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-warning" href="{{route('login')}}"><i class="ti-shopping-cart px-2"></i><b>StudPort Market</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav> 

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-10 col-md-10 col-sm-10">
            <div class="card b-0 rounded-0 show">
                <div class="d-flex justify-content-end">
                    <div class="mr-3 p-2"><a href="{{route('select-print')}}" target="_blank" class="btn-print p-3" style="font-weight:500;"><i class="ti-printer"></i> Print Application Form</a></div>
                </div>
                <div class="row justify-content-between mx-auto step-container">
                    <div class="col-md-3 col-4 step-box active">
                        <h6 class="step-title-0"> <span class="ti-agenda"></span> <span class="break-line"></span> <span class="step-title">Institutions & Programmes</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-user"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-folder"></span> <span class="break-line"></span> <span class="step-title">Academic Background</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-wallet"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                @include('notifications')
                <div class="p-3 pt-5 justify-content-center mb-5 text-center">
                    <h4 class="heading">Select Institution(s)</h4>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                            Institution <span class="text-danger">*</span>
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
                                @error('institution') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                            Faculty <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="faculty"  name="faculty">
                                        <option value="">Select select faculty</option>
                                    @foreach ($programme_choices as $item)
                                        <option value="{{ $item->department }}"
                                        @if ($item->department == old('faculty', $user->faculty)) selected="selected"
                                        @endif>{{ $item->department }}</option>
                                    @endforeach
                                </select>
                                @error('faculty') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                            Department <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="department"  name="department">
                                <option value="">Select department</option>
                                    @foreach ($programme_choices as $item)
                                        <option value="{{ $item->department }}"
                                        @if ($item->department == old('department', $user->department)) selected="selected"
                                        @endif>{{ $item->department }}</option>
                                    @endforeach
                                </select>
                                @error('department') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('degree') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                            </div>
                        </div>
                    </div>
                    <!-- Second Choice -->
                    <div id="gstAccordion" data-children=".item">
                        <!-- Accordion Item 01 -->
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-12 m-auto">
                                    <div class="item-link border border-light p-3">
                                        Do you want to apply to more than one  institution/school? Click 
                                        <a class="text-info bold"  data-toggle="collapse" data-parent="#gstAccordion" href="#gstAccordion1"><b>HERE</b></a>
                                        to add more fields
                                    </div>
                                </div>
                            </div>
                            <div id="gstAccordion1" class="collapse accordion-block">
                                <div class="row justify-content-center mb-3 mt-3">
                                    <div class="col-lg-3 col-md-6 col-12 list">
                                        Institution
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 list">
                                    <fieldset>
                                        <div class="form-group">
                                            <select class="form-control" id="institution_2" name="institution_2">
                                                <option value="">Select institution</option>
                                            @foreach ($institutions as $institution)
                                                <option value="{{ $institution->institution_name }}"
                                                @if ($institution->institution_name == old('institution_2', $user->institution_2)) selected="selected"
                                                @endif>{{ $institution->institution_name }}</option>
                                            @endforeach
                                            </select>
                                            @error('institution_2') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-3">
                                    <div class="col-lg-3 col-md-6 col-12 list">
                                        Faculty
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 list">
                                        <div class="form-group">
                                            <select class="form-control" id="faculty_2"  name="faculty_2">
                                                    <option value="">Select faculty</option>
                                                @foreach ($programme_choices as $item)
                                                    <option value="{{ $item->department }}"
                                                    @if ($item->department == old('faculty_2', $user->faculty_2)) selected="selected"
                                                    @endif>{{ $item->department }}</option>
                                                @endforeach
                                            </select>
                                            @error('faculty_2') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-3">
                                    <div class="col-lg-3 col-md-6 col-12 list">
                                        Department
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 list">
                                        <div class="form-group">
                                            <select class="form-control" id="department_2"  name="department_2">
                                            <option value="">Select department</option>
                                                @foreach ($programme_choices as $item)
                                                    <option value="{{ $item->department }}"
                                                    @if ($item->department == old('department_2', $user->department_2)) selected="selected"
                                                    @endif>{{ $item->department }}</option>
                                                @endforeach
                                            </select>
                                            @error('department_2') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                        </div>
                                    </div>
                                </div> 
                                <div class="row justify-content-center mb-3">
                                    <div class="col-lg-3 col-md-6 col-12 list">
                                    Certificate
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 list">
                                        <div class="form-group">
                                            <select class="form-control" id="degree_2"  name="degree_2" >
                                                <option value="">Select a Degree/Diploma Programme</option>
                                                @foreach ($programmes as $item)
                                                    <option value="{{ $item->degree }}"
                                                    @if ($item->degree == old('degree_2', $user->degree_2)) selected="selected"
                                                    @endif>{{ $item->degree }}</option>
                                                @endforeach
                                            </select>
                                            @error('degree_2') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="item-link  p-3 br-5">

                                    </div>
                                </div>
                                <!-- Institution 3 -->
                                <div class="row justify-content-center mb-3 mt-3">
                                    <div class="col-lg-3 col-md-6 col-12 list">
                                        Institution 
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 list">
                                    <fieldset>
                                        <div class="form-group">
                                            <select class="form-control" id="institution_3" name="institution_3">
                                                <option value="">Institution</option>
                                            @foreach ($institutions as $institution)
                                                <option value="{{ $institution->institution_name }}"
                                                @if ($institution->institution_name == old('institution_3', $user->institution_3)) selected="selected"
                                                @endif>{{ $institution->institution_name }}</option>
                                            @endforeach
                                            </select>
                                            @error('institution_3') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-3">
                                    <div class="col-lg-3 col-md-6 col-12 list">
                                        Faculty
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 list">
                                        <div class="form-group">
                                            <select class="form-control" id="faculty_3"  name="faculty_3">
                                                    <option value="">Select first choice</option>
                                                @foreach ($programme_choices as $item)
                                                    <option value="{{ $item->department }}"
                                                    @if ($item->department == old('faculty_3', $user->faculty_3)) selected="selected"
                                                    @endif>{{ $item->department }}</option>
                                                @endforeach
                                            </select>
                                            @error('faculty_3') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-3">
                                    <div class="col-lg-3 col-md-6 col-12 list">
                                        Department
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 list">
                                        <div class="form-group">
                                            <select class="form-control" id="department_3"  name="department_3">
                                            <option value="">Select first choice</option>
                                                @foreach ($programme_choices as $item)
                                                    <option value="{{ $item->department }}"
                                                    @if ($item->department == old('department_3', $user->department_3)) selected="selected"
                                                    @endif>{{ $item->department }}</option>
                                                @endforeach
                                            </select>
                                            @error('department_3') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                        </div>
                                    </div>
                                </div> 
                                <div class="row justify-content-center mb-3">
                                    <div class="col-lg-3 col-md-6 col-12 list">
                                    Certificate
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 list">
                                        <div class="form-group">
                                            <select class="form-control" id="degree_3"  name="degree_3" >
                                                <option value="">Select a Degree/Diploma Programme</option>
                                                @foreach ($programmes as $item)
                                                    <option value="{{ $item->degree }}"
                                                    @if ($item->degree == old('degree_3', $user->degree_3)) selected="selected"
                                                    @endif>{{ $item->degree }}</option>
                                                @endforeach
                                            </select>
                                            @error('degree_3') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                        </div>
                                    </div>
                                </div>
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
                        <h6 class="step-title-0"> <span class="ti-folder"></span> <span class="break-line"></span> <span class="step-title">Academic Background</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-wallet"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                <div class="p-3 justify-content-center mb-5 pt-5 text-center">
                    <h4 class="heading">Applicant's Personal Information</h4>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                            First Name <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input id="first_name" name="first_name" type="text" placeholder="First Name" class="form-control required" value="{{Sentinel::getUser()->first_name}}"/>
                                @error('first_name') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('last_name') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('address') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('email') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('telephone') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('postal') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('dob') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('pob') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                <option value="m" @if($user->gender === 'm') selected="selected"
                                                    @endif >Male</option>
                                <option value="f" @if($user->gender === 'f')
                                    selected="selected" @endif >Female</option>
                                </select>
                                @error('gender') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('country') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('first_language') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Tell us something about yourself <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <textarea id="bio" name="bio" rows="10" cols="50" maxlength="200"  class="form-control required" style="min-height: 150px;">{{ old('bio', $user->bio) }}</textarea>
                                @error('bio') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                            </div>
                        </div>
                    </div>

                     <h4 class="heading">Parent/Guardian's Information</h4>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Name (as written on NIC) <span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="g_name" name="g_name"  placeholder="Guardian/Parent Name" class="form-control required" value="{{ old('g_name', $user->g_name) }}"/>
                                @error('g_name') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('g_email') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('g_telephone') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                         Occupation/Profession
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="g_occupation" name="g_occupation"  placeholder="Occupation" class="form-control required" value="{{ old('g_occupation', $user->g_occupation) }}"/>
                                @error('g_occupation') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('g_address') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                            </div>
                        </div>
                    </div>
                    <button type="button" class="form-wizard-prev-btn float-left rounded-0 mb-5 mt-3  prev"><span class="ti-arrow-left"></span>Back</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" id="next2" class="form-wizard-next-btn float-right rounded-0 mb-5 mt-3 next">Next <span class="ti-arrow-right"></span></button>
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
                        <h6 class="step-title-0"> <span class="ti-folder"></span> <span class="break-line"></span> <span class="step-title">Academic Background</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box">
                        <h6 class="step-title-0"> <span class="ti-wallet"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                <div class="p-3 pt-5 justify-content-center mb-5 text-center">
                    <h4 class="heading">Academic Background - Previous school(s) attended</h4>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Previous Institution 1<span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="previous_inst1" name="previous_inst1"   class="form-control required" value="{{ old('previous_inst1', $user->previous_inst1) }}"/>
                                @error('previous_inst1') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-4 col-md-6 col-12 list">
                            Certificate Obtained <span class="text-danger">*</span>
                            <div class="form-group">
                                <input type="text" id="certificate_from_previous_inst1" name="certificate_from_previous_inst1"   class="form-control required" value="{{ old('certificate_from_previous_inst1', $user->certificate_from_previous_inst1) }}"/>
                                @error('certificate_from_previous_inst1') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mr-auto list">
                                From <span class="text-danger">*</span>
                                <div class="form-group">
                                    <input type="date" id="previous_inst1_from" name="previous_inst1_from"   class="form-control required" value="{{ old('previous_inst1_from', $user->previous_inst1_from) }}"/>
                                    @error('previous_inst1_from') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 list">
                                To <span class="text-danger">*</span>
                                <div class="form-group">
                                    <input type="date" id="previous_inst1_to" name="previous_inst1_to"   class="form-control required" value="{{ old('previous_inst1_to', $user->previous_inst1_to) }}"/>
                                    @error('previous_inst1_to') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Previous Institution 2<span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="previous_inst2" name="previous_inst2"   class="form-control required" value="{{ old('previous_inst2', $user->previous_inst2) }}"/>
                                @error('previous_inst2') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-4 col-md-6 col-12 list">
                            Certificate Obtained <span class="text-danger">*</span>
                            <div class="form-group">
                                <input type="text" id="certificate_from_previous_inst2" name="certificate_from_previous_inst2"   class="form-control required" value="{{ old('certificate_from_previous_inst2', $user->certificate_from_previous_inst2) }}"/>
                                @error('certificate_from_previous_inst2') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12  list">
                                From <span class="text-danger">*</span>
                                <div class="form-group">
                                    <input type="date" id="previous_inst2_from" name="previous_inst2_from"   class="form-control required" value="{{ old('previous_inst2_from', $user->previous_inst2_from) }}"/>
                                    @error('previous_inst2_from') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 list">
                                To <span class="text-danger">*</span>
                                <div class="form-group">
                                    <input type="date" id="previous_inst2_to" name="previous_inst2_to"   class="form-control required" value="{{ old('previous_inst2_to', $user->previous_inst2_to) }}"/>
                                    @error('previous_inst2_to') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Previous Institution 3<span class="text-danger">*</span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="previous_inst3" name="previous_inst3"   class="form-control required" value="{{ old('previous_inst3', $user->previous_inst3) }}"/>
                                @error('previous_inst3') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-4 col-md-6 col-12 list">
                            Certificate Obtained <span class="text-danger">*</span>
                            <div class="form-group">
                                <input type="text" id="certificate_from_previous_inst3" name="certificate_from_previous_inst3"   class="form-control required" value="{{ old('certificate_from_previous_inst1', $user->certificate_from_previous_inst1) }}"/>
                               @error('certificate_from_previous_inst3') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12  list">
                                From <span class="text-danger">*</span>
                                <div class="form-group">
                                    <input type="date" id="previous_inst3_from" name="previous_inst3_from"   class="form-control required" value="{{ old('previous_inst3_from', $user->previous_inst3_from) }}"/>
                                    @error('previous_inst3_from') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 list">
                                To <span class="text-danger">*</span>
                                <div class="form-group">
                                    <input type="date" id="previous_inst3_to" name="previous_inst3_to"   class="form-control required" value="{{ old('previous_inst3_to', $user->previous_inst3_to) }}"/>
                                    @error('previous_inst3_to') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="heading">DOCUMENTS UPLOAD</h4>
                    <div class="row d-flex justify-content-center">
                        <div class="mb-5 alert-warning shadow float-left upload-info">
                            <p class="confirm list">Upload all required documents. 
                                Accepted file extensions - .jpeg, .jpg, .png,.pdf, </p>
                            <p class="confirmed list"> Maximum file size : 5MB </p>
                        </div> 
                    </div>
                    <div class="row justify-content-center mb-3 ml-5">
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
                    <div class="row justify-content-center mb-3 ml-5">
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
                    <div class="row justify-content-center mb-3 ml-5">
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
                    <div class="row justify-content-center mb-3 ml-5">
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
                    <div class="row justify-content-center mb-3 ml-5">
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

                    <button type="button" class="form-wizard-prev-btn float-left rounded-0 mb-5 mt-3 prev"><span class="ti-arrow-left"></span>Back</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" id="next3" class="form-wizard-next-btn float-right rounded-0 mb-5 mt-3 next">Next<span class="ti-arrow-right"></span></button>
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
                                @error('paid_via') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                                @error('payment_reference') <small class="error-message"><b><span class="ti-info-alt"></span>{{'This field is required'}}</b></small>  @enderror
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
                    <button type="button" class="form-wizard-prev-btn float-left rounded-0 mb-5 mt-3 prev"><span class="ti-arrow-left"></span>Back</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" id="next3" class="form-wizard-next-btn float-right rounded-0 mb-3 next">Submit</button>
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
            </div>
        </div>
    </div>
</div>
</fieldset>
{!!  Form::close()  !!}


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
<script>
function addRow() {
   let row = $('tbody tr:first').clone();
   row.find('input[type!=button]').val('');
   $('#tbl tbody').append(row);
}

$('#tbl').on('click', '.add-row', addRow);

$('#tbl').on('change', 'input', function() {
  if($(this).val() != '' &&
     $(this).closest('tr').is(':last-child')) {
    addRow();
  }
});
</script>
</body>
</html>
