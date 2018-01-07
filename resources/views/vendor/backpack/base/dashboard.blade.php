@extends('backpack::layout')
<!-- bootstrap 3.0.2 -->
@section('before_styles')
{{--

<link href="/AdminLTE _ Calendar_files/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- font Awesome -->
        <link href="/AdminLTE _ Calendar_files/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Ionicons -->
        <link href="/AdminLTE _ Calendar_files/ionicons.min.css" rel="stylesheet" type="text/css">
         <!-- Theme style -->
        <link href="/AdminLTE _ Calendar_files/AdminLTE.css" rel="stylesheet" type="text/css">

  --}}
         <!-- fullCalendar -->
        <link href="/AdminLTE _ Calendar_files/fullcalendar.css" rel="stylesheet" type="text/css">
        <link href="/AdminLTE _ Calendar_files/fullcalendar.print.css" rel="stylesheet" type="text/css" media="print">
        @endsection
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('admin') }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('backpack::base.login_status') }}</div>
                </div>

                <div class="box-body">{{ trans('backpack::base.logged_in') }}<br> Apa Khabar {{ Auth::user()->name }} ?</div>
                
            </div>
        </div>
    </div>
      <div class="row">
                        <div class="col-md-3">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h4 class="box-title">Draggable Events</h4>
                                </div>
                                <div class="box-body">
                                    <!-- the events -->
                                    <div id="external-events">                                        
                                        <div class="external-event bg-green ui-draggable" style="position: relative;">Lunch</div>
                                        <div class="external-event bg-red ui-draggable" style="position: relative;">Go home</div>
                                        <div class="external-event bg-aqua ui-draggable" style="position: relative;">Do homework</div>
                                        <div class="external-event bg-yellow ui-draggable" style="position: relative; z-index: auto; left: 0px; top: 0px;">Work on UI design</div>
                                        <div class="external-event bg-navy ui-draggable" style="position: relative;">Sleep tight</div>
                                        <p>
                                            <div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" id="drop-remove" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <label for="drop-remove" class="">remove after drop</label>
                                        </p>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Create Event</h3>
                                </div>
                                <div class="box-body">
                                    <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                        <button type="button" id="color-chooser-btn" class="btn btn-danger btn-block btn-sm dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>
                                        <ul class="dropdown-menu" id="color-chooser">
                                            <li><a class="text-green" href="http://ngiriraj.com/pages/calendar.html#"><i class="fa fa-square"></i> Green</a></li>
                                            <li><a class="text-blue" href="http://ngiriraj.com/pages/calendar.html#"><i class="fa fa-square"></i> Blue</a></li>                                            
                                            <li><a class="text-navy" href="http://ngiriraj.com/pages/calendar.html#"><i class="fa fa-square"></i> Navy</a></li>                                            
                                            <li><a class="text-yellow" href="http://ngiriraj.com/pages/calendar.html#"><i class="fa fa-square"></i> Yellow</a></li>
                                            <li><a class="text-orange" href="http://ngiriraj.com/pages/calendar.html#"><i class="fa fa-square"></i> Orange</a></li>
                                            <li><a class="text-aqua" href="http://ngiriraj.com/pages/calendar.html#"><i class="fa fa-square"></i> Aqua</a></li>
                                            <li><a class="text-red" href="http://ngiriraj.com/pages/calendar.html#"><i class="fa fa-square"></i> Red</a></li>
                                            <li><a class="text-fuchsia" href="http://ngiriraj.com/pages/calendar.html#"><i class="fa fa-square"></i> Fuchsia</a></li>
                                            <li><a class="text-purple" href="http://ngiriraj.com/pages/calendar.html#"><i class="fa fa-square"></i> Purple</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="input-group">                                          
                                        <input id="new-event" type="text" class="form-control" placeholder="Event Title">
                                        <div class="input-group-btn">
                                            <button id="add-new-event" type="button" class="btn btn-default btn-flat">Add</button>
                                        </div><!-- /btn-group -->
                                    </div><!-- /input-group -->
                                </div>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-9">
                            <div class="box box-primary">                                
                                <div class="box-body no-padding">
                                    <!-- THE CALENDAR -->
                                    <div id="calendar" class="fc fc-ltr"><table class="fc-header" style="width:100%"><tbody><tr><td class="fc-header-left"><span class="fc-button fc-button-prev fc-state-default fc-corner-left" unselectable="on"><span class="fa fa-caret-left"></span></span><span class="fc-button fc-button-next fc-state-default fc-corner-right" unselectable="on"><span class="fa fa-caret-right"></span></span><span class="fc-header-space"></span><span class="fc-button fc-button-today fc-state-default fc-corner-left fc-corner-right fc-state-disabled" unselectable="on">today</span></td><td class="fc-header-center"><span class="fc-header-title"><h2>May 28 — Jun 3 2017</h2></span></td><td class="fc-header-right"><span class="fc-button fc-button-month fc-state-default fc-corner-left" unselectable="on">month</span><span class="fc-button fc-button-agendaWeek fc-state-default fc-state-active" unselectable="on">week</span><span class="fc-button fc-button-agendaDay fc-state-default fc-corner-right" unselectable="on">day</span></td></tr></tbody></table><div class="fc-content" style="position: relative;"><div class="fc-view fc-view-agendaWeek fc-agenda" style="position:relative" unselectable="on"><table style="width:100%" class="fc-agenda-days fc-border-separate" cellspacing="0"><thead><tr class="fc-first fc-last"><th class="fc-agenda-axis fc-widget-header fc-first" style="width: 50px;">&nbsp;</th><th class="fc-sun fc-col0 fc-widget-header" style="width: 107px;">Sun 5/28</th><th class="fc-mon fc-col1 fc-widget-header" style="width: 107px;">Mon 5/29</th><th class="fc-tue fc-col2 fc-widget-header" style="width: 107px;">Tue 5/30</th><th class="fc-wed fc-col3 fc-widget-header" style="width: 107px;">Wed 5/31</th><th class="fc-thu fc-col4 fc-widget-header" style="width: 107px;">Thu 6/1</th><th class="fc-fri fc-col5 fc-widget-header" style="width: 107px;">Fri 6/2</th><th class="fc-sat fc-col6 fc-widget-header">Sat 6/3</th><th class="fc-agenda-gutter fc-widget-header fc-last" style="width: 17px;">&nbsp;</th></tr></thead><tbody><tr class="fc-first fc-last"><th class="fc-agenda-axis fc-widget-header fc-first">&nbsp;</th><td class="fc-col0 fc-sun fc-widget-content fc-past"><div style="height: 582px;"><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td><td class="fc-col1 fc-mon fc-widget-content fc-past"><div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td><td class="fc-col2 fc-tue fc-widget-content fc-past"><div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td><td class="fc-col3 fc-wed fc-widget-content fc-past"><div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td><td class="fc-col4 fc-thu fc-widget-content fc-past"><div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td><td class="fc-col5 fc-fri fc-widget-content fc-past"><div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td><td class="fc-col6 fc-sat fc-widget-content fc-state-highlight fc-today"><div><div class="fc-day-content"><div style="position:relative">&nbsp;</div></div></div></td><td class="fc-agenda-gutter fc-widget-content fc-last" style="width: 17px;">&nbsp;</td></tr></tbody></table><div style="position: absolute; z-index: 2; left: 0px; width: 100%; top: 22px;"><div class="fc-event-container" style="position:absolute;z-index:8;top:0;left:0"><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 481px; background-color: rgb(245, 105, 84); border-color: rgb(245, 105, 84); width: 102px; top: 2px;"><div class="fc-event-inner"><span class="fc-event-title">All Day Event</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div><div class="fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end" style="position: absolute; left: 52px; background-color: rgb(243, 156, 18); border-color: rgb(243, 156, 18); width: 424px; top: 2px;"><div class="fc-event-inner"><span class="fc-event-title">Long Event</span></div><div class="ui-resizable-handle ui-resizable-e">&nbsp;&nbsp;&nbsp;</div></div></div><table style="width:100%" class="fc-agenda-allday" cellspacing="0"><tbody><tr><th class="fc-widget-header fc-agenda-axis" style="width: 50px;">all-day</th><td><div class="fc-day-content"><div style="position: relative; height: 19px;"></div></div></td><th class="fc-widget-header fc-agenda-gutter" style="width: 17px;">&nbsp;</th></tr></tbody></table><div class="fc-agenda-divider fc-widget-header"><div class="fc-agenda-divider-inner"></div></div><div style="position: absolute; width: 100%; overflow-x: hidden; overflow-y: auto; height: 544px;"><div style="position:relative;width:100%;overflow:hidden"><div class="fc-event-container" style="position:absolute;z-index:8;top:0;left:0"><div class="fc-event fc-event-vert fc-event-draggable fc-event-start fc-event-end" style="position: absolute; top: 440px; left: 588px; background-color: rgb(0, 115, 183); border-color: rgb(0, 115, 183); width: 77.45px; height: 82px;"><div class="fc-event-inner"><div class="fc-event-time">10:30</div><div class="fc-event-title">Meeting</div></div><div class="fc-event-bg"></div><div class="ui-resizable-handle ui-resizable-s">=</div></div><div class="fc-event fc-event-vert fc-event-draggable fc-event-start fc-event-end" style="position: absolute; top: 503px; left: 637.725px; background-color: rgb(0, 192, 239); border-color: rgb(0, 192, 239); width: 47.725px; height: 82px;"><div class="fc-event-inner"><div class="fc-event-time">12:00 - 2:00</div><div class="fc-event-title">Lunch</div></div><div class="fc-event-bg"></div><div class="ui-resizable-handle ui-resizable-s">=</div></div><div class="fc-event fc-event-vert fc-event-draggable fc-event-start fc-event-end" style="position: absolute; top: 797px; left: 695px; background-color: rgb(0, 166, 90); border-color: rgb(0, 166, 90); width: 97.45px; height: 145px;"><div class="fc-event-inner"><div class="fc-event-time">7:00 - 10:30</div><div class="fc-event-title">Birthday Party</div></div><div class="fc-event-bg"></div><div class="ui-resizable-handle ui-resizable-s">=</div></div></div><table class="fc-agenda-slots" style="width:100%" cellspacing="0"><tbody><tr class="fc-slot0 "><th class="fc-agenda-axis fc-widget-header" style="width: 50px;">12am</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot1 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot2 "><th class="fc-agenda-axis fc-widget-header">1am</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot3 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot4 "><th class="fc-agenda-axis fc-widget-header">2am</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot5 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot6 "><th class="fc-agenda-axis fc-widget-header">3am</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot7 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot8 "><th class="fc-agenda-axis fc-widget-header">4am</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot9 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot10 "><th class="fc-agenda-axis fc-widget-header">5am</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot11 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot12 "><th class="fc-agenda-axis fc-widget-header">6am</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot13 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot14 "><th class="fc-agenda-axis fc-widget-header">7am</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot15 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot16 "><th class="fc-agenda-axis fc-widget-header">8am</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot17 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot18 "><th class="fc-agenda-axis fc-widget-header">9am</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot19 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot20 "><th class="fc-agenda-axis fc-widget-header">10am</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot21 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot22 "><th class="fc-agenda-axis fc-widget-header">11am</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot23 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot24 "><th class="fc-agenda-axis fc-widget-header">12pm</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot25 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot26 "><th class="fc-agenda-axis fc-widget-header">1pm</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot27 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot28 "><th class="fc-agenda-axis fc-widget-header">2pm</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot29 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot30 "><th class="fc-agenda-axis fc-widget-header">3pm</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot31 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot32 "><th class="fc-agenda-axis fc-widget-header">4pm</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot33 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot34 "><th class="fc-agenda-axis fc-widget-header">5pm</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot35 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot36 "><th class="fc-agenda-axis fc-widget-header">6pm</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot37 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot38 "><th class="fc-agenda-axis fc-widget-header">7pm</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot39 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot40 "><th class="fc-agenda-axis fc-widget-header">8pm</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot41 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot42 "><th class="fc-agenda-axis fc-widget-header">9pm</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot43 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot44 "><th class="fc-agenda-axis fc-widget-header">10pm</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot45 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot46 "><th class="fc-agenda-axis fc-widget-header">11pm</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr><tr class="fc-slot47 fc-minor"><th class="fc-agenda-axis fc-widget-header">&nbsp;</th><td class="fc-widget-content"><div style="position:relative">&nbsp;</div></td></tr></tbody></table></div></div></div></div></div></div>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->  


@endsection

@section('after_scripts')

        {{--
        <!-- jQuery 2.0.2 -->
        <script src="/AdminLTE _ Calendar_files/jquery.min.js.muat turun"></script>
         <!-- Bootstrap -->
        <script src="/AdminLTE _ Calendar_files/bootstrap.min.js.muat turun" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="/AdminLTE _ Calendar_files/app.js.muat turun" type="text/javascript"></script>
        <!-- fullCalendar -->
        
        --}}
    <!-- jQuery UI 1.10.3 -->
         <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    
        <script src="/AdminLTE _ Calendar_files/fullcalendar.min.js.muat turun" type="text/javascript"></script>
        <!-- Page specific script -->
        <script type="text/javascript">
            $(function() {

                /* initialize the external events
                 -----------------------------------------------------------------*/
                function ini_events(ele) {
                    ele.each(function() {

                        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                        // it doesn't need to have a start or end
                        var eventObject = {
                            title: $.trim($(this).text()) // use the element's text as the event title
                        };

                        // store the Event Object in the DOM element so we can get to it later
                        $(this).data('eventObject', eventObject);

                        // make the event draggable using jQuery UI
                        $(this).draggable({
                            zIndex: 1070,
                            revert: true, // will cause the event to go back to its
                            revertDuration: 0  //  original position after the drag
                        });

                    });
                }
                ini_events($('#external-events div.external-event'));

                /* initialize the calendar
                 -----------------------------------------------------------------*/
                //Date for the calendar events (dummy data)
                var date = new Date();
                var d = date.getDate(),
                        m = date.getMonth(),
                        y = date.getFullYear();
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    buttonText: {//This is to add icons to the visible buttons
                        prev: "<span class='fa fa-caret-left'></span>",
                        next: "<span class='fa fa-caret-right'></span>",
                        today: 'today',
                        month: 'month',
                        week: 'week',
                        day: 'day'
                    },
                    //Random default events
                    events: [
                        {
                            title: 'All Day Event',
                            start: new Date(y, m, 1),
                            backgroundColor: "#f56954", //red 
                            borderColor: "#f56954" //red
                        },
                        {
                            title: 'Long Event',
                            start: new Date(y, m, d - 5),
                            end: new Date(y, m, d - 2),
                            backgroundColor: "#f39c12", //yellow
                            borderColor: "#f39c12" //yellow
                        },
                        {
                            title: 'Meeting',
                            start: new Date(y, m, d, 10, 30),
                            allDay: false,
                            backgroundColor: "#0073b7", //Blue
                            borderColor: "#0073b7" //Blue
                        },
                        {
                            title: 'Lunch',
                            start: new Date(y, m, d, 12, 0),
                            end: new Date(y, m, d, 14, 0),
                            allDay: false,
                            backgroundColor: "#00c0ef", //Info (aqua)
                            borderColor: "#00c0ef" //Info (aqua)
                        },
                        {
                            title: 'Birthday Party',
                            start: new Date(y, m, d + 1, 19, 0),
                            end: new Date(y, m, d + 1, 22, 30),
                            allDay: false,
                            backgroundColor: "#00a65a", //Success (green)
                            borderColor: "#00a65a" //Success (green)
                        },
                        {
                            title: 'Click for Google',
                            start: new Date(y, m, 28),
                            end: new Date(y, m, 29),
                            url: 'http://google.com/',
                            backgroundColor: "#3c8dbc", //Primary (light-blue)
                            borderColor: "#3c8dbc" //Primary (light-blue)
                        }
                    ],
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar !!!
                    drop: function(date, allDay) { // this function is called when something is dropped

                        // retrieve the dropped element's stored Event Object
                        var originalEventObject = $(this).data('eventObject');

                        // we need to copy it, so that multiple events don't have a reference to the same object
                        var copiedEventObject = $.extend({}, originalEventObject);

                        // assign it the date that was reported
                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;
                        copiedEventObject.backgroundColor = $(this).css("background-color");
                        copiedEventObject.borderColor = $(this).css("border-color");

                        // render the event on the calendar
                        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                        // is the "remove after drop" checkbox checked?
                        if ($('#drop-remove').is(':checked')) {
                            // if so, remove the element from the "Draggable Events" list
                            $(this).remove();
                        }

                    }
                });

                /* ADDING EVENTS */
                var currColor = "#f56954"; //Red by default
                //Color chooser button
                var colorChooser = $("#color-chooser-btn");
                $("#color-chooser > li > a").click(function(e) {
                    e.preventDefault();
                    //Save color
                    currColor = $(this).css("color");
                    //Add color effect to button
                    colorChooser
                            .css({"background-color": currColor, "border-color": currColor})
                            .html($(this).text()+' <span class="caret"></span>');
                });
                $("#add-new-event").click(function(e) {
                    e.preventDefault();
                    //Get value and make sure it is not null
                    var val = $("#new-event").val();
                    if (val.length == 0) {
                        return;
                    }

                    //Create event
                    var event = $("<div />");
                    event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
                    event.html(val);
                    $('#external-events').prepend(event);

                    //Add draggable funtionality
                    ini_events(event);

                    //Remove event from text input
                    $("#new-event").val("");
                });
            });
        </script>
@endsection