<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Theme</title>
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <link rel="stylesheet" href="../config/design/css/theme.css" type="text/css">
    <?php
        include ("../config/headerstock.html");
    ?>
</head>
<body>

</br></br>
<div id ="lol"></div>
<div id="main">
    <div id="header">
        <img src="images/background-image2-1600x743.jpg">
    </div>
	<div class = "panel">
    	<div class="panel-heading"> Vehicle Details </div>
        	<div class="panel-body">
    			<div id="content">
  
					<div id ="top_section">
            
                        <div id = "top_left_section">
                            <form method="post">
                                <table border="0" >
                                    <tr></tr>
                                    <tr>
                                        
                                        <td id="table_font"  width="60%"> 
                                            Vehicle Type   
                                        </td> 
                                        
                                        <td>
                                            <input type="text" class="form-control" name="vehicletype"><br><br> 
              
                                        </td>
                                            
                                            
                                         
                                    </tr>
                                    <tr>
                                        
                                        <td id="table_font" width="55%">
                                            Vehicle ID
                                        </td> 
                                        
                                        <td>
                                            <input type="text" class="form-control" name="vehicleid"><br><br>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        
                                        <td id="table_font"  width="55%">
                                            Vehicle No
                                        </td> 
                                          
                                        <td>
                                            <input type="text" class="form-control" name="vehicleno"><br><br>
                                        </td>
                                    </tr>
                                    
                                   <tr>
                                        
                                        <td id="table_font"  width="55%">
                                            Capacity
                                        </td> 
                                          
                                        <td>
                                            <input type="text" class="form-control"  name="capacity"><br><br>
                                        </td>
                                    </tr>
                                    
                                  
                                </table> 
                             </form>
                        </div>
                        
                        <div id="top_right_section">
                            <form>
                                 <button type="button" id="button_effect">Search</button> <br><br>
                                 <button type="button" id="button_effect">Delete</button> <br><br>
                                 <button type="button" id="button_effect">Update</button> <br><br>
                                 <button type="button" id="button_effect">Clear</button> <br><br>
                                 <button type="button" id="button_effect">Refresh</button>
                            </form>
                        
                        </div>
                    </div>
         	
					<div id="below_section">
        				<p>**********php table</p>
            
        			</div>
    			</div>
   			 </div>
    </div>
        

    
    <div id="footer"></div>
</div>
</div>
</body>
</html>