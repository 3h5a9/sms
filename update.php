<?php 
	include 'dbh.php';
	include 'upload.php';

	$id = $_POST['uid'];
	$roll = $_POST['roll'];
	$name = $_POST['name'];
	$class = $_POST['class'];
	$section = $_POST['section'];
	$age = $_POST['age'];
	$image = $_FILES['fileToUpload']["name"];

	$sql = "UPDATE student SET sroll='$roll', sname='$name', sclass='$class', ssection='$section', sage='$age', image='$image' WHERE id=".$id;
	$result = $conn->query($sql);

	header('Location: index.php');