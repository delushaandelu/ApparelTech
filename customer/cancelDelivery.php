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
    <link rel="stylesheet" href="css/cancelDelivery.css" type="text/css">
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
  </head>

  <body class="nav-md">
    
  <?php
    include("dbConfig.php");
    include("../config/customermenu.php");
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <h2 class="hfont">Cancel Your Delivery Here!</h2>

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
            <th><center>ACTION</center></th>
        </tr>
        
<?php
    
        $sql= "select * from deliveryrequest where status ='Not approved' ";
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
                    
                    <td class="bt"><center>
                        
                        <button type="button" id="delete" class="btn btn-success" onclick="location.href='cancelDelivery.php?poid=<?php echo $row['poid'] ?>'"><i class="fa fa-check-square-o" aria-hidden="true"></i> Delete</button>
                        
                        </center></td>
                </tr>
                <?php } ?>

        
    </table>
    
        <?php
            if(isset($_GET['poid'])){

                $id = $_GET['poid'];
                
                //query
                $sql= "DELETE FROM deliveryrequest WHERE poid = '$id'";
                $result = $db->query($sql);
        
                if($result){
                    echo'<script language ="javascript">';
                    echo "swal({  title: 'Status deleted successfully!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='cancelDelivery.php'});";
                    echo'</script>';
                }
                else{
                    echo'<script language ="javascript">';
                    echo "swal({  title: 'Error occurs while deleting!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='cancelDelivery.php'});";
                    echo'</script>';
                }
            }
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
