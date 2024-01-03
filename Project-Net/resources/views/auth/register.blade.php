<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/drilldown.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/fab.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/login.js"></script>
	<!-- /theme JS files -->

</head>

<body class="navbar-bottom login-container">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-grid3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a href="login_registration.html#">Help center</a></li>
			</ul>

			<div class="navbar-right">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="login_registration.html#">
							Back to website
						</a>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-cog3"></i>
							<span class="visible-xs-inline-block position-right"> Options</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Advanced login -->
				<form method="POST" action="{{ route('register-proses') }}"  class="login-form">
					@csrf
					<div class="panel panel-body">
						<div class="text-center">
							<div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
							<h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>
						</div>

						<div class="content-divider text-muted form-group"><span>Your credentials</span></div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" placeholder="username" name="name" value="{{ old('name') }}">
							<div class="form-control-feedback">
								<i class="icon-user-check text-muted"></i>
							</div>
							@error ('name')
                            <small>{{ $message }}</small>
                            @enderror
						</div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" name="password" placeholder="Create password" value="{{ old('password') }}">
							<div class="form-control-feedback">
								<i class="icon-user-lock text-muted"></i>
							</div>
							@error ('password')
                            <small>{{ $message }}</small>
                            @enderror
						</div>

						<div class="content-divider text-muted form-group"><span>Your privacy</span></div>

						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control"name="email" placeholder="Your email" value="{{ old('email') }}">
							<div class="form-control-feedback">
								<i class="icon-mention text-muted"></i>
							</div>
							@error ('email')
                            <small>{{ $message }}</small>
                            @enderror
						</div>
						<button type="submit" class="btn bg-pink-400 btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
						<div class="content-divider text-muted form-group mt-10"><span><a href="{{ route('login')}}">login </a></span></div>
					</div>
				</form>
				<!-- /advanced login -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Footer -->
	<div class="navbar navbar-default navbar-fixed-bottom footer">
		<ul class="nav navbar-nav visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="footer">
			<div class="navbar-text">
				&copy; 2015. <a href="login_registration.html#" class="navbar-link">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" class="navbar-link" target="_blank">Eugene Kopyov</a>
			</div>

			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="login_registration.html#">About</a></li>
					<li><a href="login_registration.html#">Terms</a></li>
					<li><a href="login_registration.html#">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /footer -->

</body>
</html>
