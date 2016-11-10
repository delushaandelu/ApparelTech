<?php
include('database_connection.php');
if(isset($_POST["btnManageStockUpdate"])){
	$item_id = $_POST['item_id'];
	$sellingPrice = $_POST['sellingPrice'];
	$stockQty = $_POST['stockQty'];
	$sql = "UPDATE item SET sellingPrice = $sellingPrice, stockQty = $stockQty WHERE item_id = $item_id";
	mysqli_query($dbcon, $sql);
		
	}
}
?>