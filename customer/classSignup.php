<script src="js/sweetalert-dev.js"></script>
<link rel="stylesheet" href="js/sweetalert.css">

<?php
include('dbConfig.php');
if(isset($_POST["sumbit"])){
    $fname = $_POST['fullname'];
    $desi = $_POST['desi'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $mob = $_POST['mob'];
    $tele = $_POST['tele'];
    $email = $_POST['email'];
    $cname = $_POST['cname'];
    $uname = $_POST['uname'];
    $password = $_POST['pword'];
    
    
    $sql="INSERT INTO customer (nic,fullname,designation,companyName,address,email,mobile,tele,username,password, status) VALUES ('$nic','$fname','$desi','$cname','$address','$email','$mob','$tele','$uname','$password', 'false')";
    

if (mysqli_query($db, $sql) === TRUE) {
    
        echo'<script language ="javascript">';
        echo"aleart('We will give your account authentication soon! Thank you')";
        echo'</script>';
    } else {

        echo'<script language ="javascript">';
        echo"aleart('Error in Submition')";
        echo'</script>';
    }

    mysqli_close($db);
    }

    ?>