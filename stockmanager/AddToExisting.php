<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>  
        <link rel="stylesheet" type="text/css"  href="manage_stock_design.css"/>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script>
           
    $(document).ready(function(){
        $('#categoryname').change(function(){
            /*$('#categoryname').empty();
            $('#categoryname').append("<option> Loading </option>");
            $('#categoryname').append("<option value = '0'> Select Category Name </option>");*/

            
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

       </script>

       <script type="text/javascript">
           
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
            
                <div class="col-md-4">
                    <button onclick="location.href = 'Stock_ManageStock.php';" id="btnManageStockAddNew" class="myButton" >Add New</button><br><br>
                     <button onclick="location.href = 'AddToExisting.php';" id="btnManageStockAddToExisting" class="myButton" >Add To Existing</button>




                 </div>
    
                <div class = "col-md-8">  
                	<div class = "upper_panel_add_item">
                            
                                <form method="post">
                                    <table border="0" >
                                        <tr></tr>
                                        <tr>
                                            
                                            <td id="table_font"  width="60%"> 
                                                Category Name   
                                            </td> 
                                            
                                            <td>
                                                
                                                <select id = "categoryname" name="categoryname" class="add_dropdown_effects">
                                                    <option value="Sewing Machines">Sewing Machines</option>
                                                    <option value="Sewing Machine Spare Parts">Sewing Machine Spare Parts</option>
                                                    <option value="Tools">Tools</option>
                 
                                                </select><br><br>
                  
                                            </td>
                                                
                                                
                                             
                                        </tr>
                                        <tr>
                                            
                                            <td id="table_font" width="55%">
                                                Item Name
                                            </td> 
                                            
                                            <td>
                                                <select id = "itemname" name="itemname" class="add_dropdown_effects"></select><br><br><br>
                                            </td>
                                        </tr>
                                        
                                       
                                       <tr>
                                            
                                            <td id="table_font"  width="55%">
                                                Brand
                                            </td> 
                                              
                                            <td>
                                                <select id = "brandname" name="brandname" class="add_dropdown_effects"></select><br><br>
                                            


                                                
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            
                                            <td id="table_font" width="55%">
                                                Price
                                            </td> 
                                             
                                            <td>
                                                <br><br>
                                            </td>
                                        </tr>
                                        
                                         <tr>
                                            
                                            <td id="table_font" width="55%" align="right">
                                                Cost                            
                                            </td> 
                                             
                                            <td>
                                                <input type="text" class="form-control"  name="cost" ><br><br>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            
                                            <td id="table_font" width="55%" align="right" >
                                                Selling Price                
                                            </td> 
                                             
                                            <td>
                                                <input type="text" class="form-control" name="sellingprice" ><br><br>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            
                                            <td id="table_font" width="55%">
                                                Quantity
                                            </td> 
                                             
                                            <td>
                                                <input type="text" class="form-control" name="quantity" ><br><br>
                                            </td>
                                        </tr>
                                        
                                        
                                    </table> 
                                 
                        	</div>
                        </div>
                        
                      	<div class = "below_panel_add_item">
                            	<br><br>
                                 <input type="submit" class="myButton" id="btnManageStockInsert" name="btnManageStockInsert" value="Add"  /><br><br>
                         </div>       
                            </form>
                            
                            <?php
                                
                                include ('Item.php');
                                if(isset($_POST['btnManageStockInsert'])){
                                    
                                    $itemname = $_POST['itemname'];
                                    $brand = $_POST['brandname'];
                                    $sellingprice = $_POST['sellingprice'];
                                    $cost = $_POST['cost'];
                                    $categoryname = $_POST['categoryname'];
                                
                                    $quantity = $_POST['quantity'];
                                    $myItem = new Item();
                                    $myItem -> addItem($itemname, $brand,$sellingprice,$cost, $categoryname,$quantity );
                                }
                                
                            
                            ?>
                  
                 
               
            
        

    
   
</div>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






