<?php 
	session_start();
	include 'dbh.php';

	$email = $_POST['uemail'];
	$pass = md5($_POST['upassword']);

	$sql = " SELECT * FROM user WHERE email='$email' && password='$pass' ";
	$result = $conn->query($sql);

	if ( !$row = $result->fetch_assoc() ) {
		echo "Your Username or Password is incorrect!";
	} else {
		$_SESSION['email'] = $row['email'];
	}

	header('Location: index.php');