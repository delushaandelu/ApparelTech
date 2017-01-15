<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>
        <title>Stock Manager</title>                    
        <link rel="stylesheet" type="text/css"  href="manage_stock_design.css"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
       <script src="js/sweetalert-dev.js"></script>                       
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>

    <ul class="breadcrumb">
        <h4>Add Rent Items</li></h4>
        <form method="post" name="form" onSubmit="return check();">
            <table class="ui definition table" border="0" >
                <tr class="spaceUnder">
                    <td id="table_font" width="10%">Item Name</td> 
                    <td><input type="text"  name="itemname" class="form-control"></td>
                </tr>
                <tr class="spaceUnder">
                    <td id="table_font"  width="10%"> Brand</td>
                    <td><input type="text"  name="brandname" class="form-control"></td>
                </tr>
                <tr>
                    <td id="table_font" width="10%"> Costing</td> 
                </tr>
                    <tr class="spaceUnder">
                        <td id="table_font" width="10%" align="right"></td> 
                        <td><input type="number"  placeholder="Value of the item"  name="cost" class="form-control" id="exampleInputAmount"  ></td>
                </tr>
                <tr class="spaceUnder">
                    <td id="table_font" width="10%" align="right" ></td> 
                    <td><input type="number"  placeholder="Renting Price / Month" name="sellingprice" class="form-control"></td>
                </tr>
                <tr class="spaceUnder">
                    <td id="table_font" width="10%"> Quantity</td> 
                    <td> <input type="number"  name="quantity" class="form-control"s></td>
                <tr>
                <td colspan="2">
                    <input type="submit" class="myButton" id="btnManageStockInsert"  name="btnManageStockInsert" value="Add"  />  
                </td>
                </tr>

            </table> 
        </form>

        <?php

        //This code is to add new items into the stock
        if(isset($_POST['btnManageStockInsert'])){

            $itemname = $_POST['itemname'];
            $brand = $_POST['brandname'];
            $sellingprice = $_POST['sellingprice'];
            $cost = $_POST['cost'];
            $quantity = $_POST['quantity'];

            $query = "INSERT INTO rent_item(itemName,brand,rentPrice,value,qty) VALUES ('$itemname','$brand','$sellingprice','$cost','$quantity')";
            //mysqli_query($dbcon,$query) or die(mysqli_error($dbcon));
            if(!mysqli_query($dbcon, $query)){
                die('Error inserting new record');
            }else{
                echo'<script language ="javascript">';
                    echo "swal({  title: 'Item successfully added to the stock!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='addrentitem.php'});";
                echo'</script>';
                }
            }
            ?>
    </ul>

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






