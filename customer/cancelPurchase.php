<?php
session_start();
?>   
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ApperalTech</title>
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cancelPurchase.css" type="text/css">
  </head>

  <body class="nav-md">
    
  <?php
    include("../config/customermenu.php");
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <h1>Cancel Your Purchase Here!</h1>
    
<table class="table table-striped">
	<tr> 
		<th><h2 align="center">Order ID</h2></th>
		<th><h2 align="center">Total Price</h2></th>
		<th><h2 align="center">Date & Time</h2></th>
		<th><h2 align="center">Action</h2></th>
	</tr>

	
	 <?php  
            $report = $_SESSION['csid'];        
    
            include("dbConfig.php");
            $sql = "select * from orders where customer_id='$report'";
            $result = mysqli_query($db,$sql);        
            while($row = mysqli_fetch_array($result)) {
    
    ?>
        <tr class="data">
                    <td><h5 align="center"><?php echo $row['id'] ?></h5></td>
                    <td><h5 align="center"><?php echo $row['total_price'] ?></h5></td>
                    <td><h5 align="center"><?php echo $row['created'] ?></h5></td>
                    <td class="bt"><center><button class="btn btn-danger" value="Cance This Order" onclick="location.href='cancelPurchase.php?id=<?php echo $row['id'] ?>'"><i class="glyphicon glyphicon-trash"></i> Cancel</button></center></td>
                </tr>
                
                <?php
            } ?>
    
    <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql= "delete * from orders where id = '$id'";
        mysqli_query($db,$sql);

        echo'<script language ="javascript">';
        echo'alert("Job deleted succesfully")';
        echo'</script>'; 

    }
    ?>
    
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
