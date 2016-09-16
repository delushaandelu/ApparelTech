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
                    <h2>All Stock</li></h2>
                </ul>

    <div id="exp">
          <div class="page-content-wrap">
        <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Current Stock</h3>
                                                         
                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Item Id</th>
                                                <th>Item Name</th>
                                                <th>Cost</th>
                                                <th>Selling Price</th>
                                                <th>Brand</th>
                                                <th>On Hand</th>
                                            </tr>
                                        </thead>
                <?php
                   include ('database_connection.php');
                    $sql = "SELECT * FROM item ";
                    $result = $dbcon->query($sql);
                    while($row = $result->fetch_assoc()) {
                ?>

                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['item_id'] ?></td>
                                                <td><?php echo $row['itemName'] ?></td>
                                                <td><?php echo $row['buyingPrice'] ?></td>
                                                <td><?php echo $row['sellingPrice'] ?></td>
                                                <td><?php echo $row['brand'] ?></td>
                                                <td><?php echo $row['stockQty'] ?></td>
                                            </tr>
                <?php } ?>
                                        </tbody>
                                    </table>                                    
                                    
                                </div>
                            </div>
          </div>    
    </div>
    
    
    

        <script type="text/javascript" src="jss/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="jss/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="jss/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="jss/plugins.js"></script>        
        <script type="text/javascript" src="jss/actions.js"></script>
        <script type="text/javascript" src="jss/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="jss/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="jss/plugins/tableexport/tableExport.js"></script>
              
	<script type="text/javascript" src="jss/plugins/tableexport/jquery.base64.js"></script>
	<script type="text/javascript" src="jss/plugins/tableexport/html2canvas.js"></script>
	<script type="text/javascript" src="jss/plugins/tableexport/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="jss/plugins/tableexport/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="jss/plugins/tableexport/jspdf/libs/base64.js"></script>       
    
    </body>
</html>






