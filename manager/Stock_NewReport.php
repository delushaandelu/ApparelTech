<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
     
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    
    <style>
        .btn-block{
            background-color: #1caf9a;
        }
    </style>
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Reports</h3>
        </div>
        
    </div>
    <div class="row">
        <br><br><br><br><br>
        
        <div class="col-md-4"></div>
        <div class="col-md-4">  
            <div id="btn" class="btn-lg">
            <button type="submit" onclick="location.href = 'Stock_NewReport_DataReport.php';" id="but" class="btn-lg btn-block" ><h4>Data Report</h4></button>
            </div>          
            </br>
             <div id="btn" class="btn-lg">               
            <button type="submit" onclick="location.href = 'Stock_NewReport_GraphReport.php';" id="but" class=" btn-lg btn-block" ><h4>Graphical Report</h4></button>
            </div>
        </div>

    </div>      

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
