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
    <link rel="stylesheet" href="css/viewStatus.css" type="text/css">
  </head>

 <body class="nav-md">
    
  <?php
    include("dbConfig.php");
    include("../config/customermenu.php");
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <h1 class="hfont">View Delivery Status</h1>
   
    <table class="table table-hover">
        <tr>
            <th><center>P/O_ID</center></th>
            <th><center>ADDRESS</center></th>
            <th><center>DATE</center></th>
            <th><center>TELEPHONE</center></th>
            <th><center>BANK</center></th>
            <th><center>BRANCH</center></th>
            <th><center>AMOUNT</center></th>
            <th><center>STATUS</center></th>
        </tr>
        
<?php
    
        $sql= "select * from deliveryrequest ";
        $result = $db->query($sql);
        
        while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><center><?php echo $row['poid'] ?></center></td>
                    <td><center><?php echo $row['address'] ?></center></td>
                    <td><center><?php echo $row['date'] ?></center></td>
                    <td><center><?php echo $row['telephone'] ?></center></td>
                    <td><center><?php echo $row['bank'] ?></center></td>
                    <td><center><?php echo $row['branch'] ?></center></td>
                    <td><center><?php echo $row['amount'] ?></center></td>
                    <td><center><?php echo $row['status'] ?></center></td>            
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
