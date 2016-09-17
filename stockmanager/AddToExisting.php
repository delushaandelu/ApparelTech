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


    <script type="text/javascript">
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
                
                	<div class = "upper_panel_add_item" id="add">
                            
                                <form method="post" name="form" onSubmit="return check();">
                                    <table border="0" >
                                        <tr class="spaceUnder">
                                            <td id="table_font" width="20%" >Category Name</td> 
                                            <td>
                                                <select id = "categoryname" name="categoryname" class="btn btn-default dropdown-toggle">
                                                    <option value="0" > Select Category Name</option>
                                                    <option value="Sewing Machines">Sewing Machines</option>
                                                    <option value="Sewing Machine Spare Parts">Sewing Machine Spare Parts</option>
                                                    <option value="Tools">Tools</option>
                                                </select><br><br>
                                            </td> 
                                        </tr>
                                        <tr class="spaceUnder">
                                            <td id="table_font" width="10%" >Item Name</td> 
                                            <td><select id = "itemname" name="itemname" class="btn btn-default dropdown-toggle"></select></td>
                                        </tr>
                                       <tr class="spaceUnder">
                                            <td id="table_font" width="10%"  >Brand</td>   
                                            <td><select id = "brandname" name="brandname" class="btn btn-default dropdown-toggle"></select>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td id="table_font" width="10%" >Price</td> 
                                            <td>
                                                
                                            </td>
                                        </tr>
                                         <tr class="spaceUnder">
                                            <td id="table_font" width="10%" ></td> 
                                            <td><input type="text" class="form-control"  name="cost" placeholder="Cost"></td>
                                        </tr>
                                        <tr class="spaceUnder">
                                            <td id="table_font" width="10%" > </td> 
                                            <td><input type="text" class="form-control" name="sellingprice" placeholder="Selling Price" ></td>
                                        </tr>
                                        <tr class="spaceUnder">
                                            <td id="table_font" width="10%" > Quantity</td> 
                                            <td><input type="text" class="form-control" name="quantity" ></td>
                                        </tr>
                                    </table>     
                        	</div>
                            
                        <div id="btn">
                            <input type="submit" class="myButton" id="btnManageStockInsert"  name="btnManageStockInsert" value="Add"  />
                           
                        </div>
               
                        <div id="button">
                            <!-- Dont remove this tag. its refer the margin space  -->
                        </div>

                                
                         </div>       
                            </form>
                            <!-- This is related to add item. The add item function is in the item class. Here I created an object called myItem and called the addItem() function-->
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






