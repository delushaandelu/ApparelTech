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
                    <h2>Stock for Rent</li></h2>
                </ul>
        <div id="rent">
            <table class="table table-striped">
                <th>
                    <td><b>Item ID<b></td>
                    <td><b>Item Name<b></td>
                    <td><b>Brand<b></td>
                    <td><b>Rent Price /M<b></td>
                    <td><b>Value<b></td>
                    <td><b>Available QTY<b></td>
                    <td><b>Remove/Update</b></td>
                </th>
                <?php
                    $sql = "SELECT * FROM rent_item ";
                    $result = $dbcon->query($sql);
                    while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td></td>
                    <td><?php echo $row['item_id'] ?></td>
                    <td><?php echo $row['itemName'] ?></td>
                    <td><?php echo $row['brand'] ?></td>
                    <td><?php echo $row['rentPrice'] ?></td>
                    <td><?php echo $row['value'] ?></td>
                    <td><?php echo $row['qty'] ?></td>
                    <td>
                    <button type="button" id="view" class="btn btn-danger" onclick="location.href='rentitemview.php?d_id=<?php echo $row['item_id']?>'"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button>
                    <button type="button" id="delivery"  class="btn btn-success" onclick="location.href='updaterentitem.php?id=<?php echo $row['item_id']?>'"><i class="fa fa-pencil" aria-hidden="true"></i> Update</button>
                    </td>
                    <?php
                    }
                ?>
                </tr>
                
            </table>
            <?php
                if(isset($_GET['d_id'])){
                    $id = $_GET['d_id'];
                    $sql= "delete from rent_item where item_id = '$id'";
                    mysqli_query($dbcon,$sql);

                    echo'<script language ="javascript">';
                    echo"swal({  title: 'Rent item has deleted!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='rentitemview.php'});";
                    echo'</script>';

                }
            ?>
            
        </div>

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






