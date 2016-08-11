<?php
	class Item{
		var $itemId;
		var $itemName;
		var $brand;
		var $sellingPrice;
		var $cost;
		var $categoryName;
		var $quantity;

	public function addItem(){

		

		$categoryName = $_POST['categoryname'];
		$itemName = $_POST['itemname'];
		$brand = $_POST['brand'];
		$sellingPrice = $_POST['sellingprice'];
		$cost = $_POST['cost'];
		$itemId = $_POST['itemid'];
		$quantity = $_POST['quantity'];

		$sqlinsert = "INSERT INTO item (item_id,itemName,buyingPrice,sellingPrice,brand,catagery,stockQty) VALUES ('$itemId','$itemName','$cost','$sellingPrice','$brand','$categoryName','$quantity')";

		if(!mysqli_query($dbcon, $sqlinsert)){
			die('Error inserting new record');
		}

	}

}


?>