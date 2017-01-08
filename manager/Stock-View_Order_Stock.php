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
            <h2 class="page-header">View Order Stock</h2>
        </div>
        
    </div>
    <div class="row">
         <div id="content">

        <div id="top2">
            <table style width="100%" class="table datatable">
                <tr>
                    <th>Report ID</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2016.01.02</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2016.01.03</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2016.01.04</td>
                </tr>
            </table>

        </div>

        <div id ="bottom2" style="border: thin">
            <h3 style="color: #0000FF">
                                                   Stock Report
            </h3>
            <br><br>

            <tr>
                <td id="table-font" width="30" >
                    Report ID
                </td>
                <td>
                    <input type="text" name="Report ID" class="form-control" style="width: 30%">
                </td>
            </tr>

            <tr>
                <td id="table-font" width="60%">
                    Date
                </td>
                <td>
                    <input type="text" name="Date" class="form-control" style="width: 30%">
                    <br><br>
                </td>
            </tr>

        </div>

    </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
    <div id="footer"></div>

    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
