<?php 
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$databsname = "sms";

	$conn = mysqli_connect( $servername, $dbusername, $dbpassword, $databsname );

	if (!$conn) {
		die('Connection Failed !') . mysqli_connect_error();
	}