<?php
	class Item{
		var $itemName = "";
		var $brand = "";
		var $sellingPrice = "";
		var $cost ="";
		var $categoryName = "";
		var $quantity = "";

	public function addItem($itemname,$brand,$sellingprice,$cost,$categoryname,$itemid,$quantity){

		include('database_connection.php');

		
		$itemName = $itemname;
		$brand = $brand;
		$sellingPrice = $sellingprice;
		$cost = $cost;

		$categoryName = $categoryname;

		$itemId = $itemid;

		$quantity = $quantity;

		$sqlinsert = "INSERT INTO item (itemName,buyingPrice,sellingPrice,brand,catagery,stockQty) VALUES ('$itemName','$cost','$sellingPrice','$brand','$categoryName','$quantity')";

		if(!mysqli_query($dbcon, $sqlinsert)){
			die('Error inserting new record');
		}

	}

	public function searchItem($itemname){
		include('database_connection.php');
		$sqlinsert = "SELECT * FROM item WHERE itemName == $itemname";

		$result = mysqli_query($dbcon, $sqlinsert);

		if($result->num_rows > 0){
			 echo "<table><tr><th>Category Name</th><th>Item ID</th><th>Item Name</th><th>Brand</th><th>Cost</th><th>Selling Price</th><th>Quantity</th></tr>";
			 while($row = $result->fetch_assoc()) {
        		echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    		}
    			echo "</table>";
		} else {
    			echo "0 results";

		}





	}

}


?>