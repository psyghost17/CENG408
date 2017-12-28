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

		<link rel="stylesheet" href="assets/vendor/select2/css/select2.css" />

		<link rel="stylesheet" href="assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />

		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

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

						<h2>Add Company</h2>

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li><span>Internship System</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>

						</div>

					</header>



					<!-- start: page -->

										<section class="panel panel-primary">

							<header class="panel-heading">

								<div class="panel-actions">

									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>

									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>

								</div>

						

								<h2 class="panel-title">Add Company Name & Company Adminisrator</h2>

							</header>

							<div class="panel-body">

								<div class="col-md-12">

									<div class="col-md-6">

										<label>Company Name</label>

										<input id="name" type="text" class="form-control input-lg" />

										<label>E-Mail Address</label>

										<input id="mail" type="email" class="form-control input-lg" />


										<label>Password</label>

										<input id="password" type="password" class="form-control input-lg" />

										<label>Password Confirmation</label>

										<input id="confirm" type="password" class="form-control input-lg" />

										<br>

									</div>

									<div class="panel-footer">

										<div class="row">

											<div class="col-md-9 col-md-offset-3">

												<p id="button" class="btn btn-primary hidden-xs" onclick="addCompany()">Add Company</p>

											</div>

										</div>

									</div>				

								</div>

							</div>



						</section>

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

		<script src="assets/vendor/select2/js/select2.js"></script>

		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>

		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>

		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

		<script src="assets/javascripts/theme.js"></script>

		<script src="assets/javascripts/theme.custom.js"></script>

		<script src="assets/javascripts/theme.init.js"></script>

		<script src="assets/javascripts/tables/examples.datatables.default.js"></script>

		<script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>

		<script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>

		<script>

		function addCompany() 
		{

			$("#button").html("Processing...");

			if($('#password').val()==$('#confirm').val())

				{

					var mesaj = {

					name:$('#name').val(),

					mail:$('#mail').val(),

					password:$('#password').val(),

					flag:"addCompany"

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