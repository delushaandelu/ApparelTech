<?php
//get database connection
include('database_connection.php');
//define variables
	$customer_id=$_GET['id'];
	//query
	$sql1 = "SELECT (customer_id, username, password) FROM customer WHERE customer_id LIKE '%$customer_id%'";
	$sql2 = "INSERT INTO user (user_id, username, password) VALUES ('$customer_id', '$username', '$password') FROM customer WHERE customer_id LIKE '%$customer_id%'\";";
	
	// action
	if (mysqli_query($dbcon, $sql1) === TRUE && mysqli_query($dbcon, $sql2) === TRUE){
		header("location:ManageUser-Manage_Customer.php");
	}
	else{
		echo "<script>";
		echo "alert('ERROR: Check your information again!')";
		echo "</script>";
		header("location:ManageUser-Manage_Customer.php");
	}

	mysqli_close($dbcon);


?>