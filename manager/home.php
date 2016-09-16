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
      
    
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
       
                    <div class="col-lg-12">
                        <div style="text-align: center;">
                           
                            <a class="quick-btn" href="#">
                                <i class="fa-truck icon-2x"></i>
                                <span> Supplier</span>
                            </a>

                            <a class="quick-btn" href="#">
                                <i class="fa-stack-overflow icon-2x"></i>
                                <span>Order Stock</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-user-secret icon-2x"></i>
                                <span>Aliens</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-user icon-2x"></i>
                                <span>Users</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-yoast icon-2x"></i>
                                <span>Quotations</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-cloud-upload icon-2x"></i>
                                <span>Backup</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-users icon-2x"></i>
                                <span>Username</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-unlock-alt icon-2x"></i>
                                <span>Password</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-sign-out icon-2x"></i>
                                <span>Logout</span>
                            </a>
                            

                            
                            
                        </div>

                    </div>

                </div>
        <div class="row" id="request">
                    <div class="col-lg-6">
                        <div class="box">
                            <header>
                                <h5>New User Requests</h5>
                                <div class="toolbar">
                                    <div class="btn-group">
                                        <a href="#sortableTable"  >
                                           
                                        </a>
                                    </div>
                                </div>
                            </header>
                            
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            
                                            <th>Full Name</th>
                                            <th>Designation
                                            <th>Company</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php

                                include('database_connection.php');
                                $sql = "SELECT * FROM customer where status ='false'";
                                $result = $dbcon->query($sql);
                                while($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['fullname'] ?></td>
                                            <td><?php echo $row['designation'] ?></td>
                                            <td><?php echo $row['companyName'] ?></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div id="report">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box">
                            <header>
                                <h5>Report Quick Access</h5>
                                <div class="toolbar">
                                    <div class="btn-group">
                                        <a href="#sortableTable"  >
                                           
                                        </a>
                                    </div>
                                </div>
                            </header>
       
                    <div class="col-lg-12">
                        <div style="text-align: center;">
                           
                            <a class="quick-btn" href="#">
                                <i class="fa-file icon-2x"></i>
                                <span> Stock</span>
                            </a>

                            <a class="quick-btn" href="#">
                                <i class="fa-file-code-o icon-2x"></i>
                                <span>Rent</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-file-archive-o icon-2x"></i>
                                <span>Purchase /O</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-file-powerpoint-o icon-2x"></i>
                                <span>Delivery</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-file-excel-o icon-2x"></i>
                                <span>Vehicle</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-file-o icon-2x"></i>
                                <span>Driver</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-files-o icon-2x"></i>
                                <span>Delivery</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-file-pdf-o icon-2x"></i>
                                <span>Supplier</span>
                            </a>
                            <a class="quick-btn" href="#">
                                <i class="fa-folder-open-o icon-2x"></i>
                                <span>Quotations</span>
                            </a>
                            

                            
                            
                        </div>

                    </div>
                </div>
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
