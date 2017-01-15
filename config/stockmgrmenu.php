<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .notification_header{
        color: white;
       /* background-color:black;*/
   
    }   
    .notification_desc{
       /* background-color:black;*/
        color: white;
       
    }
    .notification_bottom a{
        text-decoration: none;
    }
  
</style>
 
</head>
</html>
<body>
<?php
    require("database_connection.php");
?>

<div class="page-container"> 
            <div class="page-sidebar">
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="#">Stock <span style="color:#FF4500">Manager</span></a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/avatar.jpg"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/avatar.jpg"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">
                                  Priyantha Enterprices
                                </div>
                                <div class="profile-data-title"><span style="color:#FF4500">ApperalTech</span></div>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Controls</li>                    
                    <li>
                        <a href="HomePage.php"><span class="fa fa-desktop"></span> <span class="xn-text"> Home</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-columns"></span> <span class="xn-text"> Stock</span></a>
                        <ul>
                            <li><a href="Stock_ManageStock.php"><span class="fa fa-edit"></span> Manage Stock</a></li>
                             <li><a href="allstock.php"><span class="fa fa-user"></span> All Stock</a></li>
                            <li><a href="Stock_NewReport.php"><span class="fa fa-user"></span> New Report</a></li>
                            <li><a href="defected.php"><span class="fa fa-user"></span> Defected Stock</a></li>
                            <li><a href="viewdefected.php"><span class="fa fa-user"></span>View Defected Stock</a></li>
                           
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text"> Purchase Order</span></a>
                        <ul>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-arrow-right"></span> Received P/O</a>
                                <ul>
                                    <li><a href="Purchase Order_ManagePurchaseOrder.php"><span class="fa fa-align-center"></span> Manage P/O</a></li>
                                    <li><a href="manage_invoice.php"><span class="fa fa-table"></span> Manage Invoice</a></li>
                                </ul>
                                <ul>
                                </ul>
                            </li>
                            
                        </ul>
                        
                    </li>       
                                       
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-square-o"></span> <span class="xn-text">Rent</span></a>
                        <ul>
                            <li><a href="rent.php"><span class="fa fa-list-ul"></span> Manage Rent</a></li>                            
                            <li><a href="rentreport.php"><span class="fa fa-rss"></span> View Rent Report</a></li>
                            <li><a href="addrentitem.php"><span class="fa fa-tasks"></span> Add Rent Item</a></li>
                            <li><a href="rentitemview.php"><span class="fa fa-file-excel-o"></span> View Rent Item</a></li>
                        </ul>
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Delivery</span>
                        <ul>                            
                            <li><a href="managedelivery.php"><span class="fa fa-tasks"></span> Manage Delivery</a></li>
                            <li><a href="DeliveryReport.php"><span class="fa fa-file-text-o"></span> Delivery Reports</a></li>
                            <li><a href="driver_details.php"><span class="fa fa-arrow-right"></span> Driver Details</a></li>
                            <li><a href="vehicle_details.php"><span class="fa fa-arrow-right"></span> Vehicle Details</a></li>
                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-arrows-h"></span><span class="xn-text"> Settings</span></a>
                        <ul>                            
                            <li><a href="changepassword.php"><span class="fa fa-sort-alpha-desc"></span> Change Password</a></li>
                        </ul>
                    </li>
                                       
                </ul>
            </div>
            <div class="page-content">
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                   <div class="header-right header-right-grid">
					<div class="profile_details_left"><!--notifications of menu start -->
						<ul class="nofitications-dropdown">
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge"><?php

                        $sql= "select count(id) as total from orders where status='1'";
                        //$result=mysqli_query($dbcon,$sql);
                        $result = mysqli_query($dbcon,$sql);
                        $row = mysqli_fetch_assoc($result);
                                echo  $row["total"];
                        ?></span></a>
								<ul class="dropdown-menu anti-dropdown-menu">
									<li>
										<div class="notification_header">
											<h6>New purchase orders</h6>
										</div>
									</li>
									<li><a href="#">
									   
									   <div class="notification_desc">
										<p>Total amounts</p>
										<p><span><?php
                        //require("database_connection.php"); 

                        $sql= "SELECT * FROM orders,customer WHERE orders.customer_id = customer.customer_id ORDER BY created DESC ";
                        //$result=mysqli_query($dbcon,$sql);
                        $result = mysqli_query($dbcon,$sql);
                        
                        while($row = mysqli_fetch_assoc($result)){
                            echo  $row["fullname"];
                            echo " :- ";
                            echo  $row["total_price"];
                            echo "</br>";
                        }
                                
                        ?></span></p>
										</div>
									  
									</a></li>
									
									<li>
										<div class="notification_bottom">
                                            <h6><a href="Purchase%20Order_ManagePurchaseOrder.php">See new p/o</a></h6>
										</div> 
									</li>
								</ul>
							</li>
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue"><?php
                        $sql= "select count(rid) as total from deliveryrequest";
                        //$result=mysqli_query($dbcon,$sql);
                        $result = mysqli_query($dbcon,$sql);
                        $row = mysqli_fetch_assoc($result);
                                echo  $row["total"];
                        ?>  </span></a>
								<ul class="dropdown-menu anti-dropdown-menu">
									<li>
										<div class="notification_header">
											<h6> New delivery requests</h6>
										</div>
									</li>
									<li><a href="#">
										
									   <div class="notification_desc">
										<p>Requests</p>
										<p><span><?php
                        //require("database_connection.php"); 

                        $sql1= "SELECT * FROM deliveryrequest ";
                        //$result=mysqli_query($dbcon,$sql);
                        $result1 = mysqli_query($dbcon,$sql1);
                        
                        while($row = mysqli_fetch_assoc($result1)){
                            echo  $row["company"];
                            echo " :- ";
                            echo  $row["amount"];
                            echo "</br>";
                        }
                                
                        ?> </span></p>
										</div>
									  <div class="clearfix"></div>	
									 </a></li>
									 
									 <li>
										<div class="notification_bottom">
											<h6><a href="managedelivery.php">See all requests</a></h6>
										</div> 
									</li>
								</ul>
							</li>
                            <li class="xn-icon-button pull-right">
                        <a href="../stockmanager/signout.php" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                            </li> 
							
						</ul>
                        
						<!--<div class="clearfix"> </div>-->
                       </div>
                    </div>
                </ul>
    					
                  
               
                
   
    
           </body>     