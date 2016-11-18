<?php
session_start();
include("dbConfig.php");
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
    <link rel="stylesheet" href="css/requestDelivery.css" type="text/css">
  </head>

  <body class="nav-md">
    
  <?php
    include("../config/customermenu.php");
  ?>
    
  <?php
    $id = $_GET['p_id'];
    $com = $_SESSION['company'];
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <h1 class="hfont">Request Your Delivery Here!</h1>

    <div id="delivery">
        <form  method="post" action="requestDelivery.php">
            <table class="table table-hover">
                <tr>
                    <td>P/O ID</td>
                    <td><input type="text" class="form-control" name="poid" value="<?php echo $id;?>" disabled></td>
                </tr> 
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" class="form-control" name="company" value="<?php echo $com?>" disabled></td>
                </tr>
                <tr>
                    <td>Delivery Address</td>
                    <td><input type="text" class="form-control" name="add"></td>
                </tr>
                <tr>
                    <td>Delivery Date</td>
                    <td><input type="text" class="form-control" name="date"></td>
                </tr>
                <tr>
                    <td>Telephone No for Delivery</td>
                    <td><input type="text" class="form-control" name="tele"></td>
                </tr>
                <tr>
                    <td colspan="2"><h4 align="center">Bank Payment Details</h4></td>
                </tr>
                <tr>
                    <td>Bank Name</td>
                    <td><input type="text" class="form-control" name="bank"></td>
                </tr> 
                <tr>
                    <td>Branch Name</td>
                    <td><input type="text" class="form-control" name="branch"></td>
                </tr>
                <tr>
                    <td>Deposit Voucher ID</td>
                    <td><input type="text" class="form-control" name="vid"></td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><input type="text" class="form-control" name="amount"></td>
                </tr>
                <tr>
                    <td colspan="2"><center><input type="submit" class="btn btn-success" id="btn" value="Request Delivery"></center></td>
                </tr>
            </table>
        </form>
    </div>
    <?php 
    if (isset($_POST['btn'])){
        $poid = $_POST['poid'];
        $company = $_POST['company'];
        $add = $_POST['add'];
        $date = $_POST['date'];
        $tele = $_POST['tele'];
        $bank = $_POST['bank'];
        $branch = $_POST['branch'];
        $vid = $_POST['vid'];
        $amount = $_POST['amount'];    
    
    $sql="INSERT INTO deliveryrequest (poid,company,address,date,telephone,bank,branch,voucher,amount) VALUES ('$poid','$company','$add','$date','$tele','$bank','$branch','$vid','$amount')";
    

if (mysqli_query($db, $sql) === TRUE) {
        echo'<script>';
        echo"alert('We will give your account authentication soon! Thank you')";
        echo'</script>';
    } else {
        echo'<script>';
        echo"alert('Error in Submition')";
        echo'</script>';
        
    }

    mysqli_close($db);
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
