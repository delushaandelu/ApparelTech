<?php
include('database_connection.php');
if (isset($_GET['itemname'])) {


echo($_GET['itemname']);
$result = null;
$result = array();
	if($_GET['itemname'] == 'All'){
		$query = "SELECT DISTINCT brand FROM item";
		$res = mysqli_query($dbcon,$query);
		while ($row = mysqli_fetch_assoc($res)) {
        array_push($result,$row['brand']);
        echo($row['brand']);
     }
      	echo json_encode($result);
	}else{
   
    $query = "SELECT DISTINCT brand FROM item WHERE itemName = '".$_GET['itemname']."'";
    $res = mysqli_query($dbcon,$query);
    while ($row = mysqli_fetch_assoc($res)) {
        array_push($result,$row['brand']);
        echo($row['brand']);
        //echo json_encode($result);
    }
    	echo json_encode($result);
}
   
   
}


?>