<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
</head>

<body>

<?php
    include ("../config/managermenu.php");
?>
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Stock</h1>
        </div>
        
    </div>
    <div class = "panel">

        <div class="panel_body_add_item">



            <div id = "upper_panel_add_item">

                <form method="post">
                    <table border="0" >
                        <tr></tr>
                        <tr>

                            <td id="table_font"  width="60%">
                                Category Name
                            </td>

                            <td>

                                <select name="categoryname">
                                    <option value="Sewing Machines">Sewing Machines</option>
                                    <option value="Sewing Machine Spare Parts">Sewing Machine Spare Parts</option>
                                    <option value="Tools">Tools</option>

                                </select><br><br>

                            </td>



                        </tr>
                        <tr>

                            <td id="table_font" width="55%">
                                Item Name
                            </td>

                            <td>
                                <input type="text" class="form-control" name="itemname"><br><br>
                            </td>
                        </tr>


                        <tr>

                            <td id="table_font"  width="55%">
                                Brand
                            </td>

                            <td>
                                <select name="brand">
                                    <option value="Juki">Juki</option>
                                    <option value="Singer">Singer</option>
                                    <option value="Brother">Brother</option>
                                    <option value="Janome">Janome</option>

                                </select><br><br>
                            </td>
                        </tr>

                        <tr>

                            <td id="table_font" width="55%">
                                Price
                            </td>

                            <td>
                                <br><br>
                            </td>
                        </tr>

                        <tr>

                            <td id="table_font" width="55%" align="right">
                                Cost                            
                            </td>

                            <td>
                                <input type="text" class="form-control"  name="cost" ><br><br>
                            </td>
                        </tr>

                        <tr>

                            <td id="table_font" width="55%" align="right" >
                                Selling Price                
                            </td>

                            <td>
                                <input type="text" class="form-control" name="sellingprice" ><br><br>
                            </td>
                        </tr>

                        <tr>

                            <td id="table_font" width="55%">
                                Quantity
                            </td>

                            <td>
                                <input type="text" class="form-control" name="quantity" ><br><br>
                            </td>
                        </tr>


                    </table>

            </div>

            <div id = "below_panel_add_item">
                <br><br>
                <input type="submit" id="button" class="btn btn-default btn-lg active" name="btnManageStockInsert" value="Add"  />
                <button type="button" id="button" onclick="refreshAll()" class="btn btn-default btn-lg active">Refresh</button>

            </div>
            </form>
            <script>
                function refreshAll() {
                    location.reload();
                }
            </script>
            <?php

            include ('Item.php');
            if(isset($_POST['btnManageStockInsert'])){

                $itemname = $_POST['itemname'];
                $brand = $_POST['brand'];
                $sellingprice = $_POST['sellingprice'];
                $cost = $_POST['cost'];
                $categoryname = $_POST['categoryname'];

                $quantity = $_POST['quantity'];
                $myItem = new Item();
                $myItem -> addItem($itemname, $brand,$sellingprice,$cost, $categoryname,$quantity );
            }

            if(isset($_POST['btnManageStockDelete'])){
                $itemname = $_POST['itemname'];
                $myItem = new Item();
                $myItem -> deleteItem($itemname);
            }

            ?>




        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
