<?php
//get database connection
include('database_connection.php');
//define variables
if(isset($_POST["uname"])){
    $newusername1=$_POST['NewUsername1'];
    $oldusername=$_POST['Username'];
    $newusername2=$_POST['NewUsername2'];
    //query
    $sql = "UPDATE user SET username='$newusername1' WHERE accessLevel=1";
    $sql1 = "SELECT username FROM user WHERE EXISTS('$oldusername')";
    //if(mysqli_query($dbcon, $sql1) === TRUE){
        if($newusername1==$newusername2){
            if (mysqli_query($dbcon, $sql) === TRUE){
                header("location:Settings-Change_username.php");
            }
            else{
                echo "<script>";
                echo "alert('ERROR: Check your information again!')";
                echo "</script>";
                header("location:Settings-Change_username.php");
            }
        }else{
            echo "<script>";
            echo "alert('ERROR: Check your information again!')";
            echo "</script>";
            header("location:Settings-Change_username.php");
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