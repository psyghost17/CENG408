<!doctype html>
<html class="fixed">
	<head>
		<meta charset="UTF-8">

		<title>User Profile | Internship System</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">
		<script src="assets/vendor/modernizr/modernizr.js"></script>
	</head>
	<body>
		<section class="body">
			<?php include('assets/php/header.php') ?>
			<div class="inner-wrapper">
				<aside id="sidebar-left" class="sidebar-left">
					<div class="sidebar-header">
						<div class="sidebar-title"> Navigation </div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<?php  include("assets/php/menu.php"); //Menu ?>
							</nav>
						</div>
						<script>
							// Maintain Scroll Position
							if (typeof localStorage !== 'undefined') {
								if (localStorage.getItem('sidebar-left-position') !== null) {
									var initialPosition = localStorage.getItem('sidebar-left-position'),
										sidebarLeft = document.querySelector('#sidebar-left .nano-content');
									
									sidebarLeft.scrollTop = initialPosition;
								}
							}
						</script>
					</div>
				</aside>
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Internship List</h2>
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li><span>Internship System</span></li>
							</ol>
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

					<div class="row">
						<div class="col-md-4 col-lg-3">

							<section class="panel">
								<div class="panel-body">
									<div class="thumb-info mb-md">
										<img src="assets/images/!logged-user.jpg" class="rounded img-responsive" alt="John Doe">
										<div class="thumb-info-title">
											<span class="thumb-info-inner"><?php echo $user['name']." ".$user['surname'] ?></span>
											<span class="thumb-info-type"><?php echo $user['user_type'] ?></span>
										</div>
									</div>

									<hr class="dotted short">
									<p><b>Logged in at: 10/11/2017 20:10:01</b></p>

								</div>
							</section>

						</div>
						<div class="col-md-6 col-lg-5">

							<div class="tabs">
								<div class="tab-content">
									<div id="details">
											<h4 class="mb-xlg">Personal Information</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="name">Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="name" value="<?php echo $user['name'] ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="surname">Surname</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="surname" value="<?php echo $user['surname'] ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="email">E-Mail Address</label>
													<div class="col-md-8">
														<input type="email" class="form-control" id="mail" value="<?php echo $user['email'] ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="phone">Phone Number</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="phone" value="<?php echo $user['phone'] ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="address">Address</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="address" value="<?php echo $user['address'] ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">City</label>
													<div class="col-md-8">
														<select id="city" class="form-control mb-md">
															<?php city::getCities($user['city_id']); ?>
														</select>
													</div>
												</div>
											</fieldset>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<p class="btn btn-primary" id="button" onclick="update()"><b>Update</b></p>
													</div>
												</div>
											</div>

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-4">

							<div class="tabs">
								<div class="tab-content">
									<div id="details">
											<h4 class="mb-xlg">Change Password</h4>
											<fieldset class="mb-xl">
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileOldPassword">Old Password</label>
													<div class="col-md-8">
														<input type="password" class="form-control" id="old">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPassword">New Password</label>
													<div class="col-md-8">
														<input type="password" class="form-control" id="new">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repeat New Password</label>
													<div class="col-md-8">
														<input type="password" class="form-control" id="repeat">
													</div>
												</div>
											</fieldset>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<p id="pass" class="btn btn-primary" onclick="password()"><b>Change Password</b></p>
													</div>
												</div>
											</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12" id="result"></div>
					</div>
					<!-- end: page -->
				</section>
			</div>
			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs"> Close <i class="fa fa-chevron-right"></i></a>
						<div class="sidebar-right-wrapper">
							<?php  include("assets/php/info.php"); //About Internship System ?>
						</div>
					</div>
				</div>
			</aside>
		</section>
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		<script src="assets/vendor/autosize/autosize.js"></script>
		<script src="assets/javascripts/theme.js"></script>
		<script src="assets/javascripts/theme.custom.js"></script>
		<script src="assets/javascripts/theme.init.js"></script>
		<script>
		function refresh()
			{
				location.reload();
			}
		function update() {
			$("#button").html("Processing...");
			var mesaj = {
				id:"<?php echo $user['id'] ?>",
				name:$('#name').val(),
				surname:$('#surname').val(),
				mail:$('#mail').val(),
				phone:$('#phone').val(),
				name:$('#name').val(),
				address:$('#address').val(),
				city:$('#city').val(),
				flag:"updateUser"
			}
			$.ajax({
			    type: 'POST',
			    url: 'send.php',
			    data: {query: mesaj},
			    success: function (result)
				{
				setTimeout(refresh,3000);
			    $('#result').html(result);
				}
			});
		}
		function password() {
			$("#pass").html("Processing...");
			if($('#old').val()=="<?php echo $user['password'] ?>"){
				if($('#new').val()==$('#repeat').val()){
					var mesaj = {
					id:"<?php echo $user['id'] ?>",
					password:$('#new').val(),
					flag:"updateUserPassword"
					}
					$.ajax({
					    type: 'POST',
					    url: 'send.php',
					    data: {query: mesaj},
					    success: function (result)
						{
						setTimeout(refresh,3000);
					    $('#result').html(result);
						}
					});
				}
				else{
					$("#pass").html("Passwords don't match");
				}
			}
			else{
				$("#pass").html("Password is wrong");
			}
		}
		</script>
	</body>
</html>