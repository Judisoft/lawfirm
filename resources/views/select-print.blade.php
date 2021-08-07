@extends('layouts/starter')

{{-- Page title --}}
@section('title')
Print App Form
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<link rel="stylesheet" href="{{asset('plugins1/user_account/style.css')}}">
@stop

<style>
body{
    background: linear-gradient(180deg, #293A4A 400px, #FFF 250px);
}
h3 {
    font-weight: 400 !important;
	font-size: 36px !important;
    line-height: 1rem;
}
li {
    font-weight: 500;
}
p{
	color: #000 !important;
	font-weight: 400;
	padding: 10px;
}
.scroll-top-to {
   padding-top: 10px;
}
.mt-10{
    margin-top: 50px !important;
}
select{
    border: 3px solid var(--primary);
    width: 100%;
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
    font-weight: 500 !important;
    text-transform: capitalize;
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
.big-font{
    font-size: 110px !important;
    opacity: 0.4;
}
</style>
{{-- Page content --}}
@section('content')

<section class="privacy section mt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
                <h2 class="text-light text-center mb-3">Print Application Form</h2>
		    </div>
	    </div>
    </div>
    @if($user->institution != null)
        <table class="fl-table">
            <thead>
            <tr>
                <th>Institution</th>
                <th>Faculty</th>
                <th>Department</th>
                <th>Certificate</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$user->institution}}</td>
                    <td>{{$user->faculty}}</td>
                    <td>{{$user->department}}</td>
                    <td>{{$user->degree}}</td>
                    <td><a href="{{route('printOne')}}" class="btn-print p-2"><span class="ti ti-printer px-2"></span>Print</a></td>
                </tr>
            @if($user->institution_2 != null)
                <tr>
                    <td>{{$user->institution_2}}</td>
                    <td>{{$user->faculty_2}}</td>
                    <td>{{$user->department_2}}</td>
                    <td>{{$user->degree_2}}</td>
                    <td><a href="{{route('printTwo')}}" class="btn-print p-2"><span class="ti ti-printer px-2"></span>Print</a></td>
                </tr>
            @endif
            @if($user->institution_3 != null)
                <tr>
                    <td>{{$user->institution_3}}</td>
                    <td>{{$user->faculty_3}}</td>
                    <td>{{$user->department_3}}</td>
                    <td>{{$user->degree_3}}</td>
                    <td><a href="{{route('printThree')}}" class="btn-print p-2"><span class="ti ti-printer px-2"></span>Print</a></td>
                </tr>
            @endif
            <tbody>
        </table>
    @endif
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12">
                @if($user->institution == null)
                    <div class="section-title">
                        <span class="ti-folder big-font"></span>
                        <h4 class="mt-3 mb-3" style="opacity: 0.5;">You don't have a complete application to print</h4>
                    </div>
                @endif
			</div>
		</div>
	</div>
</section>
   
@stop

