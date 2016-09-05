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

            <!-- heading -->
            <h1 class="page-header">Search here!</h1>
        </div>
        
    </div>
    <div class="row">
        <div class="top0">
            <!--search form of supplier-->
                <form method="post" action="Test.php">
                    <table border="0">
                        <tr></tr>
                        <tr>
                            <td id="table-font" width="60%">
                                Supplier name
                            </td>
                            <!--textbox-->
                            <td>
                                <input type="text" name="search" class="form-control" required/>
                                <br><br>
                            </td>
                        </tr>
                        <br><br>
                        <!--button-->
                        <input type="submit" value="Search" />
                    </table>
                </form>
        </div>
    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
