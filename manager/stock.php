<?php

class Stock{
    var $itemName = "";
    var $brand = "";
    var $sellingPrice = "";
    var $cost = "";
    var $categoryName = "";
    var $quantity = "";


    public function addStock($itemname, $brand, $sellingprice, $cost, $categoryname, $quantity){

        include('database_connection.php');

        $itemName = $itemname;
        $brand = $brand;
        $sellingPrice = $sellingprice;
        $cost = $cost;
        $categoryName = $categoryname;
        $quantity = $quantity;

        //Query
        $sqlinsert = "INSERT INTO item (itemName,buyingPrice,sellingPrice,brand,catagery,stockQty) VALUES ('$itemName','$cost','$sellingPrice','$brand','$categoryName','$quantity')";

        if (!mysqli_query($dbcon, $sqlinsert)) {
            die('Error inserting new record');
        }

    }
    
}

?>
