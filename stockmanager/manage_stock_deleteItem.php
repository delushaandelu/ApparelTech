<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>  
        <link rel="stylesheet" type="text/css"  href="manage_stock_design.css"/>
        
         <script>
    
  // see http://www.quirksmode.org/dom/tests/selects.html
		  function addOption(selectId) 
		  {
			var x = document.getElementById(selectId);
			var y = new Option('Test option W3C');
			x.add(y,x.options[x.options.length]);
			// for IE use   x.add(y,2);
		  }
		
		
		  // see http://www.mredkj.com/tutorials/tutorial005.html      
		  function appendOptionLast(selectID, num)
		  {
			var elSel = document.getElementById(selectID);
			
			var elOptNew = document.createElement('option');
			elOptNew.text = num;
			elOptNew.value = num;
			
		  
			try {
			  elSel.add(elOptNew, null); // standards compliant; doesn't work in IE
			}
			catch(ex) {
			  elSel.add(elOptNew); // IE only
			}
		  }
		  
		  function removeAllOptions(selectID)
		  {
			var elSel = document.getElementById(selectID);
			elSel.options.length = 0
			if (elSel.length > 0)
			{
			  elSel.remove(0);
			}
		  }
		  
		  function addAllOptions(selectID, values)
		  {
			var arrayLength = values.length;
			for (var i = 0; i < arrayLength; i++) {
				appendOptionLast(selectID,values[i]);
			}
		  }
		  
		
		  function setOptions()
		  {
			var s1 = document.getElementById("categoryname");
			//removeAllOptions('s2');
			document.getElementById('itemname').options.length = 0
			var selIndex = s1.selectedIndex;
			if(selIndex == 1)
			  addAllOptions('itemname', ["All","Electric Sewing Machines", "Automatic Sewing Machines", "Overlocker Sewing Machines"]);
			else if(selIndex == 2){
			  addAllOptions('itemname', ["All","Belts","Bobbins and Spools", "Bobbin Cover Slide Plate","Bobbin Holder & Hooks" ,"Bobbin Winders","Bulbs","Embrodery Hoops","Extension Tables"]);
			}
			else{
			  addAllOptions('itemname', ["All","Ironing Press Parts", "Spares and Accessories","Levers Dials & Buttons","Needles","Needle Plates","Needle Threader"]);
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
    			
    			<li id ="nav_tab_item_effect"><a href="#">Add Item</a></li>
   	 			<li id ="nav_tab_item_effect"><a href="#">Search Item</a></li>
    			<li id ="nav_tab_item_effect"><a href="#">Delete Item</a></li>
                <li id ="nav_tab_item_effect"><a href="#">Update Item</a></li>
  			</ul>
            <br><br>
            <div class="panel_body_search_item">
            	<div id="upper_panel_search_item">
                	<form method="post">
                    	<select id = "categoryname" name = "categoryname" onchange="setOptions()">
        					<option value="" disabled selected hidden>Search By Category Name</option>
                            <option>Sewing Machines</option>
        					<option>Sewing Machine Spare Parts</option>
                            <option>Tools</option>
    					</select>
                        <br><br>
                        
                     
                        <select id ="itemname" name="itemname">
        					<option value="" disabled selected hidden>Search By Item Name</option>
        					<option >All</option>
                            <option>Electric Sewing Machines</option>
                            <option>Automatic Sewing Machines</option>
                            <option>Overlocker Sewing Machines</option>
    					</select>
                        <br><br>
                        
                        
                        <select id = "brandname" name= "brandname">
        					<option value="" disabled selected hidden>Search By Brand Name</option>
                            <option >All</option>
        					<option>Juki</option>
        					<option>Singer</option>
                            <option>Tool</option>
    					</select>
                        <br><br>
                        
       					 <input type="submit" id="myButton" name="btnManageStockSearch" value="Search"  /><br><br>
                    </form>
                </div>
               
                <div id="below_panel_search_item">   
                        <?php
                        	include ('Item.php');
                            if(isset($_POST['btnManageStockSearch'])){
                                    $categoryname = $_POST['categoryname'];
                                    $itemname = $_POST['itemname'];
									$brandname = $_POST['brandname'];
									
                                    $myItem = new Item();
                                    $myItem -> searchItem($categoryname,$itemname,$brandname);
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






