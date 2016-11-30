<?php
include('database_connection.php');


if (isset($_POST['item'])) {
    $item = $_POST['item'];
	$query = "DELETE FROM item WHERE item_id = '".$_POST['item']."'";
    
    $res = mysqli_query($dbcon,$query);
    

}


?>

