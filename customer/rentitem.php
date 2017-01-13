<?php
session_start();
require ('dbConfig.php');
?>   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ApperalTech</title>
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/purchaseReport.css" type="text/css">
  </head>

  <body class="nav-md">
    
  <?php
    include("../config/customermenu.php");
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <h1 class="hfont">Your Purchase Report!</h1>
<div class="container">
    <h1>Products</h1>
    <a href="rentviewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    <div id="products" class="row list-group">
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM item  where catagery='Sewing Machines'");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["itemName"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["brand"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo '$'.$row["rentPrice"].' USD'; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="rentcartAction.php?action=addToCart&item_id=<?php echo $row["item_id"]; ?>">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>
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
