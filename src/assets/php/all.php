<?php
@session_start();
$user=$_SESSION['user'];
require_once("users.php");
require_once("cities.php");
require_once("company.php");
require_once("categories.php");



$user=user::refreshUser($user['id']);

?>