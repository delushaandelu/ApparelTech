<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>  
        <link rel="stylesheet" type="text/css"  href="manage_stock_design.css"/>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script>
            function getItemName($categoryName){
                $.ajax({
                    alert("ihit");
                    type: "POST",
                    url: 'ItemController.php',
                    contentType: 'application/json; charset=utf-8',
                    data: {functionName : addItemToItemNameDropDown, categoryName : $categoryName },
                    success: function(data) {
                       $('#itemname').empty();
                       $('#itemname').append("<option value = '0'> Select Item Name </option>");
                       $.each(data, function(i,item)){
                            $('#itemname').append('<option value = '+ i +' > '+data[i].itemName +'</option>');
                       });
                },



                });
            }









	   		$document.ready(function(){
                $(#categoryname).change(function(){
                    alert("ok");
                    var $categoryName = $('#categoryname').val();
                    getItemName($categoryName);
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
    			
    			<li id ="nav_tab_item_effect"><a href="#">Add Item</a></li>
   	 			<li id ="nav_tab_item_effect"><a href="#">Search Item</a></li>
    			<li id ="nav_tab_item_effect"><a href="#">Delete Item</a></li>
                <li id ="nav_tab_item_effect"><a href="#">Update Item</a></li>
  			</ul>
            <br><br>
           
        <div class="upper_panel_delete_item">
        	<select id = "categoryname">
            	<option value="Sewing Machines">Sewing Machines</option>
                <option value="Sewing Machine Spare Parts">Sewing Machine Spare Parts</option>
                <option value="Tools">Tools</option>
            </select>
            <br><br>
            
            <select id = "itemname"></select>
            <br><br>
            
            <select id = "brandname"></select>
        </div>
        <div class = "lower_panel_delete_item">
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






