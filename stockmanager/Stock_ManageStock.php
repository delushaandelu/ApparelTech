<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>  
        <link rel="stylesheet" type="text/css"  href="manage_stock_design.css"/>                     
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
            <div class="panel_body_add_item">
                
  
                    
            	<div id = "upper_panel_add_item">
                        
                            <form method="post">
                                <table border="0" >
                                    <tr></tr>
                                    <tr>
                                        
                                        <td id="table_font"  width="60%"> 
                                            Category Name   
                                        </td> 
                                        
                                        <td>
                                            
                                            <select name="categoryname">
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
                                            <input type="text" class="form-control" name="itemname"><br><br>
                                        </td>
                                    </tr>
                                    
                                   
                                   <tr>
                                        
                                        <td id="table_font"  width="55%">
                                            Brand
                                        </td> 
                                          
                                        <td>
                                            <select name="brand">
                                                <option value="Juki">Juki</option>
                                                <option value="Singer">Singer</option>
                                                <option value="Brother">Brother</option>
                                                <option value="Janome">Janome</option>
             
                                            </select><br><br>
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
                        
                      	<div id = "below_panel_add_item">
                            	<br><br>
                                 <input type="submit" class="myButton" id="btnManageStockInsert"name="btnManageStockInsert" value="Add"  /><br><br>
                         </div>       
                            </form>
                            
                            <?php
                                
                                include ('Item.php');
                                if(isset($_POST['btnManageStockInsert'])){
                                    
                                    $itemname = $_POST['itemname'];
                                    $brand = $_POST['brand'];
                                    $sellingprice = $_POST['sellingprice'];
                                    $cost = $_POST['cost'];
                                    $categoryname = $_POST['categoryname'];
                                
                                    $quantity = $_POST['quantity'];
                                    $myItem = new Item();
                                    $myItem -> addItem($itemname, $brand,$sellingprice,$cost, $categoryname,$quantity );
                                }
                                
                                if(isset($_POST['btnManageStockDelete'])){
                                    $itemname = $_POST['itemname'];
                                    $myItem = new Item();
                                    $myItem -> deleteItem($itemname);
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






