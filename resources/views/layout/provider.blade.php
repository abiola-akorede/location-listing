<!DOCTYPE html>
<html lang="en">

<head>
	<title>  :: BeeTech Service Provision </title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- FAV ICON(BROWSER TAB ICON) -->
	<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
	<!-- FONTAWESOME ICONS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- ALL CSS FILES -->
	<link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{  asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link href="css/responsive.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<!--== MAIN CONTRAINER ==-->
	<div class="container-fluid sb1">
		<div class="row"  style="background: purple; color: white;">
			<!--== LOGO ==-->
			<div class="col-md-2 col-sm-3 col-xs-6 sb1-1"> <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a> <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
				<a href="{{ route('dashboard') }}" class="logo"><img src="{{ asset('images/beetech-logo.jpg') }}" alt="" /> </a>
			</div>
			<!--== SEARCH ==-->
			<div class="col-md-8 col-sm-6 mob-hide" >
				<form class="app-search"  style="border: 1px solid white;">
					<input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
			</div>
			<!--== NOTIFICATION ==-->
			{{-- <div class="col-md-2 tab-hide">
				<div class="top-not-cen"> <a class='waves-effect btn-noti' href='#'><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a> <a class='waves-effect btn-noti' href='#'><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a> <a class='waves-effect btn-noti' href='#'><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a> </div>
			</div> --}}
			<!--== MY ACCCOUNT ==-->
			<div class="col-md-2 col-sm-3 col-xs-6" >
				<!-- Dropdown Trigger -->
				<a class='waves-effect dropdown-button top-user-pro' href='#'  style="color: white;" data-activates='top-menu'> {{ Auth::user()->name }}  <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
				<!-- Dropdown Structure -->
				<ul id='top-menu' class='dropdown-content top-menu-sty'>
					<li><a href="admin-setting.html" class="waves-effect"><i class="fa fa-cogs"></i>Admin Setting</a> </li>
					<li><a href="admin-analytics.html"><i class="fa fa-bar-chart"></i> Analytics</a> </li>
					
					<li class="divider"></li>
					<form action="{{ route('logout') }}" method="POST">
						@csrf
						<input type="submit" name="logout" value="LOGOUT">
					</form>
					<li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a> </li>
				</ul>
			</div>
		</div>
	</div>
	<!--== BODY CONTNAINER ==-->
	<div class="container-fluid sb2">
		<div class="row" >
			<div class="sb2-1">
				<!--== USER INFO ==-->
				<div class="sb2-12">
                    <br><br>
					{{-- <ul>
                        
						<li> </li>
                        
						<li>
							<h5> <i class="fa fa-user" aria-hidden="true"></i>  {{ Auth::user()->name }} <span> Santa Ana, CA</span></h5> </li>
						<li></li>
					</ul> --}}
				</div>
				<!--== LEFT MENU ==-->
				

				@include('components.dashboard_nav')


			</div>
			<!--== BODY INNER CONTAINER ==-->
			<div class="sb2-2">
				<!--== breadcrumbs ==-->
				@yield('content')
			</div>
		</div>
	</div>
	<!--== BOTTOM FLOAT ICON ==-->
	
	<!--SCRIPT FILES-->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{  asset('js/bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{  asset('js/materialize.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>