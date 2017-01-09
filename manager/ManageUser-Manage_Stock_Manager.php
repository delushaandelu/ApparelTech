<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <!-- css files -->
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
            <h4 class="page-header">Manage Admin</h4>
        </div>

    </div>
    <div class="row1">
        <!-- form -->
        <form name="form1"  method="post" action="addUser.php">
            <table border="0" class="tb1">
                <tr></tr>
                <tr>
                    <td id="table-font" width="60%">User name*</td>
                    <td><input id="input1" type="text" name="username" class="form-control" required></td>
                </tr>
                <tr>
                    <td id="table-font" width="60%">password*</td>
                    <td><input id="input1" type="password" name="password" class="form-control" required></td>
                </tr>
                <tr>
                    <td id="table-font" width="60%">Confirm password*</td>
                    <td><input id="input1" type="password" name="password" class="form-control" required></td>
                </tr>
                <br><br>
                <tr>
                    <td id="table-font" width="60%">Access level</td>
                    <td>
                        <select class="form-control">
                            <option type="text" name="acclevel">Manager</option>
                            <option type="text" name="acclevel">Stock Manager</option>
                        </select>
                    
                    </td>
                </tr>
            </table>
            <br><br><br>
            
                      <button type="submit" id="button1"  name="add" >Add</button>
			
             <br><br><br>
        </form>
    </div>
</div>

<!-- include js files -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
