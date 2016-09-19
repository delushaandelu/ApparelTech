<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>  
        <link rel="stylesheet" type="text/css"  href="manage_stock_design.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script>
        // This function is used to list down item names from the database according to the user's category selection
    $(document).ready(function(){
        $('#categoryname').change(function(){
            
            
            var categoryName = $(this).val();

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
       </script>

       <script type="text/javascript">
       // This function is used to list down brand names from the database according to the user's item name selection
           
        $(document).ready(function(){

        $('#itemname').change(function(){

            
            var itemName = $(this).val();

            if(itemName){

                $.ajax({
                    type : 'GET',
                    url : '/GroupProject/stockmanager/dropdown2.php?itemname='+itemName,
                    
                    //data : 'categoryname=' + categoryName,
                    dataType:'json',
                    success : function(data){
                         $('#brandname').empty();
                        $('#brandname').append("<option value = '0'> Select Brand Name </option>");
                        $('#brandname').append("<option> All </option>");
                        //$('#itemname').html(html);
                        data.forEach(function(data){
                            $('#brandname').append('<option>'+data+'</option>');
                            
                        });
                        
                        
                    }
                });
            }
        });
    });

       </script>

       <script type="text/javascript">
       // This code is written to delete items when user marked check boxes
           $(document).ready(function(){

            $('#btnManageStockDelete').click(function(){
                 
                if(confirm("Are you sure you want to delete this?")){
                    var id = [];
                    $(':checkbox:checked').each(function(i){
                        id[i] = $(this).val();
                    });
                    if(id.length === 0){
                       
                        alert("Please select atleast one check box");
                        
                    }else{
                        $.ajax({
                            url : 'DeleteItem.php',
                            method : 'POST',
                            data : {id:id},
                            success : function(){
                               
                                for(var j=0;j<id.length;j++){
                                    $('#tr' + id[j] + '').css('background-color','#ccc');
                                    $('#tr'+ id[j] + '').fadeOut('slow');
                                    
                                    window.location.replace("manage_stock_deleteItem.php");

                                }
                                 

                            }

                        });

                    }
                }
                else{

                }
            });

           });
       </script>
       <script type="text/javascript">
       //This code is wriiten to do the validation checking
           function check(){
                if(document.form.categoryname.value == "Select Category Name"){
                    alert("Please select a Category Name");
                    document.form.categoryname.focus();
                    return false;
                }
                 if(document.form.itemname.value == ""){
                    alert("Please select a Item Name");
                    document.form.itemname.focus();
                    return false;
                }
                if(document.form.brandname.value == ""){
                    alert("Please select a Brand Name");
                    document.form.brandname.focus();
                    return false;
                }
           }

       </script>
	
                  
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>

                <ul class="breadcrumb">
                    <h2>Manage Stock</li></h2>
                </ul>
		<div class = "panel">
        
        	<ul class="nav nav-justified" >
    			
                <li id ="nav_tab_item_effect"><a href="Stock_ManageStock.php">Add Item</a></li>
                <li id ="nav_tab_item_effect"><a href="manage_stock_searchItem.php">Search Item</a></li>
                <li id ="nav_tab_item_effect"><a href="manage_stock_deleteItem.php">Delete Item</a></li>
                <li id ="nav_tab_item_effect"><a href="#">Update Item</a></li>
  			</ul>
            <br><br>
           
        <form method="post" name="form" onSubmit="return check();">    
            <div class="upper_panel_delete_item">
                <div class="col-md-4">
                    <select id = "categoryname" name="categoryname" class="btn btn-default dropdown-toggle">
                        <option > Select Category Name</option>
                        <option value="Sewing Machines">Sewing Machines</option>
                        <option value="Sewing Machine Spare Parts">Sewing Machine Spare Parts</option>
                        <option value="Tools">Tools</option>
                    </select>
                </div>       
                <div class="col-md-4">       
                    <select id = "itemname" name="itemname" class="btn btn-default dropdown-toggle"></select>
                </div>
                <div class="col-md-4">        
                    <select id = "brandname" name="brandname" class="btn btn-default dropdown-toggle"></select>
                </div>
            </div>
            <div class="middle_panel_delete_item">
                    <input type="submit" class="myButton" id="btnManageStockSearch2" name="btnManageStockSearch2" value="Search To Delete"  />
                </div>
        </form>
            </br>
        
        <div class = "below_panel_delete_item">
           <!-- The below php code is used to list down search items to delete-->

            <?php
                include('database_connection.php');

                   
                if(isset($_POST['btnManageStockSearch2'])){
                    
                    $categoryname = $_POST['categoryname'];
                    $itemname = $_POST['itemname'];
                    $brandname = $_POST['brandname'];
                    if($brandname == "All"){
                         $sql = "SELECT * FROM item WHERE catagery = '$categoryname' AND itemName = '$itemname'";
                         
                    }
                    else{
                         $sql = "SELECT * FROM item WHERE catagery = '$categoryname' AND itemName = '$itemname' AND brand = '$brandname'";
                        
                    }
                   
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
                                echo "<th>Delete</th>";
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
                                echo "<td>"?><form method = "post"><input type="checkbox" name="deleteitem[]" value=<?php echo $row['item_id']; ?>> </form>

                        <?php echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";?>
                        <div id="delete_btn">
                        <input type="submit" class="myButton" id="btnManageStockDelete" name="btnManageStockDelete" value="Delete"  />
                        </div>

                        <?php
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
            ?>
            



        </div>


    
   
</div>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






