<?php
//get database connection
include('database_connection.php');
//define variables
if(isset($_POST["pwd"])){
    $newpwd1=$_POST["Newpwd1"];
    $oldpwd=$_POST["oldpwd"];
    $newpwd2=$_POST["Newpwd2"];
    //query
    
    
    $sql = "UPDATE user SET password='$newpwd1' WHERE accessLevel=1";
    $sql1 = "SELECT * FROM user WHERE `user_id`=1 and password='$oldpwd';";
    //if(mysqli_query($dbcon, $sql1) === TRUE){
        if($newpwd1==$newpwd2){
            if (mysqli_query($dbcon, $sql) === TRUE){
                echo "<script>";
                echo "sweetAlert('Done...', 'Passowrd changed!!', 'success');";
                echo "</script>";
                header("location:Settings-Change_password.php");
            }
            else{
                echo "<script>";
                echo "sweetAlert('Oops...', 'Password update failed!', 'error');";
                echo "</script>";
                header("location:Settings-Change_password.php");
            }
        }else{
            echo "<script>";
            echo "sweetAlert('Oops...', 'New passowrd not matching!', 'error');";
            echo "</script>";
            header("location:Settings-Change_password.php");
        }
   /* }else{
        echo "<script>";
            echo "alert('ERROR: Check your information again!')";
            echo "</script>";
            header("location:Settings-Change_password.php");
    }*/

    mysqli_close($dbcon);
   

}

?>