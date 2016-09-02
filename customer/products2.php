<?php
session_start();
?>   
<?php
// include database configuration file
include 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>ApperalTech</title>
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
       <meta charset="utf-8">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
    <style>

    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    </style>
  </head>

  <body class="nav-md">
    
  <?php
    include("../config/customermenu.php");
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <h1>Sewing Machine Spare Parts</h1>
    <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    <div id="products" class="row list-group">
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM item where catagery='Sewing Machine Spare Parts'");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["itemName"]; ?></h4>
                    <p class="list-group-item-text"><?php echo "<b>Brand : </b>". $row["brand"]; ?></p>
                    <p class="list-group-item-text"><?php echo "<b>Catagery : </b>". $row["catagery"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo 'Rs.'.$row["sellingPrice"]; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&item_id=<?php echo $row["item_id"]; ?>">Add to cart</a>
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

</body>

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
  <!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>
</html>
