<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="js/sweetalert.css">
        <style type="text/css">
        
            .btn{
                color: white;
                background-color: #1caf9a;
            }
            #potb{
                margin-top: 4px;
            }
        
        </style>
        
        
    </head>
    <body>
        
<?php
    include("../config/stockmgrmenu.php");
 ?>

<div id="content">
        <div class="panel">
            <div class="panel-heading">
                <table class="table table-striped" id="potb">
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
                                
                                <td class="bt"><center><button type="button" class="btn btn-danger" onclick="location.href='Purchase Order_ManagePurchaseOrder.php?id=<?php echo $row['id'] ?> & customerid=<?php echo $row['customer_id'] ?>'"><i class="fa fa-trash-o"></i>Reject</button></center></td>
                                
                                <td class="bt"><center><button type="button" class="btn"  onclick="location.href='Purchase Order_ManagePurchaseOrder.php?ID=<?php echo $row['id'] ?> & customer_id=<?php echo $row['customer_id'] ?>'" ><i class="fa fa-check" aria-hidden="true"></i>Accept</button></center></td>
                                
                                <td class="bt"><center><button type="button" class="btn" onclick="location.href='PurchaseOrder_viewPurchaseOrder.php?vi=<?php echo $row['id'] ?>'" ><i class="fa fa-eye" aria-hidden="true"></i>view</center></button></td>
                            </tr>
                
                        <?php } ?>
            
                </table>
                
                
                        <?php
       
      
                         if(!empty($_GET['ID']) && !empty($_GET['customer_id']) ){
                            $id=$_GET['ID'];
                            $cusid=$_GET['customer_id'];
                             
                            $username = 'chamrithjay@gmail.com';
    	                    $hash = '1993Minuwangoda';
    	
    	                   // Message details
                            $sqlsms="SELECT mobile FROM customer WHERE customer_id=$cusid";
                            $sqlsms=mysqli_query($dbcon,$sqlsms);
                            $row=mysqli_fetch_assoc($sqlsms);
                            //echo $row['mobile'];
                            $numbers = $row['mobile'];
        
    	                   $sender = urlencode('Appreltech');
    	                   $message = rawurlencode('Your purchase order no '.$id.'is accepted.');
     
    	                   //$numbers = implode(',', $numbers);
     
    	                   // Prepare data for POST request
    	                   $data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
    	// Send the POST request with cURL
    	                   $ch = curl_init('http://api.txtlocal.com/send/');
    	                   curl_setopt($ch, CURLOPT_POST, true);
    	                   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	                   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	                   $response = curl_exec($ch);
    	                   curl_close($ch);
    	
    	                   // Process your response here
    	                   echo $response;
                             
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
                        if(!empty($_GET['id']) && !empty($_GET['customerid'])){
                            $id=$_GET['id'];
                            $cusid=$_GET['customerid'];
                            
                            $username = 'chamrithjay@gmail.com';
    	                    $hash = '1993Minuwangoda';
    	
    	                   // Message details
                            $sqlsms="SELECT mobile FROM customer WHERE customer_id=$cusid";
                            $sqlsms=mysqli_query($dbcon,$sqlsms);
                            $row=mysqli_fetch_assoc($sqlsms);
                            //echo $row['mobile'];
                            $numbers = $row['mobile'];
        
    	                   $sender = urlencode('Appreltech');
    	                   $message = rawurlencode('Your purchase order no '.$id.'is rejected.');
     
    	                   //$numbers = implode(',', $numbers);
     
    	                   // Prepare data for POST request
    	                   $data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
    	// Send the POST request with cURL
    	                   $ch = curl_init('http://api.txtlocal.com/send/');
    	                   curl_setopt($ch, CURLOPT_POST, true);
    	                   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	                   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	                   $response = curl_exec($ch);
    	                   curl_close($ch);
    	
    	                   // Process your response here
    	                   echo $response;
                            
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






