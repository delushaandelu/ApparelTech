<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>                        
    </head>  

    <body>    
        <?php
            //get connection
            include("../config/stockmgrmenu.php");
        ?>

        <ul class="breadcrumb">
            <h2>View Defected Items!</li></h2>
        </ul>
        <!-- page content -->
        <div id="content">
            <table  class="table datatable">
            
                <tr class="success">
                    <th><center>Customer Id</center></th>
                    <th><center>Item Id</center></th>
                    <th><center>Purchase Order Id</center></th>
                    <th><center>returnItemQty</center></th>
                    <th><center>returnDate</center></th>
                    <th><center>description</center></th>
                </tr>
                
            <?php
                //quary
                $sql = "select * from defectitem ";
                $result = mysqli_query($dbcon,$sql);        
                while($row = mysqli_fetch_array($result)) {
    
            ?>
                <tr class="active">
                    <td><center><?php echo $row['customer_id'] ?></center></td>
                    <td><center><?php echo $row['item_id'] ?></center></td>
                    <td><center><?php echo $row['po_id'] ?></center></td>
                    <td><center><?php echo $row['returnItemQty'] ?></center></td>
                    <td><center><?php echo $row['returnDate'] ?></center></td>
                    <td><center><?php echo $row['description'] ?></center></td> 
                </tr>
                
            <?php } ?>
            </table>
        </div>
        <!-- js files -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>
