@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')

@parent
@stop

{{-- page level styles --}}
@section('header_styles')

<link href="{{ asset('vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/pages/calendar_custom.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="all" href="{{ asset('vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css') }}" />
<link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/pages/only_dashboard.css') }}" />
<meta name="_token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css') }}">

@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
    <ol class="breadcrumb">
        <li class=" breadcrumb-item active">
            <a href="#">
                <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                Dashboard
            </a>
        </li>
    </ol>
</section>
<section class="content indexpage pr-3 pl-3">
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 margin_10">
            <!-- Trans label pie charts strats here-->
            <div class="lightbluebg bg-primary text-white no-radius">
                <div class="card-body squarebox square_boxs cardpaddng">
                    <div class="row">
                        <div class="col-12 float-left nopadmar">
                            <div class="row">
                                <div class="square_box col-6 text-right">
                                    <span>Views Today</span>

                                    <div class="number">0</div>
                                </div>
                                <div class="col-6">
                                    <i class="livicon  float-right" data-name="eye-open" data-l="true" data-c="#fff"
                                        data-hc="#fff" data-s="70"></i>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <small class="stat-label">Last Week</small>
                                    <h4>0</h4>
                                </div>
                                <div class="col-6 text-right">
                                    <small class="stat-label">Last Month</small>
                                    <h4>0</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 my-3">
            <div class="card card-border">
                <div class="card-header bg-success text-white">

                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff"
                        data-hc="#fff"></i> Calendar

                </div>
                <div class="card-body">
                    <div id='external-events'></div>
                    <div id="calendar"></div>
                    <div id="fullCalModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 id="modalTitle" class="modal-title"></h4>
                                    <button type="button" class="close" data-dismiss="modal"><span
                                            aria-hidden="true">×</span> <span class="sr-only">close</span></button>

                                </div>
                                <div id="modalBody" class="modal-body">
                                    <i class="mdi-action-alarm-on"></i>&nbsp;&nbsp;Start: <span
                                        id="startTime"></span>&nbsp;&nbsp;-
                                    End: <span id="endTime"></span>
                                    <h4 id="eventInfo"></h4>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-raised btn-danger " data-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-footer pad-5">
                        <a href="#" class="btn btn-success btn-block createevent_btn clr" data-toggle="modal"
                            data-target="#myModal">Create event
                        </a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title mr-auto" id="myModalLabel">
                                        <i class="fa fa-plus"></i> Create Event
                                    </h4>
                                    <button type="button" class="close reset" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group">
                                        <input type="text" id="new-event" class="form-control" placeholder="Event">
                                        <div class="input-group-btn">
                                            <button type="button" id="color-chooser-btn"
                                                class="color-chooser btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                                Type
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu float-right" id="color-chooser">
                                                <li>
                                                    <a class="palette-primary" href="#">Primary</a>
                                                </li>
                                                <li>
                                                    <a class="palette-success" href="#">Success</a>
                                                </li>
                                                <li>
                                                    <a class="palette-info" href="#">Info</a>
                                                </li>
                                                <li>
                                                    <a class="palette-warning" href="#">warning</a>
                                                </li>
                                                <li>
                                                    <a class="palette-danger" href="#">Danger</a>
                                                </li>
                                                <li>
                                                    <a class="palette-default" href="#">Default</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /btn-group -->
                                    </div>
                                    <!-- /input-group -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success mr-auto" id="add-new-event"
                                        data-dismiss="modal">
                                        <i class="fa fa-plus"></i> Add
                                    </button>
                                    <button type="button" class="btn btn-danger justify-content-end reset"
                                        data-dismiss="modal">
                                        Close
                                        <i class="fa fa-times"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="evt_modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">
                                        <i class="fa fa-plus"></i>
                                        Edit Event
                                    </h4>
                                    <button type="button" class="close reset" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>


                                </div>
                                <div class="modal-body">
                                    <div class="input-group">
                                        <input type="text" id="event_title" class="form-control" placeholder="Event">
                                        <div class="input-group-btn">
                                            <button type="button" id="color-chooser-btn_edit"
                                                class="color-chooser btn btn-info dropdown-toggle "
                                                data-toggle="dropdown">
                                                Type
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu float-right" id="color-chooser">
                                                <li>
                                                    <a class="palette-primary" href="#">Primary</a>
                                                </li>
                                                <li>
                                                    <a class="palette-success" href="#">Success</a>
                                                </li>
                                                <li>
                                                    <a class="palette-info" href="#">Info</a>
                                                </li>
                                                <li>
                                                    <a class="palette-warning" href="#">warning</a>
                                                </li>
                                                <li>
                                                    <a class="palette-danger" href="#">Danger</a>
                                                </li>
                                                <li>
                                                    <a class="palette-default" href="#">Default</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /btn-group -->
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success mr-auto text_save"
                                        data-dismiss="modal">
                                        Update
                                    </button>
                                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">
                                        Close
                                        <i class="fa fa-times"></i>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- To do list -->
        <div class="col-lg-6 col-md-6 col-sm-6 my-3">
            <div class="card todolist">
                <div class="card-header bg-primary text-white ">
                    <span class=" background_color">
                        <i class="livicon" data-name="medal" data-size="18" data-color="white" data-hc="white"
                            data-l="true"></i>
                        Tasks
                    </span>
                </div>
                <div class="card-body nopadmar top_height">
                    <div class="card-body">
                        <div class="scroller_height">
                            <div class="row list_of_items">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="add_list adds bg_white">
                        {!! Form::open(['class'=>'form', 'id'=>'main_input_box']) !!}
                        <div class="form-group">
                            {!! Form::label('task_description', 'Task description: ') !!}
                            {!! Form::text('task_description', null, ['class' =>
                            'form-control','id'=>'task_description', 'required' => 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('task_deadline', 'Deadline: ') !!}
                            {!! Form::text('task_deadline', null, ['class' => 'form-control datepicker',
                            'id'=>'task_deadline', 'data-date-format'=> 'YYYY/MM/DD', 'required' =>
                            'required','autocomplete' => 'off']) !!}
                        </div>
                        <button type="submit" class="btn btn-primary add_button">
                            Add Task
                        </button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="editConfirmModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Alert</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body">
                <p>You are already editing a row, you must save or cancel that row before edit/delete a new row</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('vendors/moment/js/moment.min.js') }}"></script>
<script type="text/javascript"
    src="{{ asset('vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}"></script>

<!-- EASY PIE CHART JS -->
<script src="{{ asset('vendors/bower-jquery-easyPieChart/js/easypiechart.min.js') }}"></script>
<script src="{{ asset('vendors/bower-jquery-easyPieChart/js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('vendors/bower-jquery-easyPieChart/js/jquery.easingpie.js') }}"></script>
<!--for calendar-->
<script src="{{ asset('vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/fullcalendar/js/fullcalendar.min.js') }}" type="text/javascript"></script>
<!--   Realtime Server Load  -->
<script src="{{ asset('vendors/flotchart/js/jquery.flot.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/flotchart/js/jquery.flot.resize.js') }}" type="text/javascript"></script>
<!--Sparkline Chart-->
<script src="{{ asset('vendors/sparklinecharts/jquery.sparkline.js') }}"></script>
<!-- Back to Top-->
<script type="text/javascript" src="{{ asset('vendors/countUp.js/js/countUp.js') }}"></script>
<!--   maps -->
<script src="{{ asset('vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js') }}"></script>
<!--  todolist-->
<script src="{{ asset('js/pages/todolist.js') }}"></script>
<script src="{{ asset('js/pages/dashboard.js') }}" type="text/javascript"></script>


<!--//jquery-ui-->

{{--<script src="{{ asset('js/pages/jquery-ui.min.js') }}" type="text/javascript"></script>--}}

@stop
