<?php
include("all.php");
switch ($user['user_type']) {
	case 0:
		echo '
		<ul class="nav nav-main">
			<li>
				<a href="internships.php">
					<i class="fa fa-search" aria-hidden="true"></i> <span>Internships</span>
				</a>
			</li>
			<li>
				<a href="user-profile.php">
					<i class="fa fa-home" aria-hidden="true"></i> <span>Personal Home</span>
				</a>
			</li>
			<li>
				<a href="favorite-companies.php">
					<i class="fa fa-heart" aria-hidden="true"></i> <span>Favorite Companies</span>
				</a>
			</li>
			<li>
				<a href="pending-approvals.php">
					<i class="fa fa-hourglass" aria-hidden="true"></i> <span>Pending Approvals</span>
				</a>
			</li>
		</ul>';
		break;
	case 2:
		echo '
		<ul class="nav nav-main">
			<li>
				<a href="internships.php">
					<i class="fa fa-search" aria-hidden="true"></i> <span>Profile</span>
				</a>
			</li>
			<li class="nav-parent">
				<a href="cinfo.php">
					<i class="fa fa-home" aria-hidden="true"></i> <span>Company Information</span>
				</a>
			</li>
			<li class="nav-parent">
				<a href="favorite-companies.php">
					<i class="fa fa-heart" aria-hidden="true"></i> <span>Requests</span>
				</a>
			</li>
			<li>
				<a href="pending-approvals.php">
					<i class="fa fa-hourglass" aria-hidden="true"></i> <span>User List</span>
				</a>
			</li>
		</ul>';
		break;
	case 1:
		echo '
		<ul class="nav nav-main">
			<li>
				<a href="internships.php">
					<i class="fa fa-search" aria-hidden="true"></i><span>Profile</span>
				</a>
			</li>
			<li class="nav-parent">
				<a href="user-profile.php">
					<i class="fa fa-home" aria-hidden="true"></i><span>Company List</span>
				</a>
			</li>
			<li>
				<a href="favorite-companies.php">
					<i class="fa fa-heart" aria-hidden="true"></i><span>User List</span>
				</a>
			</li>
			<!--<li class="nav-parent">
				<a href="pending-approvals.php">
					<i class="fa fa-hourglass" aria-hidden="true"></i><span>Users</span>
				</a>
			</li>-->
		</ul>';
		break;
	
	default:
		# code...
		break;
}