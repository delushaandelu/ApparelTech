<?php
include('database_connection.php');

if (isset($_GET['categoryname'])) {
	$query = "SELECT DISTINCT itemName FROM item WHERE catagery = '".$_GET['categoryname']."'";
    
    $res = mysqli_query($dbcon,$query);

    $results = null;
    $results = array();

    while ($row = mysqli_fetch_assoc($res)) {
    	array_push($results,$row['itemName']);
    }

    echo json_encode($results);
}




?>

