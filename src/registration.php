<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">
		<title>Register</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="assets/images/logo.png" height="65" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Create Your Account</h2>
					</div>
					<div class="panel-body">
							<div class="form-group mb-lg">
								<label>Name</label>
								<input id="name" type="text" class="form-control input-lg" />
							</div>
							<div class="form-group mb-lg">
								<label>Surname</label>
								<input id="surname" type="text" class="form-control input-lg" />
							</div>

							<div class="form-group mb-lg">
								<label>E-Mail Address</label>
								<input id="mail" type="email" placeholder="cxxxxxxx@cankaya.edu.tr" class="form-control input-lg" />
							</div>
							<div class="form-group mb-lg">
								<label>Phone Number</label>
								<input id="phone" placeholder="05xx xxx xx xx" type="text" class="form-control input-lg" />
							</div>
							<div class="form-group mb-none">
								<div class="row">
									<div class="col-sm-6 mb-lg">
										<label>Password</label>
										<input id="password" type="password" class="form-control input-lg" />
									</div>
									<div class="col-sm-6 mb-lg">
										<label>Password Confirmation</label>
										<input id="confirm" type="password" class="form-control input-lg" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="AgreeTerms" id="agreeterms" type="checkbox" onclick="checkControl()" />
										<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<p id="button" class="btn btn-primary hidden-xs" onclick="addUser()">Register</p>
								</div>
								<div class="col-md-12" id="result"></div>
							</div><hr>
							<p class="text-center">Already have an account? <a href="index.html">Sign In!</a></p>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2017. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>
				<script>
				var check=0;
		function refresh()
			{
				location.reload();
			}
			function checkControl()
			{
				if(check)
				{
					check=0;
				}
				else
				{
					check=1;
				}
			}
			function addUser() {
			$("#button").html("Processing...");
			if(check==0)
			{
				$("#result").html('<p class="alert alert-danger"><strong>Please read and agree with the terms</strong></p>');
			}
			else
			{
				if($('#password').val()==$('#confirm').val())
				{
					var mesaj = {
					name:$('#name').val(),
					surname:$('#surname').val(),
					mail:$('#mail').val(),
					phone:$('#phone').val(),
					name:$('#name').val(),
					address:"",
					password:$('#password').val(),
					flag:"addUser"
					}
					$.ajax({
					    type: 'POST',
					    url: 'send.php',
					    data: {query: mesaj},
					    success: function (result)
						{
					    $('#result').html(result);
						}
					});
				}
			}
			   
		}
		</script>
	</body>
</html>