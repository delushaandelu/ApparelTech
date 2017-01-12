<!DOCTYPE html>
<html lang="en">
        
    <head>        
        <title>Stock Manager</title> 
        <script>
            function printPageArea(areaID){
            var printContent = document.getElementById(areaID);
            var WinPrint = window.open('', '', 'width=900,height=650');
            WinPrint.document.write(printContent.innerHTML);
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
            }
        </script>
        <?php
            include("../config/stockmgrmenu.php");
            ?>
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>                        
    </head>
    <body>
        
       <div id ="all">
            
                <ul class="breadcrumb">
                    <h3>All stock on  </li></h3>
                </ul>
    
    <div id="btnn">
        <a href="javascript:void(0);" id="print_button2" style="width: 130px; padding: 5px 8px 5px 8px;text-align: center;float: right;background-color: #1caf9a;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('all')">Print All Stock</a>
    </div>
    
        <div id="stock">
            <table class="table datatable">
                                        <thead>
                                            <tr class='success'>
                                                <th>Item Id</th>
                                                <th>Item Name</th>
                                                <th>Cost</th>
                                                <th>Selling Price</th>
                                                <th>Brand</th>
                                                <th>On Hand</th>
                                            </tr>
                                        </thead>
                <?php
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

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        </div>
    </body>
</html>






