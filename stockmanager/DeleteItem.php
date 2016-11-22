<?php
include('database_connection.php');
if(isset($_POST["id"])){
	foreach ($_POST["id"] as $id) {
		$sql = "DELETE FROM item WHERE item_id = '".$id."'";
		mysqli_query($dbcon, $sql);
		
	}
}
?>