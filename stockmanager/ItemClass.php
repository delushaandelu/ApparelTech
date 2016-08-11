<?php
	class Item{
		var $itemName;
		var $brand;
		var $sellingPrice;
		var $cost;
		var $categoryName;
		var $quantity;

	public function addItem(){

		include('database_connection.php');

		
		$itemName = $_POST['itemname'];
		$brand = $_POST['brand'];
		$sellingPrice = $_POST['sellingprice'];
		$cost = $_POST['cost'];
<<<<<<< HEAD
		$categoryName = $_POST['categoryname'];
=======
		$itemId = $_POST['itemid'];
>>>>>>> origin/master
		$quantity = $_POST['quantity'];

		$sqlinsert = "INSERT INTO item (itemName,buyingPrice,sellingPrice,brand,catagery,stockQty) VALUES ('$itemName','$cost','$sellingPrice','$brand','$categoryName','$quantity')";

		if(!mysqli_query($dbcon, $sqlinsert)){
			die('Error inserting new record');
		}

	}

}


?>