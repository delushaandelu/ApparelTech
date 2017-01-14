<?php
include('database_connection.php');



if (isset($_POST['item_id'])) {
   // $item = $_POST['item'];
	echo ($_POST['stockQty']);
    $query = "UPDATE item SET sellingPrice = '".$_POST['sellingPrice']."',stockQty = '".$_POST['stockQty']."' WHERE item_id = '".$_POST['item_id']."'";
    $res = mysqli_query($dbcon,$query);
    

}




?>

