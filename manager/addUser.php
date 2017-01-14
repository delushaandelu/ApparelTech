<?php
//get database connection
//include('database_connection.php');
//define variables
if(isset($_POST["add"])){
    $userid=$_POST['userid'];
    $usern=$_POST['username'];
    $pwd=$_POST['password'];
    //$pwd=md5($pwd);
    $cpwd=$_POST['cpassword'];
    $al=$_POST['acclevel'];

    $sql = "INSERT INTO user(user_id,username,password,accessLevel) VALUES ('$userid','$usern', '$pwd', '$al')";
    
    if($pwd == $cpwd){
        if (mysqli_query($dbcon, $sql) == TRUE){
            echo "<script>";
            echo "sweetAlert('Done...', 'Added successfully!', 'success');";
            echo "</script>";
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
            echo "alert('ERROR: password doesn't match. re enter!')";
            echo "</script>";
            header("location:ManageUser-Manage_Stock_Manager.php");
    }
    
    mysqli_close($dbcon);
}

?>