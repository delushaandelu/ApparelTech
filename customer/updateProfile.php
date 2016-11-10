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
  </head>

  <body class="nav-md">
    
  <?php
    include("../config/customermenu.php");
    
  ?>

<!-- page content -->
    <?php
      include('dbConfig.php');
    $c_id = $_SESSION['csid'];
    if(isset($_POST['Update'])){
            
        //$driverid = $_POST['driver_id'];
        $fullName = $_POST['fullname'];
        $address = $_POST['name1'];
        $tele  = $_POST['number1'];
        $mobile = $_POST['number2'];
        $nic=$_POST['name2'];
        $designation=$_POST['name3'];
        $email=$_POST['Email'];
        $companyName=$_POST['name4'];
        
            
        $sql= "UPDATE customer SET fullname = '$fullName',address='$address',tele='$tele',mobile='$mobile',nic='$nic',designation='$designation' ,email='$email',companyName='$companyName' WHERE customer_id = $c_id";
        
       if(!mysqli_query($dbcon,$sql)){
               echo'<script language ="javascript">';
                    echo "swal({  title: 'Error!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='updateProfile.php'});";
                echo'</script>';
            }
            else{
                 echo'<script language ="javascript">';
                    echo "swal({  title: 'Driver Updated!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='updateProfile.php'});";
                echo'</script>';
            }
        
        $sqlupdatevehicle="UPDATE vehicle SET status=1 WHERE vehicle_id=$vehicleid";
        mysqli_query($dbcon,$sqlupdatevehicle);
        
    }
    
?>
<div class="right_col" role="main">
    <h1 class="hfont">Update Your Profile Here!</h1>
<?php

                                include('dbConfig.php');
                                $c_id = $_SESSION['csid'];
                                $sql = "SELECT * FROM customer where customer_id=$c_id ";
                                $result = $db->query($sql);
                                while($row = $result->fetch_assoc()) {
                                    ?>
                                
<form>
    <legend>Personal information:</legend>
    <fieldset >
        <h3>Full name: </h3><br><input type="text" name="fullname" style="font-size:12pt;width:800px;" autocomplete="off" value=<?php echo $row['fullname'] ?> > <br>
        <h3>Address  : </h3><br><input type="text" name="name1" max="40" style="font-size:12pt;width:800px;" autocomplete="off" value=<?php echo $row['address'] ?>><br>
        <h3>Telephone : </h3><br><input type="number" name="number1"  style="font-size:12pt;width:200px;" autocomplete="off" value=<?php echo $row['tele'] ?>><br>
        <h3>Mobile : </h3><br><input type="number" name="number2"  style="font-size:12pt;width:200px;" autocomplete="off" value=<?php echo $row['mobile'] ?>><br>
        <h3>NIC : </h3><br><input type="text" name="name2"  style="font-size:12pt;width:200px;" autocomplete="off" value=<?php echo $row['nic'] ?>><br>
        <h3>Designation : </h3><br><input type="text" name="name3"  style="font-size:12pt;width:800px;" autocomplete="off" value=<?php echo $row['designation'] ?>><br>
        <h3>Email : </h3><br><input type="Email" name="Email"  style="font-size:12pt;width:400px;" autocomplete="off" value=<?php echo $row['email'] ?>><br>
        <h3>company name : </h3><br><input class="in"  type="text" name="name4"  style="font-size:12pt;width:400px;" value=<?php echo $row['companyName'] ?>><br> <br>
        
        <h4><input type="submit" name="Update"></h4>
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
