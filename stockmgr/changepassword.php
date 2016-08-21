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
        ?>

                <ul class="breadcrumb">
                    <h2>Change Password here!</li></h2>
                </ul>
    </br></br>
<div id ="lol"</div>
<div id="main">
    <div id="header">
        <img src="images/55.jpg">
    </div>

    <div id="content">
        <div id="changepwd">
        <form method="post">
            <table id="pwdtb" border="0" width="400" height="400">

            <tr>

                <td id="table_font">Old Password*</td>

                <td>
                    <input type="text" name="oldpassword"  class="form-control">
                </td>



            </tr>
            <tr>

                <td id="table_font">New Password*</td>

                <td>
                    <input type="text" name="newpassword"  class="form-control">
                </td>
            </tr>

            <tr>

                <td id="table_font">Conform Password*</td>

                <td>
                    <input type="text" name="conformpassword"  class="form-control">
                </td>
            </tr>

            </table>
       
        <div id="pwd_button_sec">

        <div id="pwd_button_panel">

            <input type="reset" id="button_effect" value="Reset" /><br><br>
            <input type="submit" id="button_effect" name="changepswd" value="Change"/>

        </div>
        </div>
             </form>
        </div>
</div>

   
    <div id="footer">
    	
    </div>
</div>

<?php

if(isset($_POST["changepswd"])){
    include('user.php');
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






