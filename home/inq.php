 <?php
    //get database connection
    include('database_connection1.php'); 
?>
<?php
$error=FALSE;
$user_name_err=$user_email_err=$phone_number_err=$message_err="";
    
if(isset($_POST['submit'])){
    
   //echo ($_POST['user_name']); 
    
    if(empty($_POST['user_name'])){
        $user_name_err="<br>username is reqired.";
        $error=TRUE;
    }else{
         $user_name = $_POST["user_name"];
        //echo $user_name;
    }
    
    if(empty($_POST['user_email'])){
        $user_email_err="<br>useremail is reqired.";
        $error=TRUE;
    }else{
         $user_email = $_POST["user_email"];
       // echo $user_email;
    }
    
    if(empty($_POST['phone_number'])){
        $phone_number_err="<br>phonenumber is reqired.";
        $error=TRUE;
    }else{
         $phone_number=$_POST["phone_number"];
    }
    
     if(empty($_POST['message'])){
        $message_err="<br>message is required.";
        $error=TRUE;
        
       }else{
         $message=$_POST["message"]; 
     }  
        
        
    if($error==FALSE){
        echo 'ook';
        $sqlinsert="INSERT INTO inquiry(name,email,phone,message) VALUES('".$user_name."','".$user_email."','".$phone_number."','".$message."')";
        if (mysqli_query($dbcon, $sqlinsert) === TRUE) {
                
                echo 'OK';
            }else{
                echo 'NOT OK';
            }
        }
    }


?>