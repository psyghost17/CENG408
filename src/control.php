<?php 
session_start();
$user=$_SESSION['author'];
echo $user['email'];
?>