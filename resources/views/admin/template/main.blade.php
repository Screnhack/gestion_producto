<!DOCTYPE html>
<html>
    
<!-- Mirrored from hubancreative.com/projects/templates/coco/corporate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 16:39:06 GMT -->
<head>
        <meta charset="UTF-8">
        <title>Unisimon | Gestion productos investigadores</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <!-- Base Css Files -->
        <link href="{{ asset('assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/libs/fontello/css/fontello.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/libs/animate-css/animate.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/libs/nifty-modal/css/component.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" /> 
        <link href="{{ asset('assets/libs/ios7-switch/ios7-switch.css')}}" rel="stylesheet" /> 
        <link href="{{ asset('assets/libs/pace/pace.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/libs/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/libs/jquery-icheck/skins/all.css" rel="stylesheet')}}" />
        <!-- Code Highlighter for Demo -->
        <link href="{{ asset('assets/libs/prettify/github.css')}}" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
                <link href="{{ asset('assets/libs/rickshaw/rickshaw.min.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{ asset('assets/libs/morrischart/morris.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{ asset('assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{ asset('assets/libs/jquery-clock/clock.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{ asset('assets/libs/bootstrap-calendar/css/bic_calendar.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{ asset('assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{ asset('assets/libs/jquery-weather/simpleweather.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{ asset('assets/libs/bootstrap-xeditable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="{{ asset('assets/css/style-responsive.css')}}" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
        <link rel="apple-touch-icon" href="{{asset('assets/img/apple-touch-icon.png')}}" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/img/apple-touch-icon-57x57.png')}}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/apple-touch-icon-72x72.png')}}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-touch-icon-76x76.png')}}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/apple-touch-icon-114x114.png')}}" />
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/apple-touch-icon-120x120.png')}}" />
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/img/apple-touch-icon-144x144.png')}}" />
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/img/apple-touch-icon-152x152.png')}}" />
    </head>
    <body class="fixed-left">
        <!-- Modal Start -->
        	<!-- Modal Task Progress -->	
	
		
	<!-- Modal Logout -->
	<div class="md-modal md-just-me" id="logout-modal">
		<div class="md-content">
			<h3><strong>Logout</strong> Confirmation</h3>
			<div>
				<p class="text-center">Are you sure want to logout from this awesome system?</p>
				<p class="text-center">
				<button class="btn btn-danger md-close">Nope!</button>
				<a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
				</p>
			</div>
		</div>
	</div>        <!-- Modal End -->	
	<!-- Begin page -->
	<div id="wrapper">
		
			<!-- Top Bar Start -->
			<div class="topbar">
			    <div class="topbar-left">
			        <div class="logo">
			            <h1><a href="#"><img src="{{asset('assets/img/logo.png')}}" alt="Logo"></a></h1>
			        </div>
			        <button class="button-menu-mobile open-left">
			        <i class="fa fa-bars"></i>
			        </button>
			    </div>
			    
			</div>
			<!-- Top Bar End -->
		    <!-- Left Sidebar Start -->
        <div class="left side-menu">
              @include('admin.template.dashboard')           
        </div>
        <!-- Left Sidebar End -->		    <!-- Right Sidebar Start -->
    
    <!-- Right Sidebar End -->		
		<!-- Start right content -->
        <div class="content-page">
        	<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
			<div class="content">

				<!-- Page Heading Start -->
				<!--<div class="page-heading">
					<h1><i class='fa fa-check'></i> Forms</h1>
				</div>-->
				<!-- Page Heading End-->

				<!-- Your awesome content goes here -->
				<div class="widget">
					<div class="widget-header transparent">
						<h2><strong>@yield('title')</strong></h2>
					</div>
					<div class="widget-content padding">
						@yield('content')
					</div>
				</div>
			</div>
        </div>
		<!-- End right content -->

	</div>
	<div id="contextMenu" class="dropdown clearfix">
		    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
		        <li><a tabindex="-1" href="javascript:;" data-priority="high"><i class="fa fa-circle-o text-red-1"></i> High Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="medium"><i class="fa fa-circle-o text-orange-3"></i> Medium Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="low"><i class="fa fa-circle-o text-yellow-1"></i> Low Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="none"><i class="fa fa-circle-o text-lightblue-1"></i> None</a></li>
		    </ul>
		</div>
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	@yield('scripts')
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{ asset('assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
	<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="{{ asset('assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{ asset('assets/libs/jquery-detectmobile/detect.js')}}"></script>
	<script src="{{ asset('assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
	<script src="{{ asset('assets/libs/ios7-switch/ios7.switch.js')}}"></script>
	<script src="{{ asset('assets/libs/fastclick/fastclick.js')}}"></script>
	<script src="{{ asset('assets/libs/jquery-blockui/jquery.blockUI.js')}}"></script>
	<script src="{{ asset('assets/libs/bootstrap-bootbox/bootbox.min.js')}}"></script>
	<script src="{{ asset('assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
	<script src="{{ asset('assets/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
	<script src="{{ asset('assets/libs/nifty-modal/js/classie.js')}}"></script>
	<script src="{{ asset('assets/libs/nifty-modal/js/modalEffects.js')}}"></script>
	<script src="{{ asset('assets/libs/sortable/sortable.min.js')}}"></script>
	<script src="{{ asset('assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
	<script src="{{ asset('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
	<script src="{{ asset('assets/libs/bootstrap-select2/select2.min.js')}}"></script>
	<script src="{{ asset('assets/libs/magnific-popup/jquery.magnific-popup.min.js"')}}></script> 
	<script src="{{ asset('assets/libs/pace/pace.min.js')}}"></script>
	<script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{ asset('assets/libs/jquery-icheck/icheck.min.js')}}"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="{{ asset('assets/libs/prettify/prettify.js')}}"></script>

	<script src="{{ asset('assets/js/init.js')}}"></script>
	<!-- Page Specific JS Libraries -->
	<script src="{{ asset('assets/libs/d3/d3.v3.js')}}"></script>
	<script src="{{ asset('assets/libs/rickshaw/rickshaw.min.js')}}"></script>
	<script src="{{ asset('assets/libs/raphael/raphael-min.js')}}"></script>
	<script src="{{ asset('assets/libs/morrischart/morris.min.js')}}"></script>
	<script src="{{ asset('assets/libs/jquery-knob/jquery.knob.js')}}"></script>
	<script src="{{ asset('assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
	<script src="{{ asset('assets/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js')}}"></script>
	<script src="{{ asset('assets/libs/jquery-clock/clock.js')}}"></script>
	<script src="{{ asset('assets/libs/jquery-easypiechart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{ asset('assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js')}}"></script>
	<script src="{{ asset('assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js')}}"></script>
	<script src="{{ asset('assets/libs/bootstrap-calendar/js/bic_calendar.min.js')}}"></script>
	<script src="{{ asset('assets/js/apps/calculator.js')}}"></script>
	<script src="{{ asset('assets/js/apps/todo.js')}}"></script>
	<script src="{{ asset('assets/js/apps/notes.js')}}"></script>
	<script src="{{ asset('assets/js/pages/index.js')}}"></script>
	</body>
<!-- Mirrored from hubancreative.com/projects/templates/coco/corporate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 16:39:52 GMT -->
</html>