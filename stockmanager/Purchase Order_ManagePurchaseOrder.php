<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>  
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="js/sweetalert.css">
    </head>
    <body>
        
<?php
    include("../config/stockmgrmenu.php");
    require("database_connection.php");    //connecting to database.
 ?>

<ul class="breadcrumb">
    <h2>Page Heading here!</li></h2>
</ul>
<div id="content">
        <div class="panel">
            <div class="panel-heading">
                <table class="table table-striped">
                    <tr class="title"><th>id</th><th>customerid</th><th>totalprice</th><th>created</th><th>Action</th></tr>
                        <?php 
                            $sql = "select * from orders";    //display orders table.
                            $result = mysqli_query($dbcon,$sql);        
                            while($row = mysqli_fetch_array($result)) {
    
                        ?>
                            <tr class="data">
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['customer_id'] ?></td>
                            <td><?php echo $row['total_price'] ?></td>
                            <td><?php echo $row['created'] ?></td>
                            <td class="bt"><input type="button" class="btn btn-info" value=Reject onclick="location.href='Purchase Order_ManagePurchaseOrder.php?id=<?php echo $row['id'] ?>'"></td>
                            <td class="bt"><input type="button" class="btn btn-info" value=Accept onclick="location.href='Purchase Order_ManagePurchaseOrder.php?ID=<?php echo $row['id'] ?>'" ></td>
                            <td class="bt"><input type="button" class="btn btn-info" value=view onclick="location.href='PurchaseOrder_viewPurchaseOrder.php?vi=<?php echo $row['id'] ?>'" ></td>
                            </tr>
                
                        <?php } ?>
            
                </table>
                
                
                        <?php
       
      
            
                        
                        if(isset($_GET['ID'])){
                            $id=$_GET['ID'];
                            
                            $sqlinsert="INSERT INTO purchasereport(p_id,customer_id,totalprice,created,status) SELECT orders.id,orders.customer_id,orders.total_price,orders.created,'approved' FROM orders WHERE id=$id";
                            $resultinsert=mysqli_query($dbcon,$sqlinsert);
            
                           $sqldelete="DELETE FROM orders WHERE id=$id";
                            $result=mysqli_query($dbcon,$sqldelete);

           
                                if($resultinsert){
                                    echo'<script language ="javascript">';
                                        echo "swal({  title: 'Purchase order Accepted!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='Purchase Order_ManagePurchaseOrder.php'});";
                                    echo'</script>';
                                }else{
                                    echo'<script language ="javascript">';
                                        echo "swal({  title: 'Error!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='Purchase Order_ManagePurchaseOrder.php'});";
                                    echo'</script>';
                                }
            
            
            
                        }
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
            
                            $sqldelete="DELETE FROM orders WHERE id=$id";
                            $result=mysqli_query($dbcon,$sqldelete);
                            $sqldelete1="DELETE FROM order_items WHERE order_id=$id";
                            $result1=mysqli_query($dbcon,$sqldelete1);
           
                                if($result && $result1){
                                     echo'<script language ="javascript">';
                                        echo "swal({  title: 'Purchase order Deleted!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='Purchase Order_ManagePurchaseOrder.php'});";
                                    echo'</script>';
                                }else{
                                    echo'<script language ="javascript">';
                                        echo "swal({  title: 'Error!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='Purchase Order_ManagePurchaseOrder.php'});";
                                    echo'</script>';
                                }
            
            
            
                        }
    
                    ?>
         
            </div>
            
    <div class="panel-body">
        <div class="previous_report_history_table">
            <p>history po table</p>
        </div>
                
    <div class="previous_report_stock_report">
        <p> po structure</p>
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






