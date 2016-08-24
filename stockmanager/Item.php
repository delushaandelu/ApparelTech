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
		}

	}

	public function printSearch($sql){
		include('database_connection.php');
			if($result = mysqli_query($dbcon, $sql)){
				if(mysqli_num_rows($result) > 0){
					echo "<table border = '0'>";
						echo "<tr>";
							echo "<th class>Item ID</th>"; echo"<td width = 10%></td>";
							echo "<th>Item Name</th>";echo"<td width = 5%></td>";
                			echo "<th>Category</th>";echo"<td width=5%></td>";
                			echo "<th>Brand</th>";echo"<td width=5%></td>";
                			echo "<th>Buying Price</th>";echo"<td width = 5%></td>";
                			echo "<th>Selling Price</th>";echo"<td width=5%></td>";
                			echo "<th>Quantity</th>";
                		echo "</tr>";

                	while($row = mysqli_fetch_array($result)){
						echo "<tr>";
							echo "<td>" . $row['item_id'] . "</td>"; echo"<td ></td>";
                			echo "<td>" . $row['itemName'] . "</td>";echo"<td></td>";
                			echo "<td>" . $row['catagery'] . "</td>";echo"<td></td>";
                			echo "<td>" . $row['brand'] . "</td>";echo"<td></td>";
                			echo "<td>" . $row['buyingPrice'] . "</td>";echo"<td></td>";
                			echo "<td>" . $row['sellingPrice'] . "</td>";echo"<td></td>";
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

	public function searchItem($categoryname, $itemname, $brandname){

		echo "$categoryname ";
		echo "$itemname ";
		echo "$brandname ";
		if ($itemname == "All" && $brandname == "All"){
			$sql = "SELECT * FROM item WHERE catagery = '$categoryname'";
			$this->printSearch($sql);
		}
		else if($brandname == "All"){
			$sql = "SELECT * FROM item WHERE catagery = '$categoryname' AND itemName = '$itemname'";
			$this->printSearch($sql);
		}else{
			$sql = "SELECT * FROM item WHERE catagery = '$categoryname' AND itemName = '$itemname' AND brand = '$brandname'";
			$this->printSearch($sql);
		}
		

	}

	public function deleteItem($itemname){
		include('database_connection.php');
		$sql = "DELETE FROM item WHERE itemName = '$itemname'";
		$result = mysqli_query($dbcon,$sql);
		if(!$result){
			echo "Error deleting record: " . $dbcon->error;
		}else{
			echo "Record deleted successfully";
		}
		mysqli_close($dbcon);
	}

}


?>