<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Theme</title>
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="designs/template.css" type="text/css" />
    <link rel="stylesheet" href="../config/design/css/theme.css" type="text/css">
    <?php
        include ("../config/headermanager.html");
    ?>
</head>
<body>
</br></br>
<div id ="lol"</div>
<div id="main">
<div id="header">
        <img src="images/Managing.jpg">
    </div>

<div id="menu">
  			<h2>
            	<font color="white" size="+1">Manage Supplier</font>
            </h2>
    </div>

    <div id="content">
		<div id="top">
        	<div id="top-left">
            	<form method="post">
                	<table border="0">
                    	<tr></tr>
                        <tr>
                        	<td id="table-font" width="60%">
                            	Supplier ID
                            </td>
                            <td>
                            	<input type="text" name="Supplier ID" class="form-control">
								<br><br>
                            </td>
						</tr>
                        <tr>
                       	  <td id="table-font" width="60%">
                            	Supplier name
							</td>
                            <td>
                            	<input type="text" name="Supplier name" class="form-control">
								<br><br>
                            </td>
                        </tr>
                         <tr>
                       	   <td id="table-font" width="60%">
                            	Location							
                            </td>
                            <td>
                            	<input type="text" name="Location" class="form-control">
								<br><br>
                           </td>
                         </tr>
                         <tr>
                         	<td id="table_font" width="60%">
								Contact
							</td> 
                                         
							<td>
								<br><br>
							</td>
                        </tr>
                                    
						  <tr>
                                        
							<td id="table_font" width="60%" align="right">
								Telephone                            
							</td> 
                                         
							<td>
								<input type="tel" name="Telephone" class="form-control">
								<br><br>
							</td>
						  </tr>
                          <tr>
                                        
							<td id="table_font" width="60%" align="left">
								                     Mobile                           
							</td> 
                                         
							<td>
								<input type="tel" name="Mobile" class="form-control">
								<br><br>
							</td>
						  </tr>
						  <tr>
                        	<td id="table-font" width="60%">
                            	Address
							</td>
                            <td><textarea name="Address" rows="3" class="form-control"></textarea>
                              <br><br>
 						    </td>
						  </tr>
                          <tr>
                       	   <td id="table-font" width="60%">
                            	e-mail address							
                            </td>
                            <td>
                            	<input type="email" name="e-mail address" class="form-control">
								<br><br>
                           </td>
                         </tr>
                         <tr>
                       	   <td id="table-font" width="60%">
                            	Item type						
                            </td>
                            <td>
                            	<input type="text" name="Item type" class="form-control">
								<br><br>
                           </td>
                         </tr>
                         
                        </table>
                     </form>
                  </div>
                  <div id="top-right">
                            <form>
                            	  <tr>
                           			 <td>

                            			<input type="text" name="Search by id" placeholder="Search by ID" class="form-control"><br><br>

                           			</td>
                         	      </tr>
									<button type="button" id="button" class="btn btn-default btn-lg active">Search</button>
									<br><br>
                                 	<button type="button" id="button" class="btn btn-default btn-lg active">Delete</button>
									<br><br>
                                 	<button type="button" id="button" class="btn btn-default btn-lg active">Update</button>
									<br><br>
                                 	<button type="button" id="button" class="btn btn-default btn-lg active">Clear</button>
									<br><br>
									<button type="button" id="button" class="btn btn-default btn-lg active">Refresh</button>
                            </form>
                        
				  </div>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
    </div>
    <div id="footer"></div>
</div>
</body>
</html>
