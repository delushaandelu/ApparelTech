<?php
session_start();
?>   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ApperalTech</title>
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="delivery.css" type="text/css"/>
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
<div id="bottom-delivery">
                <form method="post">
                     <div class="panel-heading" align="center">Delivery Note</div>
                    <table id="deliverytb" border="0">
                        
                        <tr>
                            <td id="table_font">Note ID</td>
                            <td><input type="text" name="noteid" class="form-control"> </td>

                            <td id="table_font">Address</td>
                        </tr>
                        <tr>
                            <td id="table_font">P/O ID</td>
                            <td><input type="text" name="poid" class="form-control"> </td>

                            <td id="table_font">Line1</td>
                            <td><input type="text" name="line1" class="form-control" ></td>
                        </tr>
                        <tr>
                            <td id="table_font">Date</td>
                            <td><input type="text" name="deliverydate" class="form-control"></td>

                            <td id="table_font">Line2</td>
                            <td><input type="text" name="line2" class="form-control" ></td>
                        </tr>
                        <tr>
                            <td id="table_font" >Note</td>
                            <td><textarea>comment here</textarea></td>


                            <td id="table_font">District</td>
                            <td><input type="text" name="district" class="form-control" ></td>

                        </tr>


                        <tr>
                            <td id="table_font">Driver</td>
                            <td><input type="text" name="driver" class="form-control" ></td>
                            <td id="table_font">Vehicle</td>
                            <td><input type="text" name="Vehicle" class="form-control" ></td>
                        </tr>
                        <tr>
                            <td id="table_font">Vehicle</td>
                            <td><input type="text" name="Vehicle" class="form-control" ></td>

                        </tr>


                    </table>


                </form>

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
