<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <!-- css , sweetalert files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">

   <style type="text/css">
       
      /* ==========================*/
    .bt{
        padding-left: 10%;
        padding-top: 15%;
        width: 230px;
        height: 150px;
       
       
    }  
    #dash{
            margin-top:0%;
            margin-left:5%;
        }
    #dash1{
            margin-top:10%;
            margin-left: 5%;
            
        }
    .bt a {
       text-align: center;
        text-decoration: none;
        color: gray;
         font-weight: 400;
        font-size: 17px;
    }
        .bt a:hover{
           
            color: aliceblue;
            text-decoration: none;
        }
       /* .bt i{
            margin-top: 15% ;
          margin-left:60%;
        }*/
       .h1{
            margin-top: 2%;
            width: 80px;
            height: 70px;
            position: relative;
            float: right;
        } 
        .bt{
            box-shadow: 0 10px 6px -6px #777;
        }
        
</style>
</head>

<body>

<?php
    //manager's menu
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="1">
                <h4 class="page-header"></h4>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
  
    <div id="dash">
                <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff" onclick="window.location.href='supplier-manage_supplier.php'"><a href="">Manage Supplier</a><i class="fa fa-arrow-circle-right"></i> <!--<i class="fa fa-university fa-5x"></i>--><img class="h1" src="images/sup.png"/></button>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff" onclick="window.location.href='Stock-View_Stock.php'"><a href="">View Stock</a><i class="fa fa-arrow-circle-right"></i>  <!--<i class="fa fa-stack-overflow fa-5x"></i>--><img class="h1" src="images/stock.png"/></button>
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff" onclick="window.location.href='ManageUser-Manage_Customer.php'"><a href="">Manage Customer</a><i class="fa fa-arrow-circle-right"></i> <!-- <i class="fa fa-user fa-5x"></i>--><img class="h1" src="images/cus.png"/></button>
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff" onclick="window.location.href='ManageUser-View_Customer.php'"><a href="">View Customer</a><i class="fa fa-arrow-circle-right"></i>  <!--<i class="fa fa-users fa-5x"></i>--><img class="h1" src="images/cus2.png"/></button>
                </div>
    </div>
    <br><br><br><br><br><br>

                <div id="dash1">
                    
                    <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff" onclick="window.location.href='ManageUser-Manage_Stock_Manager.php'"><a href="">Add user</a><i class="fa fa-arrow-circle-right"></i> <!--<i class="fa fa-university fa-5x"></i>--><img class="h1" src="images/cus1.png"/></button>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff" onclick="window.location.href='Stock_NewReport.php'"><a href="">Stock Reports</a><i class="fa fa-arrow-circle-right"></i>  <!--<i class="fa fa-stack-overflow fa-5x"></i>--><img class="h1" src="images/q.png"/></button>
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff" onclick="window.location.href='backup.php'"><a href="">Backup</a><i class="fa fa-arrow-circle-right"></i> <!-- <i class="fa fa-user fa-5x"></i>--><img class="h1" src="images/back.png"/></button>
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff" onclick="window.location.href='Settings-Change_password.php'"><a href="">Change Password</a><i class="fa fa-arrow-circle-right"></i>  <!--<i class="fa fa-users fa-5x"></i>--><img class="h1" src="images/lock.png"/></button>
                </div>
                    
              
            </div>
             
<!-- js files -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
