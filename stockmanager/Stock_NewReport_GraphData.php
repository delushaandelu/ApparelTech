<?php
include ('database_connection.php');

$query = "SELECT itemName, stockQty,buyingPrice FROM item WHERE catagery = 'Sewing Machines' ORDER BY itemName";

$result = mysqli_query($dbcon,$query);

$data = array();

foreach($result as $row){
	$data[] = $row;
}

$result->close();

print json_encode($data);
?>