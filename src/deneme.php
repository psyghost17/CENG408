<?php 
include('assets/php/author.php');
?><!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

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
				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i><strong>Geek</strong>Panel</h2>
					</div>
					<div class="panel-body">
						<form action="index.html" method="post">
							<div class="form-group mb-lg">
								<label>Kullanıcı Adı</label>
								<div class="input-group input-group-icon">
									<input id="mail" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Şifre</label>
								</div>
								<div class="input-group input-group-icon">
									<input id="pass" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12 text-right">
									<div class="btn btn-primary col-md-12" id="button"  onclick="signIn()">Giriş Yap</div>
								</div>
							</div>
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2017. Bütün Hakları Saklıdır.</p>
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
				function go()
			{
				window.location.assign("categories.php");
			}
			function signIn() {
			$("#button").html("İşleminiz Yapılıyor Lütfen bekleyiniz");
			var mesaj = {
			mail:$('#mail').val(),
			pass:$('#pass').val(),
			flag:"signIn"
			}
			$.ajax({
			    type: 'POST',
			    url: 'send.php',
			    data: {query: mesaj},
			    success: function (result)
				{
			    $('#result').html(result);
				setTimeout(go,3000);
				}
			});
			   
		}
		</script>
	</body>
</html>