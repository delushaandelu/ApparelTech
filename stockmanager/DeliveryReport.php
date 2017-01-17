<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>                        
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>

                <ul class="breadcrumb">
                    <h2>Delivery Reports!</li></h2>
                </ul>
        <!-- page content -->
        <div id="delivery">
        <table  class="table datatable">
            
            <tr class="success">
                <th><center>Request Id</center></th>
                <th><center>Purchase order Id</center></th>
                <th><center>Company</center></th>
                <th><center>Address</center></th>
                <th><center>Date</center></th>
                <th><center>Telephone</center></th>
                <th><center>Bank</center></th>
                <th><center>Branch</center></th>
                <th><center>Voucher</center></th>
                <th><center>Amount</center></th>
                <th><center>Status</center></th>
            </tr>
            <?php 
                $sql = "SELECT * FROM deliveryrequest WHERE status ='Approved' || status ='Rejected' ";
                $result = mysqli_query($dbcon,$sql);        
                while($row = mysqli_fetch_array($result)) {
    
            ?>
                    <tr class="active">
                        <td><center><?php echo $row['rid'] ?></center></td>
                        <td><center><?php echo $row['poid'] ?></center></td>
                        <td><center><?php echo $row['company'] ?></center></td>
                        <td><center><?php echo $row['address'] ?></center></td>
                        <td><center><?php echo $row['date'] ?></center></td>
                        <td><center><?php echo $row['telephone'] ?></center></td>
                        <td><center><?php echo $row['bank'] ?></center></td>
                        <td><center><?php echo $row['branch'] ?></center></td>
                        <td><center><?php echo $row['voucher'] ?></center></td>
                        <td><center><?php echo $row['amount'] ?></center></td>
                        <td><center><?php echo $row['status'] ?></center></td> 
                    </tr>
                
            <?php } ?>
        </table>

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






