<head>
<link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/londinium-theme.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<script type="text/javascript" src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('lib/jqueryui/js/jquery-ui-1.10.4.custom.min.js') }}"></script>

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
<script type="text/javascript" src="{{ asset('backend/js/plugins/interface/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/interface/colorpicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/interface/fullcalendar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/plugins/interface/timepicker.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/js/application.js') }}"></script>
</head>
	<!-- Login wrapper -->
	<div class="login-wrapper">
    	<form action="#" role="form" role="form" method="POST" action="{{ url('/cauth/login') }}">
			<div class="popup-header">
				<a href="#" class="pull-left"><i class="icon-user-plus"></i></a>
				<span class="text-semibold">User Login</span>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</div>
			<div class="well">
				<div class="form-group has-feedback">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Username">
					<i class="icon-users form-control-feedback"></i>
				</div>

				<div class="form-group has-feedback">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password">
					<i class="icon-lock form-control-feedback"></i>
				</div>

				<div class="row form-actions">
					<div class="col-xs-6">
						<div class="checkbox checkbox-success">
						<label>
							<input type="checkbox" class="styled" name="remember">
							Remember me
						</label>
						</div>
					</div>

					<div class="col-xs-6">
						<button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Sign in</button>
					</div>
				</div>
			</div>
    	</form>
	</div>  
	<!-- /login wrapper -->

