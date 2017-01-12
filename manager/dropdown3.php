<?php
include('database_connection.php');
if (isset($_GET['brandname'])) {
   
    $query = "SELECT buyingPrice,sellingPrice FROM item WHERE itemName = '".$_GET['itemname']."' AND brand = '".$_GET['brandname']."'";
    //print($query);
    $res = mysqli_query($dbcon,$query);
    $row = mysqli_fetch_assoc($res);
  
    $result = array();
    array_push($result,$row['buyingPrice'],$row['sellingPrice']);
   
    echo json_encode($result);
}


?>