<?php
//get database connection
include('database_connection.php');
//define variables
 $acc = 0;
if(isset($_POST["insert"])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $acc=$_POST['acclevel'];

    if('acclevel'=='Manager'){
        $acc=1;
    }
    elseif ('acclevel'=='Stock Manager'){
        $acc=2;
    }

    //query
    $sql = "INSERT INTO user(username, password, accessLevel) VALUES ($username','$password','$acc')";

    if (mysqli_query($dbcon, $sql) === TRUE){
        header("location:ManageUser-Manage_Stock_Manager.php");
    }
    else{
        echo "<script>";
        echo "alert('ERROR: Check your information again!')";
        echo "</script>";
        header("location:ManageUser-Manage_Stock_Manager.php");
    }

    mysqli_close($dbcon);

}

?>