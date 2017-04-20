<?php 
	include 'dbh.php';
	include 'upload.php';

	$roll = $_POST['roll'];
	$name = $_POST['name'];
	$class = $_POST['class'];
	$section = $_POST['section'];
	$age = $_POST['age'];
	$image = $_FILES['fileToUpload']["name"];

	$sql = "INSERT INTO student ( sroll, sname, sclass, ssection, sage, image ) VALUES ( '$roll', '$name', '$class', '$section', '$age', '$image' )";
	$result = $conn->query($sql);

	header('Location: /app/sms');