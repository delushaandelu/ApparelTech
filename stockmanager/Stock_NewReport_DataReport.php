<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" type="text/css"  href="Stock_NewReport_Design.css"/>
        
         <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script>
           
    $(document).ready(function(){
        $("input[type='button']").click(function(){
            /*$('#categoryname').empty();
            $('#categoryname').append("<option> Loading </option>");
            $('#categoryname').append("<option value = '0'> Select Category Name </option>");*/

            
            var categoryName = $("input[name='categoryname']:checked").val()

            if(categoryName){

                $.ajax({
                    type : 'GET',
                    url : '/GroupProject/stockmanager/dropdown.php?categoryname='+categoryName,
                    //data : 'categoryname=' + categoryName,
                    dataType:'json',
                    success : function(data){
                        $('#itemname').empty();
                        $('#itemname').append("<option value = '0'> Select Item Name </option>");
                        //$('#itemname').html(html);
                        data.forEach(function(data){
                            $('#itemname').append('<option>'+data+'</option>');

                        });
                        
                        
                    }
                });
            }
        });
    });
       </script>            -->            
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>

                <ul class="breadcrumb">
                    <h4>New Reports</li></h4>
                </ul>

<form method="post">
    <div class="upper_panel_new_report">
      

       <div class="col-md-2"></div>
    
        <div class="col-md-5" id="drop_down" >       
    
    
            <ul class="drop_down_ul">
                  <li>
                    <input type="radio" id="f-option" name="selector" value="Sewing Machines">
                    <label for="f-option">Sewing Machines</label>
                    
                    <div class="check"></div>
                  </li>
                  
                  <li>
                    <input type="radio" id="s-option" name="selector" value="Sewing Machine Spare Parts">
                    <label for="s-option">Sewing Machine Spare Parts</label>
                    
                    <div class="check"><div class="inside"></div></div>
                  </li>
                  
                  <li>
                    <input type="radio" id="t-option" name="selector" value="Tools">
                    <label for="t-option">Tools</label>
                    
                    <div class="check"><div class="inside"></div></div>
                  </li>
            </ul>
        </div>

        <div class="col-md-5" id="button_effect">
            <input type="submit" id="btnNewReportGenerateReport" name="btnNewReportGenerateReport" value="Generate Report"  />
        </div>
        
    </div>
</form>



    

    <div class="report_table">
        <?php
                // include('database_connection.php');

                   
                if(isset($_POST['btnNewReportGenerateReport'])){
                   
                    if(isset( $_POST['selector'])){
                     
                    
                    $categoryname = $_POST['selector'];
                    
                  
                    $sql = "SELECT * FROM item WHERE catagery = '$categoryname'";
                         
                   $sum = 0;
                   $profit = 0;
                   
                    if($result = mysqli_query($dbcon, $sql)){
                    if(mysqli_num_rows($result) > 0){
                    
                        echo "<table border = '0' class='table table-striped'>";
                            echo "<tr bgcolor='#C0C0C0' width = '10px' >";
                            
                                echo "<th><h4 align='center'><b>Item ID</b></h4></th>"; echo"<td width = 10%></td>";
                                echo "<th><h4 align='center'><b>Item Name</h4></b></th>";echo"<td width = 2%></td>";
                                echo "<th><h4 align='center'><b>Category</h4></b></th>";echo"<td width=2%></td>";
                                echo "<th><h4 align='center'><b>Brand</h4></b></th>";echo"<td width=2%></td>";
                                echo "<th><h4 align='center'><b>Buying Price</h4></b></th>";echo"<td width = 2%></td>";
                                echo "<th><h4 align='center'><b>Selling Price</h4></b></th>";echo"<td width=2%></td>";
                                echo "<th><h4 align='center'><b>Quantity</h4></b></th>";echo"<td width=2%></td>";
                                echo "<th ><h4 align='center'><b>Stock Value</h4></b></th>";echo"<td width=2%></td>";
                                echo "<th><h4 align='center'><b>Estimated Profit</h4></b></th>";echo"<td width=2%></td>";


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






