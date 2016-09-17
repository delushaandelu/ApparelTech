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

        <script type="text/javascript">
        //This code is the validation code
           function check(){
          
                if(document.form.categoryname.value == "0"){
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

                 if(document.form.cost.value == ""){
                    alert("Please add the Buying Proce");
                    document.form.brandname.focus();
                    return false;
                }

                 if(document.form.sellingprice.value == ""){
                    alert("Please add the Selling Price");
                    document.form.brandname.focus();
                    return false;
                }

                if(document.form.quantity.value == ""){
                    alert("Please add the Quantity");
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
                    <h2>Manage Stock</h2>
                </ul>
<div class = "panel">
        
        	<ul class="nav nav-justified" >
    			
    			<li id ="nav_tab_item_effect"><a href="Stock_ManageStock.php">Add Item</a></li>
   	 			<li id ="nav_tab_item_effect"><a href="manage_stock_searchItem.php">Search Item</a></li>
    			<li id ="nav_tab_item_effect"><a href="manage_stock_deleteItem.php">Delete Item</a></li>
                <li id ="nav_tab_item_effect"><a href="#">Update Item</a></li>
  			</ul>
            <br><br>
                 
                	<div class="upper_panel_manage_stock">
                        <div id="btn">
                            
                            <div class="col-md-6">                           
                            <button onclick="location.href = 'Stock_addItem.php';" id="btnManageStockAddNew" class="myButton" >Add New</button>
                            </div>
                            <div class="col-md-6">
                            <button onclick="location.href = 'AddToExisting.php';" id="btnManageStockAddToExisting" class="myButton" >Add To Existing</button>
                            </div>
                            
                            
                        </div>
               
                      	<div id="button">
                            <!-- Dont remove this tag. its refer the margin space  -->
                        </div>

                            	
                         </div>       
                            
                            <!-- This is related to add item. The add item function is in the item class. Here I created an object called myItem and called the addItem() function-->
                          
    </div>

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






