<?php 
	include 'dbh.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM student WHERE id=$id";

	if ($result = $conn->query($sql)) {

	} else {
		echo "Error in Query" . mysqli_connect_error();
	}

	header('Location: index.php');