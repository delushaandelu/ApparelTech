<?php
class User{        //user class
public function changepswd(){
    require("database_connection.php");        //database connection
    $OldPassword1=$_POST["oldpassword"];
    $OldPassword = sha1($OldPassword1);
    $NewPassword1=$_POST["newpassword"];
    $NewPassword = sha1($NewPassword1);
    $ConfirmPassword1=$_POST["confirmpassword"];
    $ConfirmPassword = sha1($ConfirmPassword1);
   
    $uid = $_SESSION['uid'];
    
    
    if(!empty($_POST['oldpassword']) && !empty($_POST['newpassword']) && !empty($_POST['confirmpassword'] ) ){  //cheking input fields are filled.
            $sql="SELECT password FROM user WHERE user_id=$uid";
            $result=mysqli_query($dbcon,$sql);
        if(!$result){
            echo"error";}
        
            $res=mysqli_fetch_array($result);
            echo $res['password'];
        if($res['password']==$OldPassword){               //cheking old password match with entered old password.
            
            if($NewPassword==$ConfirmPassword){                  //cheking new password match with entered confirm password.
                
                    $updatepswd="UPDATE user SET password='$NewPassword' WHERE user_id=$uid";        // change the password.
                    $result1=mysqli_query($dbcon,$updatepswd);
                        echo'<script language ="javascript">';
                            echo'alert("password changed succesfully")';  
                        echo'</script>'; 
         
            }
                else {
                        echo'<script language ="javascript">';
                            echo'alert("Not match passwords")';
                        echo'</script>'; 
                }   

        }
            else{
                        echo'<script language ="javascript">';
                            echo'alert("Not match with original one")';
                        echo'</script>'; 
            }
        
        
    }
    else{
                    echo'<script language ="javascript">';
                        echo'alert("All fields shoud be filled")';
                    echo'</script>'; 
    }
   
}
}
?>



