 {!! Form::model($user, ['url' => URL::to('my-account'), 'method' => 'put', 'name' => 'myForm', 'class' => 'form-horizontal','enctype'=>"multipart/form-data"]) !!}
{{ csrf_field() }}
<fieldset>
                            <div class="form-group">
                                <select class="form-control" id="institution" name="institution">
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
                                <select class="form-control"  name="degree" >
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
                                <select class="form-control"  name="first_choice">
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
                                <select class="form-control"  name="second_choice">
                                    @foreach ($programme_choices as $item)
                                        <option value="{{ $item->department }}"
                                        @if ($item->department == old('second_choice', $user->second_choice)) selected="selected"
                                        @endif>{{ $item->department }}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger"><b>{{ $errors->first('second_choice', ':message') }}</b></small>
                            </div>
                        </div>
                    </div>  
                    <button type="button" class="form-wizard-next-btn float-right rounded-0 mb-5 next">Next <span class="ti-arrow-right"></span></button>
                </div>
            </div>
            <div class="card b-0 rounded-0">
                <div class="row justify-content-between mx-auto step-container">
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="ti-check"></span> <span class="break-line"></span> <span class="step-title">Programme Choice</span></h6>
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
                            First Name
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input id="first_name" name="first_name" type="text" placeholder="First Name" class="form-control required" value="{{Sentinel::getUser()->first_name}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                            Last Name
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input id="last_name" name="last_name" type="text" placeholder="Last Name" class="form-control required" value="{{Sentinel::getUser()->last_name}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                         Address
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" name="address"  placeholder="Address" class="form-control required" value="{{ old('address', $user->address) }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                            Email
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="email" id="email" name="email"  placeholder="Email" class="form-control required" value="{{old('email', $user->email)}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Telephone
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="telephone" name="telephone"  placeholder="Telephone" class="form-control required" value="{{old('telephone', $user->telephone) }}"/>
                            </div>
                        </div>
                    </div>
                     <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Postal
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="postal" name="postal"  placeholder="Postal Address" class="form-control required" value="{{old('postal', $user->postal) }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Date of Birth
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="date" id="dob" name="dob"  class="form-control required" value="{{ old('dob', $user->dob) }}" data-date-format="YYYY-MM-DD" placeholder="yyyy-mm-dd"/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Place of Birth
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="pob" name="pob"  placeholder="Place of birth" class="form-control required" value="{!! old('pob') !!}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Gender
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
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                           Marital Status
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="customCheck1" name="marital_status">
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
                           Nationality
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="third_choice" name="nationality">
                                    @foreach ($countries as $country)
                                     <option value="{{ $country->name }}"
                                        @if ($country->name == old('nationality', $user->nationality)) selected="selected"
                                        @endif>{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          First Language
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <select class="form-control" id="first_language" name="first_language">
                                    <option value="english" @if($user->first_language === 'english') selected="selected"
                                                    @endif >English</option>
                                    <option value="French" @if($user->first_language === 'french')
                                        selected="selected" @endif >French</option>
                                </select>
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
                          Name (as written on NIC)
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="g_name" name="g_name"  placeholder="First Name" class="form-control required" value="{{ old('g_name', $user->g_name) }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Email
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="g_email" name="g_email"  placeholder="Email" class="form-control required" value="{{ old('g_email', $user->g_email) }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Telephone
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="g_telephone" name="g_telephone"  placeholder="Telephone" class="form-control required" value="{{ old('g_telephone', $user->g_telephone) }}"/>
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
                          Address
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="g_address" name="g_address"  placeholder="Address" class="form-control required" value="{{ old('guardian_address', $user->g_address) }}"/>
                            </div>
                        </div>
                    </div>

                    <h4 class="heading">Previous school(s) attended</h4>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Secondary school
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="previous_inst1" name="previous_inst1"  placeholder="Secondary School" class="form-control required" value="{{ old('previous_inst1', $user->previous_inst1) }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          High school
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="previous_inst2" name="previous_inst2"  placeholder="Higher Education" class="form-control required" value="{{ old('previous_inst2', $user->previous_inst2) }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          University/Higher Institution
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="text" id="previous_inst3" name="previous_inst3"  placeholder="Higher Institution" class="form-control required" value="{{ old('previous_inst3', $user->previous_inst3) }}"/>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary float-left rounded-0 mb-5 mt-3  prev"><span class="ti-arrow-left"></span>Back</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" id="next2" class="form-wizard-next-btn float-right rounded-0 mb-4 next">Next <span class="ti-arrow-right"></span></button>
                    
                </div>
            </div>
            <div class="card b-0 rounded-0">
                <div class="row justify-content-center mx-auto step-container">
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="ti-check"></span> <span class="break-line"></span> <span class="step-title">Programme Choice</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="ti-check"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
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
                        <div class="mb-4">
                            <h6 class="confirm">Upload all required documents.</h6>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          GCE O/L Certificate
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="file" class="custom-file-input" id="doc1" name="doc1">
                                <label class="custom-file-label" for="doc1">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          GCE A/L Certificate <br>or<br>Result Slip
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="file" class="custom-file-input" id="doc2" name="doc2">
                                <label class="custom-file-label" for="doc2">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-lg-3 col-md-6 col-12 list">
                          Others
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 list">
                            <div class="form-group">
                                <input type="file" class="custom-file-input" id="doc3" name="doc3">
                                <label class="custom-file-label" for="doc3">Choose file</label>
                            </div>
                        </div>
                    </div>
 
                    <button type="button" class="btn btn-secondary float-left rounded-0 mb-5 prev"><span class="ti-arrow-left"></span>Back</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" id="next3" class="form-wizard-next-btn float-right rounded-0 mb-5 next">Next <span class="ti-arrow-right"></span></button>
                </div>
            </div>
            <div class="card b-0 rounded-0">
                <div class="row justify-content-center mx-auto step-container">
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="ti-check"></span> <span class="break-line"></span> <span class="step-title">Programme Choice</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="ti-check"></span> <span class="break-line"></span> <span class="step-title">Personal Information</span></h6>
                    </div>
                    <div class="col-md-3 col-4 step-box completed">
                        <h6 class="step-title-0"> <span class="ti-check"></span> <span class="break-line"></span> <span class="step-title">Doucuments Upload</span> </h6>
                    </div>
                    <div class="col-md-3 col-4 step-box active">
                        <h6 class="step-title-0"> <span class="ti-wallet"></span> <span class="break-line"></span> <span class="step-title">Payment</span> </h6>
                    </div>
                </div>
                <div class="p-3 justify-content-center mb-5 pt-5 text-center">
                    <h4 class="heading">Verify and Confirm</h4>
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
                                        <a>{{old('last_name', $user->nationality)}}</a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>First Language</td>
                                    <td>
                                        <a>{{old('firs_language', $user->first_language)}}</a>
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
                                        <a>{{old('previous_inst1', $user->prev_inst1)}}</a>
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
                    <button type="button" class="btn btn-secondary float-left rounded-0 mb-5 prev"><span class="ti-arrow-left"></span>Back</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-success float-right rounded-0 mb-5 next">Confirm </button>
                </div>
            </div>
            </fieldset>
            {!!  Form::close()  !!}
            