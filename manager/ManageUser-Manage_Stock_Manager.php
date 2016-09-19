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
            <h2 class="page-header">Manage Stock Manager</h2>
        </div>

    </div>
    <div class="row">

        <form name="form1" action="addUser.php" method="post" onsubmit="return check();">
            <table border="0">
                <tr></tr>
                <tr>
                    <td id="table-font" width="60%">User name*</td>
                    <td><input id="input1" type="text" name="username" class="form-control" required></td>
                </tr>
                <tr>
                    <td id="table-font" width="60%">password*</td>
                    <td><input id="input1" type="password" name="password" class="form-control" required></td>
                </tr>
                <br><br>
                <tr>
                    <td id="table-font" width="60%">Access level</td>
                    <td>
                        <select name="acclevel" class="form-control">
                            <option value="Manager">Manager</option>
                            <option value="StockManager">Stock Manager</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br><br><br>
            <input type="submit" id="button1" class="btn btn-default btn-lg active" value="Add" name="insert" style="font-size: 16px">
            <input id="button1" class="btn btn-default btn-lg active" value="Send emal" name="send" style="font-size: 16px">
        </form>
    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
