<?php
include("../config/customermenu.php");
      include('dbConfig.php');
    $c_id = $_SESSION['csid'];
    if(isset($_POST['update'])){
            
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
        
            if (mysqli_query($dbcon, $sql) === TRUE){
        header("location:updateProfile.php");
    }

    else{
        echo "<script>";
        echo "alert('ERROR: Check your information again!')";
        echo "</script>";
        header("location:updateProfile.php");
    }

    mysqli_close($dbcon);
        
    }
    ?>