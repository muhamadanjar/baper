<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<meta name="_token" content="{!! csrf_token() !!}"/>
<title>Bahan dan Peralatan</title>

<link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/londinium-theme.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>-->

<script type="text/javascript" src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/jqueryui/js/jquery-ui-1.10.4.custom.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('lib/highcharts/js/highcharts.js') }}"></script>

<script type="text/javascript" src="{{ asset('backend/js/plugins/charts/sparkline.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/uniform.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/inputmask.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/autosize.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/inputlimit.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/listbox.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/multiselect.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/tags.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/switch.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/uploader/plupload.full.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/uploader/plupload.queue.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/wysihtml5/wysihtml5.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/forms/wysihtml5/toolbar.js') }}"></script>

<script type="text/javascript" src="{{ asset('backend/js/globalize/globalize.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/globalize/globalize.culture.de-DE.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/globalize/globalize.culture.ja-JP.js') }}"></script>

<script type="text/javascript" src="{{ asset('backend/js/plugins/interface/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/interface/fancybox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/interface/moment.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/interface/mousewheel.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/interface/jgrowl.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/datatable/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/interface/colorpicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/interface/fullcalendar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/interface/timepicker.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/application.js') }}"></script>



</head>
<body class="navbar-fixed">	
    <!-- Navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="{{ asset('images/logo_.png') }}" alt="Bahan dan Peralatan"></a>
			<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<button type="button" class="navbar-toggle offcanvas">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-paragraph-justify2"></i>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
			<!--<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-people"></i>
					<span class="label label-default">2</span>
				</a>
				<div class="popup dropdown-menu dropdown-menu-right">
					<div class="popup-header">
						<a href="#" class="pull-left"><i class="icon-spinner7"></i></a>
						<span>Activity</span>
						<a href="#" class="pull-right"><i class="icon-paragraph-justify"></i></a>
					</div>
	                <ul class="activity">
		                <li>
		                	<i class="icon-cart-checkout text-success"></i>
		                	<div>
			                	<a href="#">Eugene</a> ordered 2 copies of <a href="#">OEM license</a>
			                	<span>14 minutes ago</span>
		                	</div>
		                </li>
		                <li>
		                	<i class="icon-heart text-danger"></i>
		                	<div>
			                	Your <a href="#">latest post</a> was liked by <a href="#">Audrey Mall</a>
			                	<span>35 minutes ago</span>
		                	</div>
		                </li>
		                <li>
		                	<i class="icon-checkmark3 text-success"></i>
		                	<div>
			                	Mail server was updated. See <a href="#">changelog</a>
			                	<span>About 2 hours ago</span>
		                	</div>
		                </li>
		                <li>
		                	<i class="icon-paragraph-justify2 text-warning"></i>
		                	<div>
			                	There are <a href="#">6 new tasks</a> waiting for you. Don't forget!
			                	<span>About 3 hours ago</span>
		                	</div>
		                </li>
	                </ul>
                </div>
			</li>-->

			<!--<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-paragraph-justify2"></i>
					<span class="label label-default">6</span>
				</a>
				<div class="popup dropdown-menu dropdown-menu-right">
					<div class="popup-header">
						<a href="#" class="pull-left"><i class="icon-spinner7"></i></a>
						<span>Messages</span>
						<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
					</div>
					<ul class="popup-messages">
						<li class="unread">
							<a href="#">
								<img src="http://placehold.it/300" alt="" class="user-face">
								<strong>Eugene Kopyov <i class="icon-attachment2"></i></strong>
								<span>Aliquam interdum convallis massa...</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="http://placehold.it/300" alt="" class="user-face">
								<strong>Jason Goldsmith <i class="icon-attachment2"></i></strong>
								<span>Aliquam interdum convallis massa...</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="http://placehold.it/300" alt="" class="user-face">
								<strong>Angel Novator</strong>
								<span>Aliquam interdum convallis massa...</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="http://placehold.it/300" alt="" class="user-face">
								<strong>Monica Bloomberg</strong>
								<span>Aliquam interdum convallis massa...</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="http://placehold.it/300" alt="" class="user-face">
								<strong>Patrick Winsleur</strong>
								<span>Aliquam interdum convallis massa...</span>
							</a>
						</li>
					</ul>
				</div>
			</li>-->

			<!--<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle">
					<i class="icon-grid"></i>
				</a>
				<div class="popup dropdown-menu dropdown-menu-right">
					<div class="popup-header">
						<a href="#" class="pull-left"><i class="icon-spinner7"></i></a>
						<span>Tasks list</span>
						<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
					</div>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Description</th>
								<th>Category</th>
								<th class="text-center">Priority</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="status status-success item-before"></span> <a href="#">Frontpage fixes</a></td>
								<td><span class="text-smaller text-semibold">Bugs</span></td>
								<td class="text-center"><span class="label label-success">87%</span></td>
							</tr>
							<tr>
								<td><span class="status status-danger item-before"></span> <a href="#">CSS compilation</a></td>
								<td><span class="text-smaller text-semibold">Bugs</span></td>
								<td class="text-center"><span class="label label-danger">18%</span></td>
							</tr>
							<tr>
								<td><span class="status status-info item-before"></span> <a href="#">Responsive layout changes</a></td>
								<td><span class="text-smaller text-semibold">Layout</span></td>
								<td class="text-center"><span class="label label-info">52%</span></td>
							</tr>
							<tr>
								<td><span class="status status-success item-before"></span> <a href="#">Add categories filter</a></td>
								<td><span class="text-smaller text-semibold">Content</span></td>
								<td class="text-center"><span class="label label-success">100%</span></td>
							</tr>
							<tr>
								<td><span class="status status-success item-before"></span> <a href="#">Media grid padding issue</a></td>
								<td><span class="text-smaller text-semibold">Bugs</span></td>
								<td class="text-center"><span class="label label-success">100%</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</li>-->

			@if(\Auth::user())
			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<img src="http://placehold.it/300">
					<span></span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">
					<!--<li><a href="#"><i class="icon-user"></i> Profile</a></li>
					<li><a href="#"><i class="icon-bubble4"></i> Messages</a></li>
					<li><a href="#"><i class="icon-cog"></i> Settings</a></li>-->
					<li><a href="{{ url('auth/logout') }}"><i class="icon-exit"></i> Logout</a></li>
				</ul>
			</li>
			@else
			<li><a href="{{ url('cauth/login') }}"><i class="icon-exit"></i> Login</a></li>
			@endif
		</ul>
	</div>
	<!-- /navbar -->
    
    <!-- Page container -->
    <div class="page-container">
    	<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">
				@if(!\Auth::user())
					@include('vendor.main_navigation_sidebar_umum')
				@else
					@include('vendor.main_navigation_sidebar')
				@endif
				
				
			</div>
		</div>
		<!-- /sidebar -->
        
        <!-- Page content -->
	 	<div class="page-content">
        	
			@yield('page_header')

			@yield('breadcrumb')
			


			<!-- Callout -->
			<!--<div class="callout callout-danger fade in">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<h5>Form components page</h5>
				<p>Default form components, including styled and animated checkboxes and radios, selects, multiselects, tags, extended textareas, spinners, toggles, masked inputs and defalt Bootstrap elements.</p>
			</div>-->
            <!-- /callout -->
            
            
            
            @yield('content')
            @include('vendor.modal')
            <!-- Footer -->
	        <div class="footer clearfix">
		        <div class="pull-left">&copy; 2016.  by <a href="#">Bahan dan Peralatan</a></div>
	        	<div class="pull-right icons-group">
	        		<a href="#"><i class="icon-screen2"></i></a>
	        		<a href="#"><i class="icon-balance"></i></a>
	        		<a href="#"><i class="icon-cog3"></i></a>
	        	</div>
	        </div>
	        <!-- /footer -->
            
        </div>
    </div>
    <!-- /page container -->
    <script type="text/javascript" src="{{ asset('baper.js') }}"></script>
    @yield('map_jquery')
</body>
</html>