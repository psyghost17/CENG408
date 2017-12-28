<?php
session_start();
include("assets/php/all.php");
$query=$_POST['query'];
$flag=$query['flag'];
  function permalink($string)
  {
	$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#','.');
	$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp', '');
	$string = strtolower(str_replace($find, $replace, $string));
	$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
	$string = trim(preg_replace('/\s+/', ' ', $string));
	$string = str_replace(' ', '-', $string);
	return $string;
  }
switch ($flag) {
	case 'signIn':
		user::signIn($query);
	break;
	case 'addUser':
		user::add($query);
	break;
	case 'updateUser':
		user::update($query);
	break;
	case 'updateUserPassword':
		user::updatePassword($query);
	break;

	case 'addCompany':
		user::addCompany($query);
	break;

	case 'updateCompany':
		company::updateCompany($query);
	break;
		


	default:
		# code...
		break;
}

?>