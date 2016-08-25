<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ApperalTech</title>
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    
  <?php
    include("../config/customermenu.php");
  ?>

<!-- page content -->
<div class="right_col" role="main">
<h1>My Cart</h1>  
<?php
// connect to database
include '../config/database.php';
 
// page headers
$page_title="Cart";
 
// parameters
$action = isset($_GET['action']) ? $_GET['action'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$brand = isset($_GET['brand']) ? $_GET['brand'] : "";
$catagery = isset($_GET['catagery']) ? $_GET['catagery'] : "";
 
// display a message
if($action=='removed'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> was removed from your cart!";
    echo "</div>";
}
 
else if($action=='quantity_updated'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> quantity was updated!";
    echo "</div>";
}
 
else if($action=='failed'){
        echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> quantity failed to updated!";
    echo "</div>";
}
 
else if($action=='invalid_value'){
        echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> quantity is invalid!";
    echo "</div>";
}
 
// select products in the cart
$query="SELECT p.id, p.name,p.brand, p.price, p.catagery, ci.quantity, ci.quantity * p.price AS subtotal  
            FROM cart_items ci  
                LEFT JOIN products p 
                    ON ci.product_id = p.id"; 
 
$stmt=$con->prepare( $query );
$stmt->execute();
 
// count number of rows returned
$num=$stmt->rowCount();
 
if($num>0){
     
    //start table
    echo "<table class='table table-hover table-responsive table-bordered'>";
     
    // our table heading
    echo "<tr>";
        echo "<th class='textAlignLeft'>Product Name</th>";
        echo "<th class='textAlignLeft'>Brand</th>";
        echo "<th class='textAlignLeft'>Catagery</th>";
        echo "<th>Price (LKR)</th>";
            echo "<th style='width:15em;'>Quantity</th>";
            echo "<th>Sub Total</th>";
            echo "<th>Action</th>";
    echo "</tr>";
         
    $total=0;
     
    while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
       
        echo "<tr>";
            echo "<td>";
                        echo "<div class='product-id' style='display:none;'>{$id}</div>";
                        echo "<div class='product-name'>{$name}</div>";
            echo "</td>";
            echo "<td>";
                        echo "<div class='product-name'>{$brand}</div>";
            echo "</td>";
            echo "<td>";
                        echo "<div class='product-name'>{$catagery}</div>";
            echo "</td>";
            echo "<td>Rs. " . number_format($price, 2, '.', ',') . "</td>";
            echo "<td>";
                        echo "<div class='input-group'>";
                            echo "<input type='number' name='quantity' value='{$quantity}' class='form-control'>";
                             
                            echo "<span class='input-group-btn'>";
                                echo "<button class='btn btn-default update-quantity' type='button'>Update</button>";
                            echo "</span>";
                             
                        echo "</div>";
                echo "</td>";
                echo "<td>Rs. " . number_format($subtotal, 2, '.', ',') . "</td>";
                echo "<td>";
            echo "<a href='remove_from_cart.php?id={$id}&name={$name}' class='btn btn-danger'>";
                        echo "<span class='glyphicon glyphicon-remove'></span> Remove from cart";
            echo "</a>";
            echo "</td>";
        echo "</tr>";
             
        $total += $subtotal;
    }
     
    echo "<tr>";
    echo "<td><b>Total</b></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td>Rs. " . number_format($total, 2, '.', ',') . "</td>";
    echo "<td>";
    echo "<a href='#' class='btn btn-success'>";
            echo "<span class='glyphicon glyphicon-shopping-cart'></span> Checkout";
            echo "</a>";
    echo "</tr>";
    echo "</td>";
         
    echo "</table>";
}else{
    echo "<div class='alert alert-danger'>";
    echo "<strong>No products found</strong> in your cart!";
    echo "</div>";
}
 
 
include 'layout_foot.php';
?>
</div>
</body>

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
  <!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>
</html>
