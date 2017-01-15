<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" type="text/css"  href="Stock_NewReport_Design.css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="designs/template.css" type="text/css" />
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="js/sweetalert.css">
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Graphical Reports</h3>
        </div>
        
    </div>
    <div class="row">
            <form method="post" action="Stock_NewReport_GraphReportDisplay.php">
    <div class="upper_panel_new_report">
      

       <div class="col-md-2"></div>
    
        <div class="col-md-6" id="drop_down" >       
    
    
            <ul class="drop_down_ul">
                  <li>
                    <input type="radio" id="f-option" name="type" value="Sewing Machines">
                    <label for="f-option">Sewing Machines</label>
                    
                    <div class="check"></div>
                      <br><br>
                  </li>
                  
                  <li>
                    <input type="radio" id="s-option" name="type" value="Sewing Machine Spare Parts">
                    <label for="s-option">Sewing Machine Spare Parts</label>
                    
                    <div class="check"><div class="inside"></div></div>
                       <br><br>
                  </li>
                  
                  <li>
                    <input type="radio" id="t-option" name="type" value="Tools">
                    <label for="t-option">Tools</label>
                    
                    <div class="check"><div class="inside"></div></div>
                     <br><br>                       

                  </li>
            </ul>
        </div>

        <div class="col-md-4" id="button_effect">
            <input type="submit" id="btnNewReportGenerateReport" name="btnNewReportGenerateReport" value="Generate Report"  />
        </div>
        
    </div>
</form> 
</div>
    </div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
