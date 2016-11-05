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
 ?>

<ul class="breadcrumb">
    <h2><li>Manage purchase orders</li></h2>
</ul>
<div id="content">
        <div class="panel">
            <div class="panel-heading">
                <table class="table table-striped">
                    <tr class="title">
                        <th><center>id</center></th>
                        <th><center>customerid</center></th>
                        <th><center>totalprice</center></th>
                        <th><center>created</center></th>
                        <th colspan="3"><center>Action</center></th>
                    </tr>
                        <?php 
                            $sql = "select * from orders";    //display orders table.
                            $result = mysqli_query($dbcon,$sql);        
                            while($row = mysqli_fetch_array($result)) {
    
                        ?>
                            <tr  class="active">
                            <td><center><?php echo $row['id'] ?></center></td>
                            <td><center><?php echo $row['customer_id'] ?></center></td>
                            <td><center><?php echo $row['total_price'] ?></center></td>
                            <td><center><?php echo $row['created'] ?></center></td>
                                
                                <td class="bt"><center><button type="button" class="btn btn-danger" onclick="location.href='Purchase Order_ManagePurchaseOrder.php?id=<?php echo $row['id'] ?>'"><i class="fa fa-trash-o"></i>Reject</button></center></td>
                                
                                <td class="bt"><center><button type="button" class="btn btn-info"  onclick="location.href='Purchase Order_ManagePurchaseOrder.php?ID=<?php echo $row['id'] ?>'" ><i class="fa fa-check" aria-hidden="true"></i>Accept</button></center></td>
                                
                                <td class="bt"><center><button type="button" class="btn btn-info" onclick="location.href='PurchaseOrder_viewPurchaseOrder.php?vi=<?php echo $row['id'] ?>'" ><i class="fa fa-eye" aria-hidden="true"></i>view</center></button></td>
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
           
        </div>
                
    <div class="previous_report_stock_report">
    
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






