<?php
include('database_connection.php');
$sql = "SELECT * FROM item WHERE itemName'".$_GET["ScategoryName"]."'";
if(mysql_num_rows($sql)){
	$data = array();
	while ($row = mysql_fetch_array($sql)){
		$data = array(
			'itemName' => $row['itemName']
			);


	}
	header ('content-type : application/json');
	echo json_encode($data);
}



?>