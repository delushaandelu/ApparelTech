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
                                    Stock_Manager
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
                            <li><a href="#"><span class="fa fa-users"></span> Previous Report</a></li>   
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text"> Purchase Order</span></a>
                        <ul>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-arrow-right"></span> Received P/O</a>
                                <ul>
                                    <li><a href="Purchase Order_ManagePurchaseOrder.php"><span class="fa fa-align-center"></span> Manage P/O</a></li>
                                    <li><a href="AddInvoice1.php"><span class="fa fa-table"></span> Manage Invoice</a></li>
                                </ul>
                                <ul>
                                    <li><a href="AddInvoice.php"><span class="fa fa-table"></span> View Invoice</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                        <ul>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-pencil"></span> Create Purchase Orders</a>
                                <ul>
                                    <li><a href="#"><span class="fa fa-align-center"></span> Purchase Order</a></li>
                                    <li><a href="#"><span class="fa fa-table"></span> View Purchase Order</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>       
                                       
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-square-o"></span> <span class="xn-text">Rent</span></a>
                        <ul>
                            <li><a href="#"><span class="fa fa-list-ul"></span> Manage Rent</a></li>                            
                            <li><a href="#"><span class="fa fa-pencil-square-o"></span> View Rent Report</a></li>
                        </ul>
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Delivery</span>
                        <ul>                            
                            <li><a href="#"><span class="fa fa-tasks"></span> Manage Delivery</a></li>
                            <li><a href="#"><span class="fa fa-file-text-o"></span> Delivery Reports</a></li>
                            <li><a href="viewdelivery.php"><span class="fa fa-list-alt"></span> Delivery Details</a></li>
                            <li><a href="driver_details.php"><span class="fa fa-arrow-right"></span> Driver Details</a></li>
                            <li><a href="vehicle_details.php"><span class="fa fa-arrow-right"></span> Vehicle Details</a></li>
                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-arrows-h"></span><span class="xn-text"> Setting</span></a>
                        <ul>                            
                            <li><a href="#"><span class="fa fa-align-justify"></span> Change Username</a></li>
                            <li><a href="changepassword.php"><span class="fa fa-sort-alpha-desc"></span> Change Password</a></li>
                        </ul>
                    </li>
                                       
                </ul>
            </div>
            <div class="page-content">
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                   
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>
                    <li class="pend">
                     <i class="fa fa-file-powerpoint-o fa-2x" aria-hidden="true"></i>


                    <div id="pend" style="color:white ;background-color:red" width="3px">
                      <?php
                        require("database_connection.php"); 

                            $sql= "select count(customer_id) as total from customer where status='false'";
                        //$result=mysqli_query($dbcon,$sql);
                        $result = mysqli_query($dbcon,$sql);
                        $row = mysqli_fetch_assoc($result);
                                echo  $row["total"];
                        ?>  
                    </div>
                    
                    </li>
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    
                </ul>
                