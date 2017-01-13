<?php
//get database connection
include('database_connection.php');
//define variables
if(isset($_POST["add"])){
    $usern=$_POST['username'];
    $pwd=$_POST['password'];
    $cpwd=$_POST['cpassword']
    $al=$_POST['acclevel'];
    if($al == 'Manager'){
        $sql = "INSERT INTO user(username,password,accessLevel) VALUES ('$usern', '$pwd', 1)";

    if($pwd==$cpwd){
    if (mysqli_query($dbcon, $sql) === TRUE){
        header("location:ManageUser-Manage_Stock_Manager.php");
    }
    else{
        echo "<script>";
        echo "alert('ERROR: Check your information again!')";
        echo "</script>";
        header("location:ManageUser-Manage_Stock_Manager.php");
    }
    }
    else{
        echo "<script>";
        echo "alert('ERROR: Please reenter correct password!')";
        echo "</script>";
        header("location:ManageUser-Manage_Stock_Manager.php");
    }

    mysqli_close($dbcon);

    }
    else{
     
    //query
    
    $sql = "INSERT INTO user(username,password,accessLevel) VALUES ('$usern', '$pwd', 2)";

    if($pwd==$cpwd){
    if (mysqli_query($dbcon, $sql) === TRUE){
        header("location:ManageUser-Manage_Stock_Manager.php");
    }
    else{
        echo "<script>";
        echo "alert('ERROR: Check your information again!')";
        echo "</script>";
        header("location:ManageUser-Manage_Stock_Manager.php");
    }
    }
    else{
        echo "<script>";
        echo "alert('ERROR: Please reenter correct password!')";
        echo "</script>";
        header("location:ManageUser-Manage_Stock_Manager.php");
    }

    mysqli_close($dbcon);

    }
}
?>