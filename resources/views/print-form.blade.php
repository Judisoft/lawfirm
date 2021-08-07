<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration form</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{asset('plugins1/themify-icons/themify-icons.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
body, section{
    padding: 15px;
    margin: auto;
}
.img-frame{
    max-height: 150px;
    max-width: 150px;
    padding: 10px;
}
.bold{
    font-weight:600 ;
}
h6{
    font-size: 16px;
}
h5{
    font-size: 16px;
    color: #000;
}

h3{
    color: #000;
    font-size: 24px;
    font-weight: 600 !important;
    padding: 20px 10px 0 10px !important;
}
legend{
    border-bottom: 1px solid #ccc;
}
.digital-signature-card{
    display: block;
    height: 150px;
    border: 1px dotted #ccc;

}
.border-line{
    border-bottom:3px dotted var(--dark);
}
small{
    font-size: 14px !important;
    font-weight: 400;
    padding-right: 30px;
    padding-left: 30px;
}
.btn-print{
    background-color:#D5DDE6;
    border-color: #D5DDE6;
    color: var(--dark);
    display: inline-block;
    min-width: 100px;
    padding: 5px;
    border-radius: 5px;
    text-transform: lowercase;
    text-align: center;

}
</style>
<body>
  <!-- Content Wrapper. Contains page content -->
    <section class="content m-auto">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
             <div class="mr-3 p-2"><a href="{{route('print')}}" target="_blank" class="btn-print"><i class="ti-printer"></i> Print</a></div>
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex flex-column">
                        <div class="justify-content-center">
                            <img src="{{asset('images/help.png')}}" class="img-frame" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3 class="text-center text-dark text-uppercase bold border-line pb-1"><b>@if($user->institution) {{$user->institution}} @else <em>no institution choosen</em> @endif</b></h3>
                    <h4 class="text-center border-line pt-3 pb-3"><b> APPLICATION FORM</b></h4>
                </div>
                <div class="col-lg-4">
                    <img src="{{$user->pic}}" class="img-frame float-right" />
                </div>
                <p class="bold">
                        <small>
                            Address: @foreach($institution_info as $inst) {{$inst->city. ', ' .$inst->region. ' ' .'Region '}} @endforeach
                        </small>
                        <small class="pl-5">
                            Website: @foreach($institution_info as $inst) {{$inst->website}} @endforeach
                        </small>
                        <small class="pl-5">
                            Email: @foreach($institution_info as $inst) {{$inst->email}} @endforeach
                        </small>
                        <small class="pl-5">
                            Telephone: @foreach($institution_info as $inst) {{$inst->telephone}} @endforeach
                        </small>
                    </p>
                <!-- /.col -->
                </div>
                <fieldset>
                    <legend><h3 class="text-uppercase bold">Programme Choice</h3></legend>
                    <div class="row justify-content-between mx-auto step-container">
                        <div class="col-md-3 col-4">
                            <div class="d-flex flex-row">
                                <div class="p-2"><h6 class="text-capitalize">Faculty:</h6></div>
                                <div class="p-2"><h5 class="text-uppercase bold">{{$user->faculty}}</h5></div>
                            </div>
                            
                        </div>
                        <div class="col-md-3 col-4">
                            <div class="d-flex flex-row">
                                <div class="p-2"><h6 class="text-capitalize">Department:</h6></div>
                                <div class="p-2"><h5 class="text-uppercase bold">{{$user->department}}</h5></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-4">
                            <div class="d-flex flex-row">
                                <div class="p-2"><h6 class="text-capitalize">Certificate:</h6></div>
                                <div class="p-2"><h5 class="text-uppercase bold">{{$user->degree}}</h5></div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend><h3 class="text-uppercase bold">Personal Information</h3></legend>
                    <div class="row justify-content-between mx-auto step-container">
                        <div class="col-md-3 col-4">
                            <div class="d-flex flex-row">
                                <div class="p-2"><h6 class="text-capitalize">First Name:</h6></div>
                                <div class="p-2"><h5 class="text-uppercase bold">{{$user->first_name}}</h5></div>
                            </div>
                            
                        </div>
                        <div class="col-md-3 col-4">
                            <div class="d-flex flex-row">
                                <div class="p-2"><h6 class="text-capitalize">Last Name:</h6></div>
                                <div class="p-2"><h5 class="text-uppercase bold">{{$user->last_name}}</h5></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-4">
                            <div class="d-flex flex-row">
                                <div class="p-2"><h6 class="text-capitalize">Gender:</h6></div>
                                <div class="p-2"><h5 class="text-uppercase bold">{{$user->gender}}</h5></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between mx-auto step-container">
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6>Date of Birth:</h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold">{{$user->dob}}</h5></div>
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize">Place of Birth</h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold">{{$user->pob}}</h5></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize">Marital Status:</h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold">{{$user->marital_status}}</h5></div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between mx-auto step-container">
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize">Town/City:</h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold">{{$user->address}}</h5></div>
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize">Mobile Telephone:</h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold">{{$user->telephone}}</h5></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize">Postal Address:</h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold">{{$user->postal}}</h5></div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between mx-auto step-container">
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize">Email:</h6></div>
                            <div class="p-2"><h5 class="text-lowercase bold">{{$user->email}}</h5></div>
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize">Nationality:</h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold">{{$user->country}}</h5></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize"></h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold"></h5></div>
                        </div>
                    </div>
                </div>
                </fieldset>
                <fieldset>
                    <legend><h3 class="text-uppercase bold">Guardian/Parent Information</h3></legend>
                    <div class="row justify-content-between mx-auto step-container">
                        <div class="col-md-3 col-4">
                            <div class="d-flex flex-row">
                                <div class="p-2"><h6 class="text-capitalize">Name:</h6></div>
                                <div class="p-2"><h5 class="text-uppercase bold">{{$user->g_name}}</h5></div>
                            </div>
                            
                        </div>
                        <div class="col-md-3 col-4">
                            <div class="d-flex flex-row">
                                <div class="p-2"><h6 class="text-capitalize">Email:</h6></div>
                                <div class="p-2"><h5 class="text-lowercase bold">{{$user->g_email}}</h5></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-4">
                            <div class="d-flex flex-row">
                                <div class="p-2"><h6 class="text-capitalize">Telephone:</h6></div>
                                <div class="p-2"><h5 class="text-uppercase bold">{{$user->g_telephone}}</h5></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between mx-auto step-container">
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6>Occupation:</h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold">{{$user->g_occupation}}</h5></div>
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize">Address:</h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold">{{$user->g_address}}</h5></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize"></h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold"></h5></div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between mx-auto step-container">
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize">Town/City:</h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold">{{$user->address}}</h5></div>
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize">Mobile Telephone:</h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold">{{$user->telephone}}</h5></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize">Postal Address:</h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold">{{$user->postal}}</h5></div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between mx-auto step-container">
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize">Email:</h6></div>
                            <div class="p-2"><h5 class="text-lowercase bold">{{$user->email}}</h5></div>
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize">Nationality:</h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold">{{$user->country}}</h5></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-4">
                        <div class="d-flex flex-row">
                            <div class="p-2"><h6 class="text-capitalize"></h6></div>
                            <div class="p-2"><h5 class="text-uppercase bold"></h5></div>
                        </div>
                    </div>
                </div>
                </fieldset>
        <fieldset>
            <legend><h3 class="text-uppercase bold">Academic Background</h3></legend>  
             <!-- Table row -->
              <div class="row">
                <div class="col-lg-12 m-auto table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead class="bg-dark">
                    <tr>
                      <th>School</th>
                      <th>Certificate Obtained</th>
                      <th>From</th>
                      <th>To</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if(!$user->previous_inst1 == null)
                        <tr>
                        <td>{{ $user->previous_inst1 }}</td>
                        <td>{{$user->certificate_from_previous_inst1}}</td>
                        <td>{{$user->previous_inst1_from}}</td>
                        <td>{{$user->previous_inst1_to}}</td>
                        </tr>
                        @endif
                        @if(!$user->previous_inst2 == null)
                        <tr>
                        <td>{{ $user->previous_inst2 }}</td>
                        <td>{{$user->certificate_from_previous_inst2}}</td>
                        <td>{{$user->previous_inst2_from}}</td>
                        <td>{{$user->previous_inst2_to}}</td>
                        </tr>
                        @endif
                        @if(!$user->previous_inst3 == null)
                        <tr>
                        <td>{{ $user->previous_inst3 }}</td>
                        <td>{{$user->certificate_from_previous_inst3}}</td>
                        <td>{{$user->previous_inst3_from}}</td>
                        <td>{{$user->previous_inst3_to}}</td>
                        </tr>
                        @endif
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
        </fieldset>

              <div class="row">
                <!-- office use only -->
                <div class="col-lg-6">
                    <h6 class="text-uppercase bold">Applicant Declaration</h6>
                    <p>I hereby declare that all the information provided in this application is 
                        true to the best of my knowledge and understanding. I understand that
                        any willful dishonesty may render for refusal of admission and dismissal if
                        admission is given.
                    </p>
                </div>
                <!-- /.col -->
                <div class="col-lg-6">
                    <div class="float-right">{!! QrCode::size(150)->generate('ItSolutionStuff.com'); !!}</div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-lg-12 mb-3 mt-2">
                    <small class="float-left">Applicant's Signature</small>
                    <small class="float-right">
                    Printed on the {{date("F j, Y")}}
                    </small>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  <div class="text-center bg-dark py-4">
    <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by <a href="{{ route('home') }}" class="text-light">FalconsTech</a></small class="text-secondary">
  </div>
</footer>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript"> 
    window.addEventListener("load", window.print());
</script>
</body>
</html>
