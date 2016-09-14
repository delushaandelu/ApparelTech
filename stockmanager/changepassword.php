<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>
        <link rel="stylesheet" href="designs/template1.css" type="text/css" />
    </head>
<body>
     
<?php
   
    include("../config/stockmgrmenu.php");

    include('user.php');
?>

<ul class="breadcrumb">
    <h2>Change Password here!</li></h2>
</ul>
    
    
<div id="content">
    <div id="changepwd">
    <div class="panel panel-success">
        <div class="panel-heading" align="center">More Protection!</div>
           <div class="panel-body">
                <form method="post">
                    <table id="pwdtb" border="0" width="400" height="200">
                    <tr>
                        <td id="table_font">Old Password*</td>
                        <td><input type="password" name="oldpassword"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td id="table_font">New Password*</td>
                        <td><input type="password" name="newpassword"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td id="table_font">Confirm Password*</td>
                        <td><input type="password" name="confirmpassword"  class="form-control"></td>
                    </tr>
                    <tr>
                        <td><input type="reset" class="btn btn-info" value="Reset" /></td>    
                        <td><input type="submit" class="btn btn-info" name="changepswd" value="Change"/></td>    
                    </tr>
                </table>
               </form>
            </div>
        </div>
    </div>
</div>
</div>

<div id="footer">
    	
</div>

<?php

if(isset($_POST["changepswd"])){                 //call to changepswd method in User class.
    $myUser = new User();
    $myUser -> changepswd();
    
}


?>

<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
<script type="text/javascript" src="js/settings.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>
    
    </body>
</html>






