<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>  
        
        <style type="text/css">
            #renttb{
             margin-top:6%;   
            }
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

               
                <div id="content">
        <div id="toprent">
                            <table class="table table-striped" id="renttb">
                    <tr class="title">
                        <th><center>Rent id</center></th>
                        <th><center>StartDate</center></th>
                        <th><center>EndDate</center></th>
                        <th><center>Amount</center></th>
                        <th colspan="4"><center>Action</center></th>
                    </tr>
                        <?php 
                            $sql = "select * from renteditem";    //display orders table.
                            $result = mysqli_query($dbcon,$sql);        
                            while($row = mysqli_fetch_array($result)) {
    
                        ?>
                            <tr  class="active">
                            <td><center><?php echo $row['rent_id'] ?></center></td>
                            <td><center><?php echo $row['startDate'] ?></center></td>
                            <td><center><?php echo $row['endDate'] ?></center></td>
                            <td><center><?php echo $row['rentedOrderAmount'] ?></center></td>
                                
                                <td class="bt"><center><button type="button" class="btn btn-danger" onclick="location.href='Purchase Order_ManagePurchaseOrder.php?id=<?php echo $row['rent_id'] ?>'"><i class="fa fa-trash-o"></i>Reject</button></center></td>
                                
                                <td class="bt"><center><button type="button" class="btn"  onclick="location.href='Purchase Order_ManagePurchaseOrder.php?ID=<?php echo $row['rent_id'] ?>'" ><i class="fa fa-check" aria-hidden="true"></i>Accept</button></center></td>
                                
                                <td class="bt"><center><button type="button" class="btn" onclick="location.href='rent_viewrent.php?vi=<?php echo $row['rent_id'] ?>'" ><i class="fa fa-eye" aria-hidden="true"></i>view</center></button></td>
                            </tr>
                
                        <?php } ?>
            
                </table>
        </div>
        <div id="rent_button_sec">

            <div id="rent_button_panel">

        
            </div>
        </div>

    </div>

   
    <div id="footer">
        
    </div>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






