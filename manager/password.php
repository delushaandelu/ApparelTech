<?php
//get database connection
include('database_connection.php');
//define variables
if(isset($_POST["pwd"])){
    $newpwd1=$_POST['Newpwd1'];
    $oldpwd=$_POST['pwd'];
    $newpwd2=$_POST['Newpwd2'];
    //query
    $sql = "UPDATE user SET password='$newpwd1' WHERE accessLevel=1";
    $sql1 = "SELECT password FROM user WHERE EXISTS('$oldpwd')";
    //if(mysqli_query($dbcon, $sql1) === TRUE){
        if($newpwd1==$newpwd2){
            if (mysqli_query($dbcon, $sql) === TRUE){
                header("location:Settings-Change_password.php");
            }
            else{
                echo "<script>";
                echo "alert('ERROR: Check your information again!')";
                echo "</script>";
                header("location:Settings-Change_password.php");
            }
        }else{
            echo "<script>";
            echo "alert('ERROR: Check your information again!')";
            echo "</script>";
            header("location:Settings-Change_password.php");
        }
    //}else{
      //  echo "<script>";
        //    echo "alert('ERROR: Check your information again!')";
          //  echo "</script>";
            //header("location:Settings-Change_username.php");
    //}

    mysqli_close($dbcon);

}

?>