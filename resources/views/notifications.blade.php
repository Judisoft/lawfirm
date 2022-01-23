
<style>
.error-message{
    color: var(--danger);
    font-size: 12px;
    background-color: transparent;
    padding:10px;
    margin: auto;
}
.success-message{
    color: var(--success);
    font-size: 12px;
    background-color: transparent;
    padding:10px;
    margin: 5px;
}
.info-message{
    color: var(--info);
    font-size: 12px;
    background-color: transparent;
    padding:10px;
    margin: auto;
}
.warning-message{
    color: var(--warning);
    font-size: 12px;
    background-color: transparent;
    padding:10px;
    margin: auto;
}
</style>


@if ($errors->any())
<div class="error-message">
  <strong>Please check the form below for errors</strong> 
</div>
@endif

@if ($message = Session::get('success'))
<div class="success-message">
    <strong>{{ $message }}</strong> 
</div>
@endif

@if ($message = Session::get('error'))
<div class="error-message">
    <strong>{{ $message }}</strong> 
</div>
@endif

@if ($message = Session::get('warning'))
<div class="warming-message">
    <strong>{{ $message }}</strong> 
</div>
@endif

@if ($message = Session::get('info'))
<div class="info-message">
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('msg'))
    <div class="alert alert-danger alert-dismissable margin5">
        <strong>{{ $message }}</strong> 
    </div>
@endif