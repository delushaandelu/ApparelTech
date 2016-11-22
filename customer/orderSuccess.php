<?php
session_start();
if(!isset($_REQUEST['id'])){
    header("Location: products.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ApperalTech</title>
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/purchaseReport.css" type="text/css">
     <style>
    p{color: #34a853;font-size: 18px;}
    </style>
  </head>

  <body class="nav-md">
    
  <?php
    include("../config/customermenu.php");
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <h1>Successfully Ordered!</h1>
<div class="container">
    </br></br></br></br></br>
<div class="panel panel-primary">
                    <div class="panel-heading" align="center">Success!</div>
                    <div class="panel-body">
                     <h3 align="center" >Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></h3>
                    </div>
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
