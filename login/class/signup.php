<html>
<head>
   
    </head>

<body>

<?php

include ("../../config/database.php");



    $fname = $_POST['fullname'];
    $desi = $_POST['desi'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $mob = $_POST['mob'];
    $tele = $_POST['tele'];
    $email = $_POST['email'];
    $cname = $_POST['cname'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
   
    $sql = "INSERT INTO customer (fullname, designation, companyName, address, email, mob, tele, username, password, nic, )
VALUES ('$fname', '$desi', '$cname', '$address', '$email', '$mob', '$tele' '$uname', '$pword', '$nic',)";
    echo " LOL".$fname."</br>";
    echo " LOL".$desi."</br>";
    echo " LOL".$address."</br>";
    echo " LOL".$nic."</br>";
    echo " LOL".$mob."</br>";
    echo " LOL".$tele."</br>";
    echo " LOL".$email."</br>";
    echo " LOL".$cname."</br>";
    echo " LOL".$uname."</br>";
    echo " LOL".$pword."</br>";
    

$retval = mysqli_query($conn, $sql);
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";

?>

    </body>
</html>