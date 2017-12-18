<?php 
	$dbName="stajyerlerim_db";
 	$con=mysqli_connect("localhost", "stajyerlerim_rt", "pns_stajyerlerim.com_2017", $dbName);
		if(!$con)
		{
			echo 'bağlantı hatası';
		}
		$con->query("SET NAMES UTF8");
		$con->query("SET CHARACTER SET utf8_general_ci");
?>