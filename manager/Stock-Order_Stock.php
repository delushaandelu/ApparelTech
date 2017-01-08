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
            <h4 class="page-header">Order Stock</h4>
        </div>
        
    </div>
    <div class="row">

        <div id="content">
        <div id="top3">
            <h4 style="color: #000000">
                Please Select the item if you want to add to the cart.
            </h4>
            <br><br>
            
            <table class="table datatable">
                <tr>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Model Name</th>
                    <th>Unit Price</th>
                </tr>
                <tr class="">
                    <td>dfdef</td>
                    <td>dv</td>
                    <td>dvgdfb</td>
                    <td>fgrdh</td>
                </tr>
                <tr class="">
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                </tr>
                <tr class="">
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                </tr>
                <tr class="">
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                </tr>
                <tr class="">
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                </tr>
            </table>
        </div>

        <div id="bottom3">
            <div id="bottom-left3">
                <div data-role="main" class="ui-content">
                    <a href="#myPopupDialog" data-rel="popup" data-position-to="window" data-transition="fade" class="ui-btn ui-corner-all ui-shadow ui-btn-inline">Confirm Item</a>

                    <div data-role="popup" id="myPopupDialog">


                        <div data-role="main" class="ui-content">
                            <tr>
                                <td id="table-font" width="30" >
                                    Item ID
                                </td>
                                <td>
                                    <input type="text" name="Item ID" class="form-control" style="width: 30%">
                                </td>
                            </tr>
                            <tr>
                                <td id="table-font" width="30" >
                                    Item Name
                                </td>
                                <td>
                                    <input type="text" name="Item Name" class="form-control" style="width: 30%">
                                </td>
                            </tr>
                            <tr>
                                <td id="table-font" width="30" >
                                    Unit Price
                                </td>
                                <td>
                                    <input type="text" name="Unit Price" class="form-control" style="width: 30%">
                                </td>
                            </tr>
                            <tr>
                                <td id="table-font" width="30" >
                                    Qty
                                </td>
                                <td>
                                    <<input type="number" name="Qty" min="1" max="50" class="form-control" style="width: 30%">
                                </td>
                            </tr>
                            <br><br>

                            <button type="button" id="button1" class="btn btn-default btn-lg active">Confirm</button>
                            <button type="button" id="button1" class="btn btn-default btn-lg active">Cancel</button>
                        </div>

                    </div>
                </div>


            </div>
            
            <div id="bottom-right3">
                <tr>
                    <td id="table-font" width="30" >
                        Supplier e-mail
                    </td>
                    <td>
                        <input type="text" name="Supplier e-mail" class="form-control" style="width: 40%">
                    </td>
                </tr>
                <br><br>
                <button type="button" id="button1" class="btn btn-default btn-lg active">Send</button>

            </div>
        </div>
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
    <div id="footer"></div>
    </div>      
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
