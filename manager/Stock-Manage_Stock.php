<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Theme</title>
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <link rel="stylesheet" href="../config/design/css/theme.css" type="text/css">
    <?php
        include ("../config/headermanager.html");
    ?>
</head>
<body>

</br></br>
<div id="main">
    <div id="header">
        <img src="images/Managing1.jpg">
    </div>

    <div id="menu">
        <h2>
            <font color="white" size="+1" >Manage Stock</font>
        </h2>

    </div>

    <div id="content">
        <div id="top">
            <div id="top-left" style="border: solid">
                <h3>
                    <font color="black" size="+1" >   </font>
                </h3>
                <form method="post">
                    <table border="0">
                        <tr></tr>
                        <tr>
                            <td id="table-font" width="60%">
                                   Category name
                            </td>
                            <td>
                                <select class="form-control">
                                    <option value="needle1qwertyuiopasdf">needle1qwertyuiopasdf</option>
                                    <option value="needle2">needle2</option>
                                    <option value="paddle">paddle</option>
                                    <option value="motor">motor</option>
                                </select><br>
                            </td>
                        </tr>

                        <tr>
                            <td id="table-font" width=" 60%">
                                   Item name
                            </td>
                            <td>
                                <input type="text" name="Item name" class="form-control">
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td id="table-font" width="60%">
                                   Item ID
                            </td>
                            <td>
                                <input type="text" name="Item ID" class="form-control">
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td id="table-font" width="60%">
                                   Brand
                            </td>
                            <td>
                                <input type="text" name="Brand" class="form-control">
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td id="table-font" width="60%">
                                   Price
                            </td>
                        </tr>

                        <tr>
                            <td id="table-font" width="60%">
                                               Cost
                            </td>
                            <td>
                                <input type="text" name="Cost" class="form-control">
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td id="table-font" width="60%">
                                               Selling price
                            </td>
                            <td>
                                <input type="text" name="Selling price" class="form-control">
                                <br>
                            </td>
                        </tr>

                        <tr>
                            <td id="table-font" width="60%">
                                   Quantity
                            </td>
                            <td>
                                <input type="text" name="Quantity" class="form-control">
                                <br>
                            </td>
                        </tr>
                    </table>
                 </form>
             </div>
            <div id = "top-right">
                <form>
                    <h4>
                        <font color="black" size="+1" >   </font>
                    </h4>
                    <tr>
                        <td>
                            <input type="text" name="Search item" placeholder="Search by item name" class="form-control">
                            <br><br>
                        </td>
                    </tr>
                    
                    <button type="button" id="button" class="btn btn-default btn-lg active">Search</button>
                    <br><br>
                    <button type="button" id="button" class="btn btn-default btn-lg active">Insert</button>
                    <br><br>
                    <button type="button" id="button" class="btn btn-default btn-lg active">Delete</button>
                    <br><br>
                    <button type="button" id="button" class="btn btn-default btn-lg active">Update</button>
                    <br><br>
                    <button type="button" id="button" class="btn btn-default btn-lg active">Clear</button>
                    <br><br>
                    <button type="button" id="button" class="btn btn-default btn-lg active">Refresh</button>
                    <br><br>

                </form>

            </div>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
    <div id="footer"></div>
</div>
</body>
</html>
