<?php
include('database_connection1.php'); 
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $phone_number=$_POST["phone_number"];
    $message=$_POST["message"]; 


if(isset($_POST['submit'])){
    $sql="INSERT INTO inquiry (name,email,phone,message) VALUES ('$user_name','$user_email','$phone_number','$message')";
        if (mysqli_query($dbcon, $sql) === TRUE) {
        echo'<script>';
        echo"alert('We will give your account authentication soon! Thank you')";
        echo'</script>';
    } else {

        echo'<script>';
        echo"alert('Error in Submition')";
        echo'</script>';
        
    }

    mysqli_close($dbcon);
?>