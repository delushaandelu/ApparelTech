<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    
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
        <a href="javascript:void(0);" id="print_button2" style="width: 130px; padding: 5px 8px 5px 8px;text-align: center;float: right;background-color: #1caf9a;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('top3')">Print</a>
        
    </div>
    <div class="row">

        <div id="content">
        <div id="top3">
                
              <?php
                $query = "SELECT item_id,itemName,catagery,brand,stockQty,reOrderLevel FROM item";
                //echo ($query);
                $res = mysqli_query($dbcon,$query);
                 if(mysqli_num_rows($res) > 0){
                    
                        echo "<table border = '0' class='table table-hover'>";
                            echo "<tr bgcolor='#C0C0C0' width = '10px' >";
                            
                                echo "<th>Item ID</th>"; echo"<td width = 10%></td>";
                                echo "<th >Item Name</th>";echo"<td width = 2%></td>";
                                echo "<th>Category</th>";echo"<td width=2%></td>";
                                echo "<th>Brand</th>";echo"<td width=2%></td>";
                                echo "<th>Quantity</th>";echo"<td width=2%></td>";
                            
                                
                            echo "</tr>";
                            

                        while($row = mysqli_fetch_array($res)){
                            if($row['stockQty'] <= $row['reOrderLevel']){
                            echo "<tr>";
                                echo "<td>" . $row['item_id'] . "</td>"; echo"<td ></td>";
                                echo "<td>" . $row['itemName'] . "</td>";echo"<td></td>";
                                echo "<td>" . $row['catagery'] . "</td>";echo"<td></td>";
                                echo "<td>" . $row['brand'] . "</td>";echo"<td></td>";
                               $stockQty = $row['stockQty'];
                                echo "<td style='text-align:center'>" . "<input type='text' style='width:60px; border:0px' value='$stockQty' name='stockQty' id='stockQty'> ". "</td>";
                                 

                         echo "</td>";
                            echo "</tr>";}
                        }
                        echo "</table>";
                        // Close result set
                        mysqli_free_result($result);
                    }
                


            ?>
            
        </div>

        <!--<div id="bottom3">
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

            </div>-->
        </div>
        
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
    <?php
    if(isset($_GET['stockQty'])){
    $qty=$_GET['stockQty'];

        $update_query = "UPDATE item SET status = 'true' WHERE customer_id=$cid";

        $result1=mysqli_query($dbcon,$copy_query);
        $result2=mysqli_query($dbcon,$update_query);

        if($result1 && $result2){
            echo'<script language ="javascript">';
            echo "swal({  title: 'Details of customer saved successfully!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='ManageUser-Manage_Customer.php'});";
            echo'</script>';
        }
        else{
            echo'<script language ="javascript">';
            echo "swal({  title: 'Error occurs while saving data!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='ManageUser-Manage_Customer.php'});";
            echo'</script>';
        }
    }
    ?>
    <div id="footer"></div>
    </div> 

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
