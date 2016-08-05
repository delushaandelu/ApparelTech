<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Theme</title>
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <link rel="stylesheet" href="../config/design/css/theme.css" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <?php
        include ("../config/headermanager.html");
    ?>
</head>
<body>

</br></br>
<div id="main">
    <div id="header">
        <img src="images/Managing.jpg">
    </div>

    <div id="menu">
        <h2>
            <font color="white" size="+1">Manage Stock</font>
        </h2>
    </div>

    <div id="content">
        <div id="top3">
            <h4 style="color: #000000">
                Please Select the item if you want to add to the cart.
            </h4>
            <br><br>
            
            <table class="table">
                <tr>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Model Name</th>
                    <th>Unit Price</th>
                </tr>
                <tr class="success">
                    <td>dfdef</td>
                    <td>dv</td>
                    <td>dvgdfb</td>
                    <td>fgrdh</td>
                </tr>
                <tr class="danger">
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                </tr>
                <tr class="info">
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                </tr>
                <tr class="success">
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                    <td>dfdef</td>
                </tr>
                <tr class="danger">
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
</body>
</html>
