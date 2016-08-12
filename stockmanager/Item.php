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
		$sql = "SELECT * FROM item WHERE itemName = '$itemname'";
			if($result = mysqli_query($dbcon, $sql)){
				if(mysqli_num_rows($result) > 0){
					echo "<table>";
						echo "<tr>";
							echo "<th>Item ID</th>"; echo"<td></td>";
							echo "<th>Item Name</th>";
                			echo "<th>Category</th>";
                			echo "<th>Brand</th>";
                			echo "<th>Buying Price</th>";
                			echo "<th>Selling Price</th>";
                			echo "<th>Quantity</th>";
                		echo "</tr>";

                	while($row = mysqli_fetch_array($result)){
						echo "<tr>";
							echo "<td>" . $row['item_id'] . "</td>";
                			echo "<td>" . $row['itemName'] . "</td>";
                			echo "<td>" . $row['catagery'] . "</td>";
                			echo "<td>" . $row['brand'] . "</td>";
                			echo "<td>" . $row['buyingPrice'] . "</td>";
                			echo "<td>" . $row['sellingPrice'] . "</td>";
                			echo "<td>" . $row['stockQty'] . "</td>";
                		echo "</tr>";
                	}
                	echo "</table>";
        			// Close result set
					mysqli_free_result($result);
				} else{
					echo "No records matching your query were found.";
			}
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbcon);
		}
		mysqli_close($dbcon);
	}
}


?>