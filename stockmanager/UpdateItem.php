<?php
    include('database_connection.php');
     if(isset($_POST['btnManageStockUpdate'])){
            // echo $count;
     		$cnt = $_GET['count'];
     		//$id2 = array();
     		//$id2 = $_GET['id'];
            for($x=1;$x<=$cnt;$x++){
                
               echo ("SellingPrice".$x);
                $sellingPrice = $_POST['sellingPrice'.$x];

                $stockQty = $_POST['stockQty'.$x];
                echo "$sellingPrice";
                echo "$stockQty";
            
                $sql = "UPDATE item SET sellingPrice = $sellingPrice,stockQty = $stockQty WHERE item_id = $id[$x]";
                $result = mysqli_query($dbcon,$sql);
    }
  }
?>