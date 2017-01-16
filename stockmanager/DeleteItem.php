<?php
include('database_connection.php');


if (isset($_POST['item'])) {
    $item = $_POST['item'];
    $sql = "SELECT stockQty FROM item WHERE item_id = '".$_POST['item']."'";
    $result = mysqli_query($dbcon,$sql);
    $row = mysqli_fetch_assoc($result);
    //$val = 0;
    $qty = $row['stockQty'];
    //echo $result;
    if($qty>0){
    	$query = "DELETE FROM item WHERE item_id = '".$_POST['item']."'";
    	$res = mysqli_query($dbcon,$query);
    	$val = 0;
    }else{
    	$val = 1;
    }

    
echo json_encode($val);
}

?>

