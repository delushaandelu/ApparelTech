<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manager Admin</title>
    <!-- link css, alert files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
    
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

<!-- get database connection and manager's menu -->
<?php
    include ("../config/managermenu.php");
    //include('database_connection.php');
?>
<div id ="pdf">
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
            
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <!--<h4 class="page-header">Stock Reports</h4>-->
        </div>
      
        
    </div>
    <div class="right_col" role="main">
    


    <div class="row">

        <div id="content">
        <div id="top">
           <?php
                // include('database_connection.php');

                   
                if(isset($_POST['btnNewReportGenerateReport'])){
                   
                    if(isset( $_POST['selector'])){
                     
                    
                    $categoryname = $_POST['selector'];
                    
                  
                    $sql = "SELECT * FROM item WHERE catagery = '$categoryname'";
                         
                   $sum = 0;
                   $profit = 0;?>
                   <div class='col-md-4'></div>
                   <div class='col-md-4'>
                        <h3 align='center'>Stock Report</h3>
                    </div>
            <br><br><br>
                    <!--<div class = 'col-md-4'>
                        <input type="submit" id="btnNewReportGenerateReport"  name="pdfBtn" align="center" value="Download PDF" onclick="location.href='../stockmanager/tcpdf/project/stockdetails.php'"/>
                          
                    </div> -->
                    <?php
                    if($result = mysqli_query($dbcon, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo "<h4 align='center'>$categoryname</h4><br><br>";
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

                        echo " <th><td colspan='2'><b><font size = '3'>Total Stock Value</font></b></td></th>";
                        
                        echo "<th><td colspan='2'><b> <font size = '3'>$sum </font></b></td></th>";
                        
                        

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
              <a href="javascript:void(0);" id="print_button2" style="width: 130px; padding: 5px 8px 5px 8px;text-align: center;float: right;background-color: #1caf9a;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('pdf')">Print</a>
            
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        </div>
    </div>
            
    </div>
    
</div>
<!-- js files -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/metisMenu.min.js"></script>
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
