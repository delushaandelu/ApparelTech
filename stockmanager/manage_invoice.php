<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>   
         <style type="text/css">
        
            .btn{
                color: white;
                background-color: #1caf9a;
            }
         
            
        
        </style>
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>

                <ul class="breadcrumb">
                    <h2>Page Heading here!</li></h2>
                </ul>
    
    
    <div id="invoice_content">
    
    <table class="table table-striped" id="intb">
                    <tr class="title">
                        <th><center>id</center></th>
                        <th><center>customerid</center></th>
                        <th><center>Company Name</center></th>
                        <th><center>Total price</center></th>
                        <th colspan="3"><center>Action</center></th>
                    </tr>
                        <?php 
                            $sql = "select * from orders,customer where orders.customer_id=customer.customer_id ";    //display orders table.
                            $result = mysqli_query($dbcon,$sql);        
                            while($row = mysqli_fetch_array($result)) {
    
                        ?>
                            <tr  class="active">
                            <td><center><?php echo $row['id'] ?></center></td>
                            <td><center><?php echo $row['customer_id'] ?></center></td>
                            <td><center><?php echo $row['companyName'] ?></center></td>
                            <td><center><?php echo $row['total_price'] ?></center></td>
                                
                                
                                 <td class="bt"><center><button type="button" class="btn"  onclick="location.href='edit_invoice.php?ID=<?php echo $row['id'] ?> & customer_id=<?php echo $row['customer_id'] ?>'" ><i class="fa fa-check" aria-hidden="true"></i>Edit Invoice</button></center></td>
                                
                                
                                
                            </tr>
                
                        <?php } ?>
            
                </table>
    
    
    
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>





