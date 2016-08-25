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
    	<div class="panel-heading"> Change Username</div>
        	<div class="panel-body">
    			<div id="content">
  
					<div id ="change_username_form">
            			<form method="post">
                        	<table border="0">
                            	<tr>
                                	<td id = "table_font" width="60%">
                                    	User Name
                                    </td>
                                    
                                    <td id = "table_font" width="60%"><br>

                                    	<input type="text" class="form-control" name="username">
                                    </td>
                                </tr>
                                
                                <tr>
                                	<td id = "table_font" width="60%">
                                    	New User Name
                                    </td>
                                    
                                    <td id = "table_font" width="60%"><br>

                                    	<input type="text" class="form-control" name="newusername">
                                    </td>
                                </tr>
                                
                                <tr>
                                	<td id = "table_font" width="60%">
                                    	Password
                                    </td>
                                    
                                    <td id = "table_font" width="60%"><br>

                                    	<input type="password" class="form-control" name="password">
                                    </td>
                                </tr>
                                
                                
                            </table>
                        </form>
                        
                        
                       
                    </div>
         	
					<div id="change_username_button_section">
        				<form>
                        	<button type="button" id="button_effect">Change</button>
                            <button type="button" id="button_effect">Clear</button>
                        </form>			
            
        			</div>
    			</div>
   			 </div>
    </div>
        

    
    <div id="footer"></div>
</div>
</div>
</body>
</html>
