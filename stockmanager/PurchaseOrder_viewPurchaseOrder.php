
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="js/sweetalert.css">
    </head>
    <body>
        
<?php
    include("../config/stockmgrmenu.php");
   // require("database_connection.php"); 
?>

<ul class="breadcrumb">
    <h2>Page Heading here!</li></h2>
</ul>
<div class = "panel">
    <ul class="nav nav-justified" >
        <li id ="nav_tab_item_effect"><a href="Purchase Order_ManagePurchaseOrder.php">Back</a></li>
   	</ul>
</div>
    
    <?php
    if(isset($_GET['vi'])){
            
            
     $id = $_GET['vi'];
     
    $sql1="select item_id,itemName,quantity,stockQty from item,order_items where item.item_id=order_items.product_id and order_id=$id ";
    $result1=mysqli_query($dbcon,$sql1);
                                    
            
    if(!$result1){
        echo"query error2";
    }
 }
    
    ?>
<form>
<table class="table table-striped">
    <tr>
         
        <th>ProductID</th>
        <th>Product Name</th>
        <th>Ordered Quantity</th>
        <th>Stock Quantity</th>
    </tr>
        <?php
  
    while ($row = mysqli_fetch_assoc($result1) ){

        echo "<tr>";
            echo "<td>";
            echo $row['item_id'];
            echo "</td>";
            
            echo "<td>";
            echo $row['itemName'];
            echo "</td>";

            echo "<td>";
            echo $row['quantity'];
            echo "</td>";

            echo "<td>";
            echo $row['stockQty'];
            echo "</td>";
        echo "</tr>";

       
    }
        ?>
    
</table>
    </form>  
    
    
    

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






