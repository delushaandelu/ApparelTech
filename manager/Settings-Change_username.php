<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Change Username</h2>
        </div>
        
    </div>
    <div class="row">
<div id="content">
        <div id="top">
            <h5>
                <font color="#a52a2a" size="+2">Change Username!</font>
            </h5>
            <br><br>
            <tr>
                <td id="table-font" width="30" >
                    Username*
                </td>
                <td>
                    <input type="text" name="Username" class="form-control" required>
                </td>
            </tr>
            <tr>
                <td id="table-font" width="30" >
                    New Username*
                </td>
                <td>
                    <input type="text" name="New Username" class="form-control" required>
                </td>
            </tr>
            <tr>
                <td id="table-font" width="30" >
                    Confirm new Username*
                </td>
                <td>
                    <input type="text" name="New Username" class="form-control" required>
                </td>
            </tr>
            <br><br>
            <button type="button" style="font-size:14px" id="button1" class="">Change</button>
            <br><br>

            <h5>
                <font color="#a52a2a" size="+2">Change Password!</font>
            </h5>
            
            <br><br>
            
            <button type="button" id="button1" style="font-size:14px" class="" onclick="location.href='Settings-Change_password.php' ">Change</button>
        </div>
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>

    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
