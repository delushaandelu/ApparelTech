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
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
	<style type="text/css">
       
       

    .box a {
        text-decoration: none;
       text-align: center;
        color: gray;
        font-weight: 400;
        font-size: 17px;
    }
       
        #dash{
            margin-top:10%;
            margin-left: 5%;
        }
        #dash1{
            margin-top: 30%;
            margin-left: 5%;
            width: 1040px;
        }
       
        
       .box {
           
	   padding-left: 10%;
        padding-top: 15%;
        width: 230px;
        height: 150px;
        }
        
        .h1{
            margin-top: 2%;
            width: 80px;
            height: 70px;
            position: relative;
            float: right;
        } 
        
        .effect1{
            box-shadow: 0 10px 6px -6px #777;
        }
     
</style>
   
    </head>
    <body style="background-color:#696969">
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>
        
        

  
            <div id="dash">
                <div class="col-lg-3 col-md-6">
                    <button class="box effect1" style="background-color:#fff" onclick="window.location.href='Stock_ManageStock.php'"><a href="">Manage  Stock</a><i class="fa fa-arrow-circle-right"></i> <!--<i class="fa fa-building-o fa-5x"></i>--><img class="h1" src="img/cart.png"/></button>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="box effect1" style="background-color:#fff" onclick="window.location.href='Stock_NewReport.php'"><a href="">Stock Report</a><i class="fa fa-arrow-circle-right"></i><!-- <i class="fa fa-tasks fa-5x"></i>--><img class="h1" src="img/report.png"/></button>
                     
                     
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="box effect1" style="background-color:#fff" onclick="window.location.href='Purchase%20Order_ManagePurchaseOrder.php'"><a href="">Manage P/O</a><i class="fa fa-arrow-circle-right"></i> <!--<i class="fa fa-shopping-cart fa-5x"></i>--><img class="h1" src="img/poo.png"/></button>
                   
                </div> 
                <div class="col-lg-3 col-md-6">
                    <button class="box effect1" style="background-color:#fff" onclick="window.location.href='rent.php'"><a href="Purchase%20Order_ManagePurchaseOrder.php">Manage Rent </a><i class="fa fa-arrow-circle-right"></i> <!--<i class="fa fa-support fa-5x"></i> --><img class="h1" src="img/rent.png"/></button>
                
                </div> 
        </div>                                         
        <div id="dash1">
                <div class="col-lg-3 col-md-6">
                    <button class="box effect1" style="background-color:#fff"  onclick="window.location.href='managedelivery.php'"><a href="">Manange Delivery</a><i class="fa fa-arrow-circle-right"></i> <!--<i class="fa fa-user fa-5x"></i>--><img class="h1" src="img/del.png"/></button>
                </div> 
                <div class="col-lg-3 col-md-6">
                    
                     <button class="box effect1" style="background-color:#fff"  onclick="window.location.href='driver_details.php'"><a href="driver_details.php">Manage Driver</a><i class="fa fa-arrow-circle-right"></i> <!--<i class="fa fa-hdd-o fa-5x"></i>--><img class="h1" src="img/man.png"/></button>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="box effect1" style="background-color:#fff" onclick="window.location.href='vehicle_details.php'"><a href="">Manage Vehicle</a><i class="fa fa-arrow-circle-right"></i> <!--<i class="fa fa-truck fa-5x"></i>--><img class="h1" src="img/vehicle.png"/></button>
                </div>               
                <div class="col-lg-3 col-md-6">
                    <button class="box effect1" style="background-color:#fff" onclick="window.location.href='changepassword.php'"><a href="">Change Password</a><i class="fa fa-arrow-circle-right"></i> <!-- <i class="fa fa-unlock-alt fa-5x"></i>--><img class="h1" src="img/lock.png"/></button>
                                    
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






