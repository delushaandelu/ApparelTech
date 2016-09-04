<?php
	class Item{
		var $itemName = "";
		var $brand = "";
		var $sellingPrice = "";
		var $cost ="";
		var $categoryName = "";
		var $quantity = "";
	

	public function addItem($itemname,$brand,$sellingprice,$cost,$categoryname,$quantity){

		include('database_connection.php');

		
		$itemName = $itemname;
		$brand = $brand;
		$sellingPrice = $sellingprice;
		$cost = $cost;

		$categoryName = $categoryname;

		

		$quantity = $quantity;

		$sqlinsert = "INSERT INTO item (itemName,buyingPrice,sellingPrice,brand,catagery,stockQty) VALUES ('$itemName','$cost','$sellingPrice','$brand','$categoryName','$quantity')";
		

		if(!mysqli_query($dbcon, $sqlinsert)){
			die('Error inserting new record');
		}else{
			echo "<script type='text/javascript'>alert('Item successfully added to the stock!')</script>";
		}

	}

	

	

	
					
                		

        }

?>