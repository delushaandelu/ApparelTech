<?php
class User{
public function changepswd(){
    require("database_connection1.php");
    $OldPassword=$_POST["oldpassword"];
    $NewPassword=$_POST["newpassword"];
    $ConformPassword=$_POST["conformpassword"];
    $sql="SELECT password FROM user WHERE user_id=1";
    $result=mysqli_query($dbcon,$sql);
    if(!$result){
        echo"error";
    }
    $res=mysqli_fetch_array($result);
    if($res['password']==$OldPassword){
     if($NewPassword==$ConformPassword){
         $updatepswd="UPDATE user SET password='$NewPassword' WHERE user_id=1";
         $result1=mysqli_query($dbcon,$updatepswd);
         echo "password changed successfully";
         
         
     }
        else{
            echo "Not match passwords";
        }

}
    else{
        echo"Not match with the original one";
    }
}
}
?>