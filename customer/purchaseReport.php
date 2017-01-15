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
    <link rel="stylesheet" href="css/purchaseReport.css" type="text/css">
  </head>

  <body class="nav-md">
    
  <?php
    include("../config/customermenu.php");
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <h2 class="hfont">Your Purchase Report!</h2>
    <div class="2">
                <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="&#x26B2   Search reports using your id..." style="width: 320px; height: 50px">

            </div>
        <script>
            function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
 <div class="row">

            <table class='table table-hover' id='myTable' >
            <tr>
                <th><b><h5 align='center'> Purchase Order ID </h5></b></th>
                <th><b><h5 align='center'>Total Price </h5></b></th>
                <th><b><h5 align='center'>Purchase Order Date </h5></b></th>
                <th><b><h5 align='center'>Status </h5></b></th>
                <th><b><h5 align='center'>Action </h5></b></th>
            </tr>

            <?php

            include('dbConfig.php');
            $c_id = $_SESSION['csid'];
            $sql = "SELECT p_id, customer_id, totalprice, created, status FROM purchasereport where customer_id=$c_id ";
            $result = $db->query($sql);

            while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><center><?php echo $row['p_id'] ?></center></td>
                    <td><center><?php echo $row['totalprice'].'.00' ?></center></td>
                    <td><center><?php echo $row['created'] ?></center></td>
                    <td><center><p class="bg-primary"><?php echo $row['status'] ?></p></center></td>
                    <td class="bt"><center>
                        
                        <button type="button" id="view" class="btn btn-success" onclick="location.href='purchaseitem.php?p_id=<?php echo $row['p_id'] ?>'"><i class="fa fa-check-square-o" aria-hidden="true"></i> View</button>
                        
                        <button type="button" id="delivery"  class="btn btn-primary" onclick="location.href='requestdelivery.php?p_id=<?php echo $row['p_id'] ?>'"><i class="fa fa-truck" aria-hidden="true"></i> Delivery</button>
                        
                        <button type="button" id="invoice"  class="btn btn-danger" onclick="location.href='invoice.php?p_id=<?php echo $row['p_id'] ?>'"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> P/O</button>
                        
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
