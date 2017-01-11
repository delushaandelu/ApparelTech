<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="assets/css/layout2.css" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" type="text/css">
   <style type="text/css">
       
       
       
      /* ==========================*/
    .bt{
        padding-left: 10%;
        padding-top: 15%;
        width: 230px;
        height: 150px;
       
       
    }  
    #dash{
            margin-top:-38%;
            margin-left:20%;
        }
    #dash1{
            margin-top:10%;
            margin-left: 20%;
            width: 1080px;
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
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
<div id="head">
    
</div>
    
    </div>
  
    <div id="dash">
                <div class="col-lg-3 col-md-6">
                    
                    <button class="bt" style="background-color:#fff"><a href="supplier-manage_supplier.php">Manage Supplier</a><i class="fa fa-arrow-circle-right"></i> <!--<i class="fa fa-university fa-5x"></i>--><img class="h1" src="images/sup.png"/></button>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff"><a href="Stock-View_Stock.php">View Stock</a><i class="fa fa-arrow-circle-right"></i>  <!--<i class="fa fa-stack-overflow fa-5x"></i>--><img class="h1" src="images/stock.png"/></button>
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff"><a href="ManageUser-Manage_Customer.php">Manage Customer</a><i class="fa fa-arrow-circle-right"></i> <!-- <i class="fa fa-user fa-5x"></i>--><img class="h1" src="images/cus.png"/></button>
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff"><a href="ManageUser-View_Customer.php">View Customer</a><i class="fa fa-arrow-circle-right"></i>  <!--<i class="fa fa-users fa-5x"></i>--><img class="h1" src="images/cus2.png"/></button>
                </div>
    </div>
    </br></br></br>

                <div id="dash1">
                <div class="col-lg-3 col-md-6">
                     <button class="bt" style="background-color:#fff"><a href="ManageUser-Manage_Stock_Manager.php">Add user</a><i class="fa fa-arrow-circle-right"></i><!--<i class="fa fa-user-plus fa-5x"></i>--><img class="h1" src="images/cus1.png"/></button>
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff"><a href="Quotation-Manage_Quotation.php">Manage Quotation</a><i class="fa fa-arrow-circle-right"></i><!--<i class="fa fa-quote-left fa-5x"></i>--><img class="h1" src="images/q.png"/></button>
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff"><a href="backup.php">Backup</a><i class="fa fa-arrow-circle-right"></i><!--<i class="fa fa-cloud-upload fa-5x"></i>--><img class="h1" src="images/back.png"/></button>
                </div>
                <div class="col-lg-3 col-md-6">
                    <button class="bt" style="background-color:#fff"><a href="Settings-Change_password.php">Change Password</a><i class="fa fa-arrow-circle-right"></i> <!--<i class="fa fa-unlock-alt fa-5x"></i>--><img class="h1" src="images/lock.png"/></button>
                </div>
            </div>
        
                        
    <div class="row">


    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>
    
                        
    

</body>

</html>
