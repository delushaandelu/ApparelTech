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
    <div class="row">

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
                    <button type="button" id="button" onclick="refreshAll()" class="btn btn-default btn-lg active">Refresh</button>
                    <br><br>

                </form>
                <script>
                    function refreshAll() {
                        location.reload();
                    }
                </script>

            </div>
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
