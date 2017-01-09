<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" type="text/css"  href="HomePageDesign.css"/>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>
	<style type="text/css">
    .bt{
        padding-left: 10%;
        padding-top: 15%;
        width: 230px;
        height: 150px;
        border-radius:100px;
       
       
    }  
    .bt a {
       text-align: center;
        text-decoration: none;
        color: aliceblue;
        font-size: 15px;
    }
        .bt a:hover{
           
            color: aliceblue;
            text-decoration: none;
        }
        #dash{
            margin-top:6%;
            margin-left: 5%;
        }
        #dash1{
            margin-top: 23%;
            margin-left: 5%;
            width: 1040px;
        }
        .bt i{
            margin-top: 15% 
          margin-left:60%;
        }
        
        #company{
        font-family: 'Tangerine', serif;
        font-size: 60px;
        margin-top: 10%;
        }
        
     
</style>
   
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>
        
        <div id="company">
            <p align="center">PRIYANTHA ENTERPRISES</p>
        </div>

       
            <div id="dash">
                <div class="col-lg-3 col-md-6">
                    <div class="bt" style="background-color:#6495ED"><a href="">Manage Stock</a><i class="fa fa-arrow-circle-right"></i> <i class="fa fa-building-o fa-5x"></i></div>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="bt" style="background-color:#008B8B"><a href="Stock_NewReport.php">Stock Report</a><i class="fa fa-arrow-circle-right"></i> <i class="fa fa-tasks fa-5x"></i></div>
                     
                     
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="bt" style="background-color:#8FBC8F"><a href="Purchase%20Order_ManagePurchaseOrder.php">Manage P/O</a><i class="fa fa-arrow-circle-right"></i> <i class="fa fa-shopping-cart fa-5x"></i></div>
                   
                </div> 
                <div class="col-lg-3 col-md-6">
                    <div class="bt" style="background-color:#DAA520"><a href="Purchase%20Order_ManagePurchaseOrder.php">Rent order</a><i class="fa fa-arrow-circle-right"></i> <i class="fa fa-support fa-5x"></i> </div>
                
                </div> 
        </div>
        <div id="dash1">
                <div class="col-lg-3 col-md-6">
                    <div class="bt" style="background-color:#CD853F"><a href="Purchase%20Order_ManagePurchaseOrder.php">Manange Delivery</a><i class="fa fa-arrow-circle-right"></i> <i class="fa fa-user fa-5x"></i></div>
                </div> 
                <div class="col-lg-3 col-md-6">
                    
                     <div class="bt" style="background-color:#A9A9A9"><a href="driver_details.php">Manage Driver</a><i class="fa fa-arrow-circle-right"></i> <i class="fa fa-hdd-o fa-5x"></i></div>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="bt" style="background-color:#A52A2A"><a href="vehicle_details.php">Manage Vehicle</a><i class="fa fa-arrow-circle-right"></i> <i class="fa fa-truck fa-5x"></i></div>
                </div>               
                <div class="col-lg-3 col-md-6">
                    <div class="bt" style="background-color:#DEB887"><a href="changepassword.php">Change Password</a><i class="fa fa-arrow-circle-right"></i>  <i class="fa fa-unlock-alt fa-5x"></i></div>
                                    
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






