<?php
//This is the Item class which has the function addItem. This function is called when adding items into the stock.
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
			echo'<script language ="javascript">';
                    echo "swal({  title: 'Item successfully added to the stock!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='Stock_ManageStock.php'});";
                echo'</script>';
			
		}

	}

	

	

	
					
                		

        }

?>