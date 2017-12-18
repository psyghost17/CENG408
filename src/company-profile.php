<!doctype html>
<html class="fixed">
	<head>
		<meta charset="UTF-8">
		<title>Company Information | Internship System</title>
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
		<style>
			.pic{
				 background: rgba(0, 0, 0, 0.5);
				 height: 100%;
				 width: 100%;
				 z-index: 999999;
			}
		</style>
	</head>
	<body>
		<section class="body">
			<?php include("assets/php/header.php");
			$company=company::get($_GET['company']);
			$arr=explode(',',$company['file']);
			?>
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
									</div>
									<hr class="dotted short">
									<p><b>Company Name: <?php echo $company['name']; ?></b></p>
									<p><b>City: <?php echo city::get4Company($company['city_id']) ?></b></p><br/>
									<center><b>Contact Information</b></center><hr>
									<p><b>Supervisor:<?php echo ucwords(user::get4Company($company['company_admin_id'])); ?></b></p>
									<p><b>Phone: <?php echo $company['phone']; ?></b></p>
									<p><b>E-Mail: <?php echo $company['email']; ?></b></p>
								</div>
							</section>
						</div>
						<div class="col-md-8 col-lg-9">
							<div class="tabs">
								<div class="tab-content">
									<div id="details">
										<form class="form-horizontal" method="get">
											<h4 class="mb-xlg">Company Information</h4>
											<b><?php echo $company['name']; ?></b><hr>
											<b><?php echo category::get4Company($company['category_id'])?></b><br/>
											<b><?php echo city::get4Company($company['city_id']) ?></b><br/>
											<p><?php echo $company['description'] ?></p>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<?php 
															if($company['quota']>0){
																echo '<p class="modal-with-form btn btn-primary">Apply (Last '.$company['quota'].' Quota)</p>';
															}
															else{
																echo '<p class="btn bn-primary" disabled><b>Apply</b></p>';
															}
														?>
														<button type="submit" class="btn"><b><i class="fa fa-heart" aria-hidden="true"></i> Add Favorite</b></button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
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
		<script src="assets/javascripts/ui-elements/examples.modals.js"></script>

	</body>
</html>