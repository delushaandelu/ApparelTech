<?php
include('database_connection.php');


if (isset($_POST['item']) && isset($_POST['sellingPrice']) && isset($_POST['stockQty'])) {
    $item = $_POST['item'];
    $sellingPrice = $_POST['sellingPrice'];
    $stockQty = $_POST['stockQty'];
    echo $item;
	$sql = "UPDATE item SET sellingPrice = $sellingPrice,stockQty = $stockQty WHERE item_id = $item";
    $result = mysqli_query($dbcon,$sql);
    
   // $res = mysqli_query($dbcon,$query);
    

}


?>

