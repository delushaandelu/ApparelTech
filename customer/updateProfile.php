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
    <link rel="stylesheet" href="css/updateProfile.css" type="text/css">
      <link rel="stylesheet" href="js/sweetalert.css">
  </head>

  <body class="nav-md">
    
  <?php
    include("../config/customermenu.php");
    
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <h1 class="hfont">Update Your Profile Here!</h1>
    <?php
     include('dbConfig.php');
                                $c_id = $_SESSION['csid'];
        if(isset($_POST['update'])){
        $fname = $_POST['fullname'];
        $desi = $_POST['desi'];
        $address = $_POST['address'];
        $nic = $_POST['nic'];
        $mob = $_POST['mob'];
        $tele = $_POST['tele'];
        $email = $_POST['Email'];
        $cname = $_POST['cname'];

        // Check connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        } 

        $sql = "UPDATE customer SET fullname='$fname',designation='$desi',address='$address',nic='$nic',mobile='$mob',tele='$tele',email='$email',companyName='$cname' WHERE customer_id=$c_id";

        if ($db->query($sql) === TRUE) {
            echo'<script language ="javascript">';
                    echo "swal({  title: 'Error!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='driver_details.php'});";
                echo'</script>';
        } else {
             echo'<script language ="javascript">';
                    echo "swal({  title: 'Driver Updated!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='driver_details.php'});";
                echo'</script>';
        }

        $db->close();
                
}
    ?>
<?php

                                include('dbConfig.php');
                                $c_id = $_SESSION['csid'];
                                $sql = "SELECT * FROM customer where customer_id=$c_id ";
                                $result = $db->query($sql);
                                while($row = $result->fetch_assoc()) {
                                 ?>            
<form method="POST">
    <legend>Personal information:</legend>
    <fieldset >
        <h3>Full name: </h3><br><input type="text" name="fullname" style="font-size:12pt;width:800px;" autocomplete="off" value=<?php echo $row['fullname'] ?> > <br>
        <h3>Address  : </h3><br><input type="text" name="address" max="40" style="font-size:12pt;width:800px;" autocomplete="off" value=<?php echo $row['address'] ?>><br>
        <h3>Telephone : </h3><br><input type="number" name="tele"  style="font-size:12pt;width:200px;" autocomplete="off" value=<?php echo $row['tele'] ?>><br>
        <h3>Mobile : </h3><br><input type="number" name="mob"  style="font-size:12pt;width:200px;" autocomplete="off" value=<?php echo $row['mobile'] ?>><br>
        <h3>NIC : </h3><br><input type="text" name="nic"  style="font-size:12pt;width:200px;" autocomplete="off" value=<?php echo $row['nic'] ?>><br>
        <h3>Designation : </h3><br><input type="text" name="desi"  style="font-size:12pt;width:800px;" autocomplete="off" value=<?php echo $row['designation'] ?>><br>
        <h3>Email : </h3><br><input type="Email" name="Email"  style="font-size:12pt;width:400px;" autocomplete="off" value=<?php echo $row['email'] ?>><br>
        <h3>company name : </h3><br><input type="text" name="cname"  style="font-size:12pt;width:400px;" value=<?php echo $row['companyName'] ?>><br> <br>
        
        <h4><input type="submit" name="update"></h4>
    </fieldset>
</form>
<?php } ?>

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
