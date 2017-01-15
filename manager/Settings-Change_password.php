<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>
    <title>Manager Admin</title>
    <!-- link css, alert files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
</head>

<body>

<!-- get database connection and manager's menu -->
<?php
    include ("../config/managermenu.php");
    //include('database_connection.php');
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header">Change Password</h4>
        </div>
        
    </div>
    <div class="right_col" role="main">
    


    <div class="row">

        <div id="content">
        <div id="top">
           
            <br><br>
            <form method="post" action="Settings-Change_password.php">
            <table class="ui definition table" >
            <tr>
                <td id="table-font" width="30" >
                    Password*
                </td>
                <td>
                    <input type="password" name="oldpwd" class="form-control" required>
                </td>
            </tr>
            <tr>
                <td id="table-font" width="30" >
                    New Password*
                </td>
                <td>
                    <input type="password" name="Newpwd1" class="form-control" required>
                    <!--<label class="active">atleast 6 charactors with numbers and letters</label>-->
                </td>
            </tr>
            <tr>
                <td id="table-font" width="30" >
                    Confirm new Password*
                </td>
                <td>
                    <input type="password" name="Newpwd2" class="form-control" required>
                </td>
            </tr>
           <tr>
            <td colspan="2">
                <button type="submit" id="button3" class="" name="pwd">Change</button>
            </td>
            </tr>
            </table>
            <br><br>
            </form>
        </div>
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
            
    </div>
    <?php  
    //get inputs  
    if(isset($_POST["pwd"])){
    $newpwd1=$_POST["Newpwd1"];
    $oldpwd=$_POST["oldpwd"];
    $newpwd2=$_POST["Newpwd2"];
    
    //query
    $sql = "UPDATE user SET password='$newpwd1' WHERE accessLevel=1";
    $sql_1 = "select password from user where accessLevel=1;";
    
    $result = mysqli_query($dbcon, $sql_1);
    $row = mysqli_fetch_assoc($result);
    $old_password = $row["password"];
    if ($old_password == $oldpwd){
        if($newpwd1==$newpwd2){
            if (mysqli_query($dbcon, $sql) === TRUE){
                echo'<script language ="javascript">';
                    echo "swal({  title: 'Change Password Successful!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='Settings-Change_password.php'});";
                echo'</script>';
                
            }
            else{
                echo'<script language ="javascript">';
                    echo "swal({  title: 'New Password Did Not Matching!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='Settings-Change_password.php'});";
                echo'</script>';
                
            }
        }else{
            echo'<script language ="javascript">';
                echo "swal({  title: 'New Password Did Not Matching!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='Settings-Change_password.php'});";
            echo'</script>';
            
        }
    }else{
        echo'<script language ="javascript">';
            echo "swal({  title: 'Old Password Did Not Matching!', text: '', type: 'error', confirmButtonText: 'Done!'}, function()
            {window.location.href='Settings-Change_password.php'});";
        echo'</script>';
    }

    mysqli_close($dbcon);
}
?>
</div>
<!-- js files -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
