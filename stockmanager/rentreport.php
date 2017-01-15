<!DOCTYPE html>
<html lang="en">
    <head>     
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            
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
    <script>
  $( function() {
    $( "#myInput" ).datepicker();
  } );
  </script>    
        
    </head>
    <body>
        
<?php
    include("../config/stockmgrmenu.php");
 ?>

<div id="content">
        <div class="panel">
            <div class="panel-heading">
                  <div class="2">
                <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="&#x26B2   Search by Date..." style="width: 320px; height: 50px">

                </div>
                <br>
                <br>
                <table class="table datatable" id="potb">
                    <tr class='success'>
                        <th><center>id</center></th>
                        <th><center>customerid</center></th>
                        <th><center>customer name</center></th>
                        <th><center>totalprice</center></th>
                        <th><center>created</center></th>
                        <th colspan="3"><center>Action</center></th>
                    </tr>
                        <?php 
                            $sql = "select * from rentorders,customer where rentorders.customer_id=customer.customer_id";    //display orders table.
                            $result = mysqli_query($dbcon,$sql);        
                            while($row = mysqli_fetch_array($result)) {
                                $id = $row['id'];
    
                        ?>
                            <tr  class="active">
                            <td><center><?php echo $row['id'] ?></center></td>
                            <td><center><?php echo $row['customer_id'] ?></center></td>
                            <td><center><?php echo $row['fullname'] ?></center></td>
                            <td><center><?php echo $row['total_price'] ?></center></td>
                            <td><center><?php echo $row['created'] ?></center></td>
                                
                                <td class="bt"><center><button type="button" class="btn btn-danger" onclick="location.href='rent.php?id=<?php echo $row['id'] ?> & customerid=<?php echo $row['customer_id'] ?>'"><i class="fa fa-trash-o"></i>Reject</button></center></td>
                                
                                <td class="bt"><center><button type="button" class="btn" onclick="location.href='rent.php?ID=<?php echo $row['id'] ?> & customer_id=<?php echo $row['customer_id'] ?>'" ><i class="fa fa-check" aria-hidden="true"></i>Accept</button></center></td>
                                
                                <td class="bt"><center><button type="button" class="btn" onclick="location.href='PurchaseOrder_viewPurchaseOrder.php?vi=<?php echo $row['id'] ?>'" ><i class="fa fa-eye" aria-hidden="true"></i>view</center></button></td>
                            </tr>
                
                        <?php } ?>
            
                </table>
                
                       
                        <?php
       
      
                         if(!empty($_GET['ID']) && !empty($_GET['customer_id']) ){
                            $id=$_GET['ID'];
                            $cusid=$_GET['customer_id'];
                             
                          
                             
                            $sqlupdate="UPDATE rentorders SET status='1' WHERE id=$id";
                            $resultupdate=mysqli_query($dbcon,$sqlupdate);
            
                          /*  $sqldelete="DELETE FROM orders WHERE id=$id";
                            $result=mysqli_query($dbcon,$sqldelete);*/

           
                            if($resultupdate){
                                echo'<script language ="javascript">';
                                echo "swal({  title: 'Rent order Accepted!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='rent.php'});";
                                echo'</script>'; 
                            }else{
                                echo'<script language ="javascript">';
                                echo "swal({  title: 'Error!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='rent.php'});";
                                echo'</script>';
                                }
            
            
             
                        }
                        if(!empty($_GET['id']) && !empty($_GET['customerid'])){
                            $id=$_GET['id'];
                            $cusid=$_GET['customerid'];
                            
                          
                            
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
            <script>
            function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("potb");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[4];
                    if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
            
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






