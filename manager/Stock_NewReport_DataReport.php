<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Manager Admin</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" type="text/css"  href="Stock_NewReport_Design.css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="designs/template.css" type="text/css" />
     
    </head>
    <body>
        
        <?php
            include("../config/managermenu.php");
        ?>

                <ul class="breadcrumb">
                    <h4>New Reports</h4>
                </ul>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header">Data Reports</h4>
        </div>
        
    </div>
    <div class="right_col" role="main">
    


    <div class="row">

    
<form method="post" action="Stock_NewReport_DataReportDisplay.php">
      

       <div class="col-md-2"></div>
    
        <div class="col-md-6" id="drop_down" >       
    
    
            <ul class="drop_down_ul">
                  <li>
                    <input type="radio" id="f-option" name="selector" value="Sewing Machines">
                    <label for="f-option">Sewing Machines</label>
                    
                    <div class="check"></div>
                  </li>
                  <br><br>
                  <li>
                    <input type="radio" id="s-option" name="selector" value="Sewing Machine Spare Parts">
                    <label for="s-option">Sewing Machine Spare Parts</label>
                    
                    <div class="check"><div class="inside"></div></div>
                  </li>
                <br><br>
                
                  <li>
                    <input type="radio" id="t-option" name="selector" value="Tools">
                    <label for="t-option">Tools</label>
                    
                    <div class="check"><div class="inside"></div></div>
                  </li>
            </ul>
        </div>

        <div class="col-md-4" id="button_effect">
            <input type="submit" id="btnNewReportGenerateReport" name="btnNewReportGenerateReport" value="Generate Report"  />
        </div>
        
</form>

            </div>
        </div>
        </div>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






