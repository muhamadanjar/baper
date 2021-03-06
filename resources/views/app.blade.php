<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Bahan dan Peralatan</title>
    
	
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	
    @yield('css_tambahan')
    
	<!-- Fonts -->
	<!--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->
    
	<style>
    html, body {
	  height: 80%;
	  padding: 0;
	  margin: 0;
	  font-family: sans-serif;
	  font-size: small;
	}
	
	#map {
	  width: 100%;
	  height: 100%;
	}
	
	html, body, #map{
	  width:100%;
	  height:100%;
	  overflow:hidden;
	}

	.ol-control button{ 
	  	background-color: rgba(40, 40, 40, 0.8) !important;
	}
	.ol-control button:hover{ 
	  	background-color: rgba(40, 40, 40, 1) !important;
	}
	
	#contain {
		background:	#999;
		height:		87%;
		margin:		0 auto;
		width:		100%;
		overflow: hidden;
	}
	
	
	.ui-layout-pane {
		padding: 0;
	
	}
    </style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">BAPER</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
                    <li class="dropdown"><a href="{{ url('/') }}">Master</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" 
                    data-toggle="dropdown" role="button" aria-expanded="false">Pemeriksaan <span class="caret"></span></a>
 						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/') }}">Amp</a></li>
                            <li><a href="{{ url('/') }}">Quary</a></li>
                    		<li><a href="{{ url('/') }}">BP</a></li>
						</ul>                   	
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" 
                    data-toggle="dropdown" role="button" aria-expanded="false">Utilitas <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/') }}">Password</a></li>
                            <li><a href="{{ url('/map') }}">Peta</a></li>
                    		<li><a href="{{ url('/map/google') }}">Peta Google</a></li>
						</ul>                    
                    </li>
                    
                    
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')
	@include('vendor.modalForm')
    @include('vendor.modal')
    <script type="text/javascript" src="{{ asset('lib/jqueryui/js/jquery-1.10.2.js') }}"></script>
	<script type="text/javascript" src="{{ asset('lib/jqueryui/js/jquery-ui-1.10.4.custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('baper.js') }}"></script>
    @yield('js_tambahan')
	@yield('map_jquery')
	
    
	<!-- Scripts -->
	<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
</body>
</html>
