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
                    <h2>New Reports</li></h2>
                </ul>
 <div id="upper_panel_new_report">
       <div class="col-md-4">
            <button>Data Report</button>
            <button>Graphical Report</button>
       </div>

        <div class="col-md-8">
            <form method="post">
                <label>Select the Category Type</label>

                <input type="radio" name="categorytype" value="Sewing Machines" checked> Sewing Machines<br>
                <input type="radio" name="categorytype" value="Sewing Machine Spare Parts"> Sewing Machine Spare Parts<br>
                <input type="radio" name="categorytype" value="Tools"> Tools
                <br><br>
                <input type="submit" class="btn btn-success" id="btnNewReportGenerateReport" name="btnNewReportGenerateReport" value="Generate Report"  />

                

            </form> 


     <div class="drop_down">       
    
    
  <ul class="drop_down_ul">
  <li>
    <input type="radio" id="f-option" name="selector">
    <label for="f-option">Pizza</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="s-option" name="selector">
    <label for="s-option">Boyfriend</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  
  <li>
    <input type="radio" id="t-option" name="selector">
    <label for="t-option">Cats</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
</ul>
</div>

<!-- <div class="signature">
    <p>Made with <i class="much-heart"></i> by <a href="http://codepen.io/AngelaVelasquez">Angela Velasquez</a></p>
</div>
      -->

       </div>


    </div>

    <div class="report_table">
        <?php
                include('database_connection.php');

                   
                if(isset($_POST['btnNewReportGenerateReport'])){
                   
                    if(isset( $_POST['categorytype'])){
                     
                    
                    $categoryname = $_POST['categorytype'];
                    echo "$categoryname";
                  
                    $sql = "SELECT * FROM item WHERE catagery = '$categoryname'";
                         
                   $sum = 0;
                   $profit = 0;
                   
                    if($result = mysqli_query($dbcon, $sql)){
                    if(mysqli_num_rows($result) > 0){
                    
                        echo "<table border = '0' class='table table-striped'>";
                            echo "<tr bgcolor='#C0C0C0' width = '10px' >";
                            
                                echo "<th>Item ID</th>"; echo"<td width = 10%></td>";
                                echo "<th >Item Name</th>";echo"<td width = 2%></td>";
                                echo "<th>Category</th>";echo"<td width=2%></td>";
                                echo "<th>Brand</th>";echo"<td width=2%></td>";
                                echo "<th>Buying Price</th>";echo"<td width = 2%></td>";
                                echo "<th>Selling Price</th>";echo"<td width=2%></td>";
                                echo "<th>Quantity</th>";echo"<td width=2%></td>";
                                echo "<th>Stock Value</th>";echo"<td width=2%></td>";
                                echo "<th>Estimated Profit</th>";echo"<td width=2%></td>";


                            echo "</tr>";
                            

                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td>" . $row['item_id'] . "</td>"; echo"<td ></td>";
                                echo "<td>" . $row['itemName'] . "</td>";echo"<td></td>";
                                echo "<td>" . $row['catagery'] . "</td>";echo"<td></td>";
                                echo "<td>" . $row['brand'] . "</td>";echo"<td></td>";
                                echo "<td>" . $row['buyingPrice'] . "</td>";echo"<td></td>";
                                echo "<td>" . $row['sellingPrice'] . "</td>";echo"<td></td>";
                                echo "<td>" . $row['stockQty'] . "</td>";echo"<td></td>";
                                echo "<td>" . ($row['stockQty'] *  $row['buyingPrice'] ). "</td>";echo"<td></td>";
                                echo "<td>" . ($row['stockQty'] *  ($row['sellingPrice'] - $row['buyingPrice'] )). "</td>";echo"<td></td>";
                                $sum = $sum + ($row['stockQty'] *  $row['buyingPrice'] );
                                $profit = $profit + ($row['stockQty'] *  ($row['sellingPrice'] - $row['buyingPrice'] ));

                                 

                         echo "</td>";
                            echo "</tr>";
                        }

                        echo " <th>Total Stock Value </th>";
                        
                        echo "<th> $sum </th>";
                       

                        echo " <th>Total Estimated Profit </th>";
                        
                        echo "<th> $profit </th>";


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






