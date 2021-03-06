<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" type="text/css"  href="Stock_NewReport_Design.css"/>

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
            include("../config/stockmgrmenu.php");
        ?>

                <ul class="breadcrumb">
                  
                </ul>
                
                <a href="javascript:void(0);" id="print_button2" style="width: 130px; padding: 5px 8px 5px 8px;text-align: center;float: right;background-color: #1caf9a;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('invoice')">Print Report</a>
                          
                
                

<div id ="invoice">
        
<style>
    #amount
{
    margin-left: 85%;
}

#note
{
    margin-top: -25%;
}

#action
{
    margin-top: 0%;
    margin-left: 60%;
}   
.hfont
{
    font-size: 25px;
}
</style>

 <div class="report_table">

        
        <div class='col-md-4'>
                        <br>
                       <h5><?php echo "Date ".date("d.m.Y");?></h5>
                   </div>
                   <div class='col-md-4'>
                        <h3 align='center'>Priyantha Enterprises</h3><br>
                        <h3 align='center'>Stock Report</h3><br>
                        <h4 align='center'><?php echo $_POST['selector'];?></h4>

                    </div>
                <div class = 'col-md-4'>
                        
                </div>
        <?php
                // include('database_connection.php');

                   
                if(isset($_POST['btnNewReportGenerateReport'])){
                   
                    if(isset( $_POST['selector'])){
                     
                    
                    $categoryname = $_POST['selector'];
                    
                  
                    $sql = "SELECT * FROM item WHERE catagery = '$categoryname'";
                         
                   $sum = 0;
                   $profit = 0;?>
                   
                    <?php
                    if($result = mysqli_query($dbcon, $sql)){
                    if(mysqli_num_rows($result) > 0){
                    
                        echo "<table border = '0' class='table table-striped'>";
                            echo "<tr bgcolor='#C0C0C0' width = '10px' >";
                            
                                echo "<th><h5 align='center'><b>Item ID</b></h5></th>"; echo"<td width = 10%></td>";
                                echo "<th><h5 align='center'><b>Item Name</h5></b></th>";echo"<td width = 2%></td>";
                                echo "<th><h5 align='center'><b>Category</h5></b></th>";echo"<td width=2%></td>";
                                echo "<th><h5 align='center'><b>Brand</h5></b></th>";echo"<td width=2%></td>";
                                echo "<th><h5 align='center'><b>Buying Price</h5></b></th>";echo"<td width = 2%></td>";
                                echo "<th><h5 align='center'><b>Selling Price</h5></b></th>";echo"<td width=2%></td>";
                                echo "<th><h5 align='center'><b>Quantity</h5></b></th>";echo"<td width=2%></td>";
                                echo "<th ><h5 align='center'><b>Stock Value</h5></b></th>";echo"<td width=2%></td>";
                                echo "<th><h5 align='center'><b>Estimated Profit</h5></b></th>";echo"<td width=2%></td>";


                            echo "</tr>";
                            

                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td align='center'>" . $row['item_id'] . "</td>"; echo"<td ></td>";
                                echo "<td align='center'>" . $row['itemName'] . "</td>";echo"<td></td>";
                                echo "<td align='center'>" . $row['catagery'] . "</td>";echo"<td></td>";
                                echo "<td align='center'>" . $row['brand'] . "</td>";echo"<td></td>";
                                echo "<td align='right'>" . $row['buyingPrice'] . ".00</td>";echo"<td></td>";
                                echo "<td align='right'>" . $row['sellingPrice'] . ".00</td>";echo"<td></td>";
                                echo "<td align='center'>" . $row['stockQty'] . "</td>";echo"<td></td>";
                                echo "<td align='right'>" . ($row['stockQty'] *  $row['buyingPrice'] ). ".00</td>";echo"<td></td>";
                                echo "<td align='right'>" . ($row['stockQty'] *  ($row['sellingPrice'] - $row['buyingPrice'] )). ".00</td>";echo"<td></td>";
                                $sum = $sum + ($row['stockQty'] *  $row['buyingPrice'] );
                                $profit = $profit + ($row['stockQty'] *  ($row['sellingPrice'] - $row['buyingPrice'] ));

                                 

                         echo "</td>";
                            echo "</tr>";
                        }
                        echo "<tr>";
                          echo " <td></td>";
                        echo "</tr>";
                        echo "<tr>";

                        echo " <th><td colspan='4'><b><font size = '3'>Total Stock Value</font></b></td></th>";
                        
                        echo "<th><td colspan='2'><b> <font size = '3'>$sum </font></b></td></th>";
                        
                         echo "</tr>";
                         echo "<tr>";
                        echo " <th><td colspan='4'><b><font size = '3'>Total Estimated Profit</font></b></td></th>";
                        
                         echo "<th><td colspan='2'><b> <font size = '3'>$profit</font></b></td></th>";

                        echo "</tr>";
                        echo "</table>";
                        echo "<hr>";
                        // Close result set
                        
                        mysqli_free_result($result);
                    } else{
                        echo "No records matching your query were found.";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbcon);
            }
            mysqli_close($dbcon);
                    }
                }

            ?>
            
</div>

    </div>
    
    <div id="footer"></div>
</div>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






