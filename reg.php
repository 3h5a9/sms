<?php 

	include 'dbh.php';


	$email = $_POST['email'];
	$pass = md5($_POST['password']);
	$repass = $_POST['confirmpassword'];

	if ( strlen($pass) < 6 ) { 
		echo "Password Should Be More Than 6 character";
	}
	elseif ( $pass != $repass ) {
		echo "Password Doesnot Match";
	}

	$sql = "INSERT INTO user (email, password) VALUES ( '$email', '$pass' )";
	$result = $conn->query($sql);

	header("Location: admin.php");
