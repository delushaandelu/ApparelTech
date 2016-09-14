<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ApperalTech</title>
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css" type="text/css">
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
	<script type="text/javascript" src="js/load.js"></script> 
  </head>

  <body class="nav-md">
    
  <?php
    session_start();
    include("../config/customermenu.php");  
      
  ?>

<!-- page content -->
<div class="right_col" role="main">
    <H1>Welcome to Priyantha Enterprices</H1>
    <div id = info>
                <div class="panel panel-primary">
                    <div class="panel-heading" align="center"><h2>Here you are!</h2></div>
                    <div class="panel-body">
                        <table>
                            <form method="get">
                                <tr>
                                    <td><h4>Customer name :
                                        <?php
                                        echo $_SESSION['fname'];
                                        ?>
                                    </h4></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><h4>Customer ID :
                                        <?php
                                        echo $_SESSION['csid'];
                                        ?>
                                        </h4></td>
                                </tr>
                                <tr>
                                    <td><h4>Company name :
                                        <?php
                                        echo $_SESSION['company'];
                                        ?>
                                        </h4></td>
                                    <td></td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </div>
        </div>
    
    <div id="dashbutton">
         <a href="#" class="myButton">Make a Purchase</a>
         <a href="#" class="myButton">Order Rent Item</a>
         <a href="#" class="myButton">Request Delivery</a>
    </div>
</div>

      
</body>

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
  <!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>
</html>
