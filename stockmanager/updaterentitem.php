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
                    <h3>Update Rent Information!</h3>
                </ul>
        <div id="update">
            <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM rent_item where item_id=$id ";
                $result = $dbcon->query($sql);
                while($row = $result->fetch_assoc()) {
            ?>            
<form method="POST">
    <table class="table table-hover">
        <tr>
            <td><h4>Item Name </h4></td>
            <td><input type="text" name="name" class="form-control" style="font-size:12pt;width:800px;" autocomplete="off" value=<?php echo $row['itemName'] ?> ></td>
        </tr>
        <tr>
            <td><h4>Brand   </h4></td>
            <td><input type="text" name="brand" class="form-control" max="40" style="font-size:12pt;width:800px;" autocomplete="off" value=<?php echo $row['brand'] ?>></td>
        </tr>
        <tr>
            <td><h4>RentPrice /M  </h4></td>
            <td><input type="number" name="rent" class="form-control" style="font-size:12pt;width:200px;" autocomplete="off" value=<?php echo $row['rentPrice'] ?>></td>
        </tr>
        <tr>
            <td><h4>Value  </h4></td>
            <td><input type="number" name="value" class="form-control" style="font-size:12pt;width:200px;" autocomplete="off" value=<?php echo $row['value'] ?>></td>
        </tr>
        <tr>
            <td><h4>Quantity  </h4></td>
            <td><input type="text" name="qty" class="form-control" style="font-size:12pt;width:200px;" autocomplete="off" value=<?php echo $row['qty'] ?>></td>
        </tr>
        <tr>
            <td colspan="2"><center><input type="submit" class="btn btn-success" name="update" value="Update Profile"></center></td>
        </tr>
    </table>
    
</form>
<?php 
} 
?>

<?php
    if (isset($_POST["update"]) {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $rent = $_POST['rent'];
        $value = $_POST['value'];
        $qty = $_POST['qty'];

        $sql = "UPDATE rent_item SET itemName='$name', brand='$brand', rentPrice='$rent', value='$value', qty='$qty' item_it WHERE id=$id";
    }else{  
        echo "Error";
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






