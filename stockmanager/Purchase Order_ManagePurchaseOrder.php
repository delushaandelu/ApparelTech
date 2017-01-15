<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="js/sweetalert.css">
        <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script> 
<!-- 
        <script type="text/javascript">
                $(function () {

                    $("#dialog").dialog({

                        modal: true,
                        autoOpen: false,
                        title: "Send Email",
                        display: "block",
                        width: 400,
                        height: 400,
                    });
                    $("#btnShow").click(function () {
                        $('#dialog').dialog('open');
                    });
                });
            </script> -->
        <style type="text/css">

        
            .btn{
                color: white;
                background-color: #1caf9a;
            }
            #potb{
                margin-top: 4px;
            }
        
        </style>
    <div id="dialog" style="display: none" align = "center">
    <form method="post" action="?">
        <table width="350px" height="300px">
        <tr>
            <td>To:</td>
            <td><input type="text" name="name"/></td>
        </tr>
         <tr>
            <td>Subject:</td>
            <td><input type="text" name="subject"/></td>
        </tr>
        <tr>
            <td>Message:</td>
            <td><textarea name="message" placeholder="write message here !" ></textarea></td>
        </tr>
            
        <tr>
            
            <td><input type="submit" value="Send" name="mailBtn"/></td>
        </tr>
            
        
        </table>
    </form>
</div>
        

        
    </head>
    <body>
        
<?php
    include("../config/stockmgrmenu.php");
 ?>

<div id="content">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-body">
                <table class="table datatable" id="potb">
                    <tr class='success'>
                        <th><center>Id</center></th>
                        <th><center>Customer Id</center></th>
                         <th><center>Customer Name</center></th>
                        <th><center>Total Price</center></th>
                        <th><center>Created</center></th>
                        <th colspan="2"><center>Action</center></th>
                        <th><button id='btnShow'><center>Send Mail</center></button></th>
                        
                    </tr>
                        <?php 
                            $sql = "select * from orders,customer where orders.customer_id=customer.customer_id";    //display orders table.
                            $result = mysqli_query($dbcon,$sql);        
                            while($row = mysqli_fetch_array($result)) {
                                $id = $row['id'];
    
                        ?>

                        <?php
                        if(isset($_POST['mailBtn'])){
                            $to = $_POST['name'];
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];
                             $headers = 'From: Appareltech@priyantha.com' . "\r\n" .
                            'Reply-To: Appareltech@priyantha.com' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

                            mail($to, $subject, $message, $headers);
                        }

                        ?>

                            <tr  class="active">
                            <td><center><?php echo $row['id'] ?></center></td>
                            <td><center><?php echo $row['customer_id'] ?></center></td>
                              <td><center><?php echo $row['fullname'] ?></center></td>
                            <td><center><?php echo $row['total_price'] ?></center></td>
                            <td><center><?php echo $row['created'] ?></center></td>
                          

                                
                                <td class="bt"><center><button type="button" id ="btnShow" class="btn btn-danger" onclick="location.href='Purchase Order_ManagePurchaseOrder.php?id=<?php echo $row['id'] ?> & customerid=<?php echo $row['customer_id'] ?>'"><i class="fa fa-trash-o"></i>Reject</button></center></td>
                                
                                <td class="bt"><center><button type="button" class="btn" onclick="location.href='Purchase Order_ManagePurchaseOrder.php?ID=<?php echo $row['id'] ?> & customer_id=<?php echo $row['customer_id'] ?>'" ><i class="fa fa-check" aria-hidden="true"></i>Accept</button></center></td>
                                
                                <td class="bt"><center><button type="button" class="btn" onclick="location.href='PurchaseOrder_viewPurchaseOrder.php?vi=<?php echo $row['id'] ?>'" ><i class="fa fa-eye" aria-hidden="true"></i>view</button></center></td>
                            </tr>
                
                        <?php } ?>


            
                </table>
                
                        <?php
                            
                            if(!empty($_GET['ID']) && !empty($_GET['customer_id'])){
                                $query = "SELECT * FROM order_items WHERE order_id = '$id' ";
                                echo($query);
                                $res = mysqli_query($dbcon,$query);

                                while ($row = mysqli_fetch_assoc($res)) {
                                    $product_id = $row['product_id'];
                                    $sql = "UPDATE item SET stockQty = stockQty - (SELECT quantity FROM order_items WHERE order_id = '$id' AND product_id = '$product_id') WHERE item_id = '$product_id'";
                                    echo($sql);
                                    $result = mysqli_query($dbcon,$sql) or die(mysqli_error($dbcon));

                                }
                            }


                        ?>

                    
                          

                 
                        <?php
       
      
                         if(!empty($_GET['ID']) && !empty($_GET['customer_id']) ){
                            $id=$_GET['ID'];
                            $cusid=$_GET['customer_id'];
                             
                           

                             
                           /* $username = 'appareltech123@gmail.com';
    	                    $hash = 'Priyantha1';
    	
    	                   // Message details
                            $sqlsms="SELECT mobile FROM customer WHERE customer_id=$cusid";
                            $sqlsms=mysqli_query($dbcon,$sqlsms);
                            $row=mysqli_fetch_assoc($sqlsms);
                            //echo $row['mobile'];
                            $numbers = $row['mobile'];
        
    	                   $sender = urlencode('Appareltech');
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
    	                   echo $response;*/
                             
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

                            //Email notificaion code

                            
                            
                          /*  $username = 'chamrithjay@gmail.com';
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
    	                   echo $response;*/
                            
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
            
    </div>
                
    </div>
            
</div>
        
        
    
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>

        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script> 
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


         <script type="text/javascript">
                        $(function () {
                            $("#dialog").dialog({
                                modal: true,
                                autoOpen: false,
                                title: "Send Email",
                                display: "block",
                                width: 400,
                                height: 400,
                            });
                            $("#btnShow").click(function () {
                                $('#dialog').dialog('open');
                            });
                        });
        </script> 
    </body>
</html>






