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
      <script src="js/sweetalert-dev.js"></script>
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
        $mob = $_POST['mob'];
        $tele = $_POST['tele'];
        $email = $_POST['Email'];
        

        // Check connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        } 

        $sql = "UPDATE customer SET fullname='$fname',designation='$desi',address='$address',mobile='$mob',tele='$tele',email='$email' WHERE customer_id=$c_id";

        if ($db->query($sql) === TRUE) {
            echo'<script language ="javascript">';
                    echo "swal({  title: 'Your profile update successfully!', text: 'Loagin Again to See the Changes.', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='updateProfile.php'});";
                echo'</script>';
        } else {
             echo'<script language ="javascript">';
                    echo "swal({  title: 'Error!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='updateProfile.php'});";
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
<!--update profile form-->
<form method="POST" onSubmit = "return validateform();">
    <legend>Personal information:</legend>
    <table class="table table-hover">
        <tr>
            <td><h2>Full name </h2></td>
            <td><input type="text" name="fullname" class="form-control" style="font-size:12pt;width:800px;" autocomplete="off" value=<?php echo $row['fullname'] ?> ></td>
        </tr>
        <tr>
            <td><h2>Address   </h2></td>
            <td><input type="text" name="address" class="form-control" max="40" style="font-size:12pt;width:800px;" autocomplete="off" value=<?php echo $row['address'] ?>></td>
        </tr>
        <tr>
            <td><h2>Telephone  </h2></td>
            <td><input type="text" id="mob" name="tele" class="form-control" style="font-size:12pt;width:200px;" autocomplete="off" value=<?php echo $row['tele'] ?>></td>
        </tr>
        <tr>
            <td><h2>Mobile  </h2></td>
            <td><input type="text" id="mob" name="mob" class="form-control" style="font-size:12pt;width:200px;" autocomplete="off" value=<?php echo $row['mobile'] ?>></td>
        </tr>
        <tr>
            <td><h2>NIC  </h2></td>
            <td><input type="text" name="nic" disabled class="form-control" style="font-size:12pt;width:200px;" autocomplete="off" value=<?php echo $row['nic'] ?>></td>
        </tr>
        <tr>
            <td><h2>Designation  </h2></td>
            <td><input type="text" name="desi" class="form-control" style="font-size:12pt;width:800px;" autocomplete="off" value=<?php echo $row['designation'] ?>></td>
        </tr>
        <tr>
            <td><h2>Email  </h2></td>
            <td><input type="Email" name="Email" class="form-control" style="font-size:12pt;width:400px;" autocomplete="off" value=<?php echo $row['email'] ?>></td>
        </tr>
        <tr>
            <td><h2>company name  </h2></td>
            <td><input type="text" class="form-control" name="cname" disabled style="font-size:12pt;width:400px;" value=<?php echo $row['companyName'] ?>></td>
        </tr>
        <tr>
            <td colspan="2"><center><input type="submit" class="btn btn-success" name="update" value="Update Profile"></center></td>
        </tr>
    </table>
    
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
<!--validate the phone number-->
<script type="text/javascript">
    function validateform(){
        var phoneno =/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if(!phoneno.test($("#mob").val())) {  
            window.alert("wrong mobile phone no");  
            return false;   
        }  
        else{
          return true;
        }
    
    }
</script>
</html>
