<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />

	<title>Login</title>

	{!! HTML::style('linecons.css') !!}
	{!! HTML::style('font-awesome.min.css') !!}
	{!! HTML::style('admin-bootstrap.css') !!}
	{!! HTML::style('admin-core.css') !!}
	{!! HTML::style('admin-forms.css') !!}
	{!! HTML::style('admin-components.css') !!}
	{!! HTML::style('responsive.css') !!}

	{!! HTML::script('jquery.min.js') !!}
	{!! HTML::script('bootstrap.min.js') !!}

	<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			// Reveal Login form
			setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);

			// Validate Form
			$("form#login").validate({
			rules: {
				username: {
					required: true
				},

				password: {
					required: true
				}
			},

			messages: {
				username: {
					required: 'Please enter your username.'
				},

				password: {
					required: 'Please enter your password.'
				}
			}});

			// Set Form focus
			$("form#login .form-group:has(.form-control):first .form-control").focus();
		});
	</script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body login-page">


	<div class="login-container">

		<div class="row">

			<div class="col-sm-6 col-sm-offset-3">
				<!-- Errors container -->
				@if(session('message'))
				<div class="errors-container">
					<div class="alert alert-danger" style="display: block;">
					<button type="button" class="close" data-dismiss="alert">
						<span aria-hidden="true">×</span><span class="sr-only">Close</span>
					</button>
					<strong>Invalid login!</strong><br>{{ session('message') }}.
					</div>
				</div>
				@endif

				<!-- Add class "fade-in-effect" for login form effect -->
				<form method="post" action="{{ URL::to('administrator/login') }}" role="form" id="login" class="login-form fade-in-effect">
					{!! csrf_field() !!}
					<div class="login-header">
						<a href="dashboard-1.html" class="logo">
							<span>Log in</span>
						</a>

						<p>Dear user, log in to access the admin area!</p>
					</div>

					<div class="form-group">
						<input type="text" placeholder="Username" class="form-control input-dark" name="username" id="username" value="{{ old('username') }}" autocomplete="off">
					</div>

					<div class="form-group">
						<input type="password" placeholder="Password" class="form-control input-dark" name="password" id="password" autocomplete="off">
					</div>
					<!-- <div class="form-group">
						<label class="control-label" for="username">Username</label>
						<input type="text" placeholder="Username" class="form-control input-dark" name="username" id="username" value="{{ old('username') }}" autocomplete="off" />
					</div>

					<div class="form-group">
						<label class="control-label" for="passwd">Password</label>
						<input type="password" placeholder="Password" class="form-control input-dark" name="password" id="password" autocomplete="off" />
					</div> -->
					<div class="form-group">
						<button type="submit" class="btn btn-dark  btn-block text-left">
							<i class="fa-lock"></i>
							Log In
						</button>
					</div>
				</form>

			</div>

		</div>

	</div>

{!! HTML::script('jquery.validate.min.js') !!}

</body>
</html>