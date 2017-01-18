<?php
include('dbConfig.php');
    $fname = mysqli_real_escape_string($db,$_POST['fullname']);
    $desi = mysqli_real_escape_string($db,$_POST['desi']);                                     
    $address = mysqli_real_escape_string ($db,$_POST['address']);
    $nic =  mysqli_real_escape_string ($db,$_POST['nic']);
    $mob =  mysqli_real_escape_string ($db,$_POST['mob']);
    $tele =  mysqli_real_escape_string ($db,$_POST['tele']);
    $email =  mysqli_real_escape_string ($db,$_POST['email']);
    $cname =  mysqli_real_escape_string ($db,$_POST['cname']);
    $uname =  mysqli_real_escape_string ($db,$_POST['uname']);
    $pass =  mysqli_real_escape_string ($db,$_POST['pword']);
    $password = sha1($pass);
    $fname=htmlspecialchars($fname);
    $desi=htmlspecialchars($desi);
    $address=htmlspecialchars($address);
    $nic=htmlspecialchars($nic);
    $mob=htmlspecialchars($mob);
    $tele=htmlspecialchars($tele);
    $email=htmlspecialchars($email);
    $cname=htmlspecialchars($cname);
    $uname=htmlspecialchars($uname);
   
    
    

    $sql="INSERT INTO customer (nic,fullname,designation,companyName,address,email,mobile,tele,username,password, status, image) VALUES ('$nic','$fname','$desi','$cname','$address','$email','$mob','$tele','$uname','$password', 'false', '$target_file')";
    

if (mysqli_query($db, $sql) === TRUE) {
        echo'<script>';
        echo"alert('We will give your account authentication soon! Thank you')";
        echo'</script>';
        header('location:index.php');
    } else {

        echo'<script>';
        echo"alert('Error in Submition')";
        echo'</script>';
        
    }

    mysqli_close($db);
    ?>