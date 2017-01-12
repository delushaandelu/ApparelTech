<?php
include('database_connection.php');

if(isset($_POST['btnManageStockInsert'])){
	$itemname = $_POST['itemname'];
    $brand = $_POST['brandname'];
    $sellingprice = $_POST['sellingprice'];
    $cost = $_POST['cost'];
    //$categoryname = $_POST['categoryname'];
	$quantity = $_POST['quantity'];
                                   
    $query = "UPDATE item SET sellingPrice = '$sellingprice', buyingPrice = '$cost',stockQty += '$quantity' WHERE itemName = '$itemname' AND brand = '$brand'";
    $res = mysqli_query($dbcon,$query);
     }
                         
                            



?>

