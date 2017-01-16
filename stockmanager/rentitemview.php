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
                    <h4>Stock for Rent</li></h4>
                </ul>
        <div id="rent">
            <table class="table datatable">
                <tr class='success'>
                    <th><b>Item ID<b></th>
                    <th><b>Item Name<b></th>
                    <th><b>Brand<b></th>
                    <th><b>Rent Price /M<b></th>
                    <th><b>Value<b></th>
                    <th><b>Available QTY<b></th>
                    <th colspan="2"><center><b>Action</b></center></th>
                </tr>
                <?php
                    $sql = "SELECT * FROM rent_item ";
                    $result = $dbcon->query($sql);
                    while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                   
                    <td><?php echo $row['item_id'] ?></td>
                    <td><?php echo $row['itemName'] ?></td>
                    <td><?php echo $row['brand'] ?></td>
                    <td><?php echo $row['rentPrice'] ?></td>
                    <td><?php echo $row['value'] ?></td>
                    <td><?php echo $row['qty'] ?></td>
            
                    <td><button type="button" id="view" class="btn btn-danger" onclick="location.href='rentitemview.php?d_id=<?php echo $row['item_id']?>'"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button>
                    <button type="button" id="delivery"  class="btn" onclick="location.href='updaterentitem.php?id=<?php echo $row['item_id']?>'"><i class="fa fa-pencil" aria-hidden="true"></i> Update</button>
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






