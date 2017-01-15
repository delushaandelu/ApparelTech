<?php
session_start();
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
    <link rel="stylesheet" href="css/rentReport.css" type="text/css">
  </head>

  <body class="nav-md">
    
  <?php
    include("../config/customermenu.php");
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <h1>Your Rent Report!</h1>
<table class='table table-hover'  >
            <tr>
                <th><b><h5 align='center'>Rent Order ID </h5></b></th>
                <th><b><h5 align='center'>Total Price </h5></b></th>
                <th><b><h5 align='center'>Purchase Order Date </h5></b></th>
                <th><b><h5 align='center'>Payment </h5></b></th>
                <th><b><h5 align='center'>Amount </h5></b></th>
                <th><b><h5 align='center'>Action </h5></b></th>
            </tr>

            <?php

            include('dbConfig.php');
            $c_id = $_SESSION['csid'];
            $sql = "SELECT * FROM rentorders where customer_id=$c_id ";
            $result = $db->query($sql);

            while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><center><?php echo $row['id'] ?></center></td>
                    <td><center><?php echo $row['total_price']?></center></td>
                    <td><center><?php echo $row['created'] ?></center></td>
                    <td><center><p class="bg-success"><?php echo $row['payment'] ?></p></center></td>
                    <td><center><p class="bg-primary"><?php echo $row['amount'] ?></p></center></td>
                    <td class="bt"><center>
                        
                        <button type="button" id="view" class="btn btn-primary" onclick="location.href='purchaseitem.php?p_id=<?php echo $row['id'] ?>'"><i class="fa fa-check-square-o" aria-hidden="true"></i> View</button>
                        
                        <button type="button" id="delivery"  class="btn btn-success" onclick="location.href='payment.php?p_id=<?php echo $row['id'] ?>'"><i class="fa fa-cc-paypal" aria-hidden="true"></i> Pay</button>
                        
                        <button type="button" id="invoice"  class="btn btn-danger" onclick="location.href='invoice.php?p_id=<?php echo $row['id'] ?>'"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> P/O</button>
                        
                        </center></td>
                </tr>
                <?php } ?>
            </table>
     
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
