<?php
include('database_connection.php');



if (isset($_POST['item_id'])) {
   // $item = $_POST['item'];
	echo ($_POST['stockQty']);
    $query = "UPDATE item SET sellingPrice = '".$_POST['sellingPrice']."',stockQty = '".$_POST['stockQty']."' WHERE item_id = '".$_POST['item_id']."'";
    $res = mysqli_query($dbcon,$query);
    

}

//print_r($_POST['item_id']);
/*echo "hiiii";
if (isset($_POST['item_id']) && isset($_POST['sellingPrice']) && isset($_POST['stockQty'])) {
    $item = $_POST['item_id'];
    $sellingPrice = $_POST['sellingPrice'];
    $stockQty = $_POST['stockQty'];
    echo $_POST['stockQty'];
	$sql = "UPDATE item SET sellingPrice = $sellingPrice,stockQty = $stockQty WHERE item_id = $item";
    $result = mysqli_query($dbcon,$sql);*/
    
   // $res = mysqli_query($dbcon,$query);
    




?>

