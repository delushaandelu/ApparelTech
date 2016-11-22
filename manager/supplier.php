<?php
//get database connection
include('database_connection.php');
//define variables
if(isset($_POST["insert"])){
    $supname=$_POST['name'];
    $loc=$_POST['location'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $tele=$_POST['tele'];
    $mobi=$_POST['mobile'];

    //query
    $sql = "INSERT INTO supplier(sname, email, address, location, tele, mobile) VALUES ('$supname','$email','$address','$loc','$tele','$mobi')";

    if (mysqli_query($dbcon, $sql) === TRUE){
        header("location:Supplier-Manage_Supplier.php");
    }
    else{
        echo "<script>";
        echo "alert('ERROR: Check your information again!')";
        echo "</script>";
        header("location:Supplier-Manage_Supplier.php");
    }

    mysqli_close($dbcon);

}

?>