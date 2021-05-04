<?php
	$server = "localhost";
	$user	= "root";
	$pass	= "";
	$database = "register";

	$koneksi = mysqli_connect($server, $user, $pass, $database);

	if (!$koneksi) 
	{
		die("Connection Failed" .mysqli_connect_errno().mysqli_connect_error());
	}
?>