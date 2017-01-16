<?php
include('database_connection.php');
if (isset($_GET['itemname'])) {


	
   
    $query = "SELECT DISTINCT brand FROM item WHERE itemName = '".$_GET['itemname']."'";
    $res = mysqli_query($dbcon,$query);
    $result = null;
	$result = array();
    while ($row = mysqli_fetch_assoc($res)) {
        array_push($result,$row['brand']);
        //echo($row['brand']);
        //echo json_encode($result);
    }
    	echo json_encode($result);
}
   
   



?>