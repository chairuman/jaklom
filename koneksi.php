<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "root";
	$db_name = "jaklom";

	try{
		$koneksi = new PDO("mysql:host=$db_host;dbname=$db_name",$db_user,$db_pass);
	}catch(PDOException $error){
		die("Terjadi kesalahan: " .$error->getMessage());
	}
?>