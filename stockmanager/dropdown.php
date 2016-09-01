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

/*else if (isset($_GET['itemname'])){
    echo "$_GET['itemname']";
    $query = "SELECT brand FROM item WHERE itemName = '".$_GET['itemname']."'";
    
    $res = mysqli_query($dbcon,$query);

    $result = null;
    $result = array();

    while ($row = mysqli_fetch_assoc($res)) {
        array_push($result,$row['brand']);
    }

    echo json_encode($result);
}

*/
   



?>

