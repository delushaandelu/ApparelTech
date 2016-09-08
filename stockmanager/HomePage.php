<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" type="text/css"  href="HomePageDesign.css"/>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>                       
    </head>
    <body>
        
        <?php
        session_start();
            include("../config/stockmgrmenu.php");
        ?>

                <ul class="breadcrumb">
                    <h2>Home Page</li></h2>
                </ul>

                <div class="section1">
                    <div class="col-md-4">
                        <button type="button" class="myButton"> Manage Stock</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="myButton">New Report</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="myButton">Previous Reports</button>
                    </div>
                </div>

                <div class="section2">
                    

                    <div class="col-md-4">
                        <button type="button" class="myButton">Received Purshase Orders</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="myButton">Create Purchase Orders</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="myButton">Manage Rent</button>
                    </div>
                    
                    
                    
                </div>


                 <div class="section3">
                    

                    <div class="col-md-4">
                        <button type="button" class="myButton">View Rent Reports</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="myButton">Manage Delivery</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="myButton">Delivery Reports</button>
                    </div>
                    
                    
                    
                </div>



                 <div class="section4">
                    

                    <div class="col-md-4">
                        <button type="button" class="myButton">Delivery Details</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="myButton">Change Username</button>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="myButton">Change Password</button>
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






