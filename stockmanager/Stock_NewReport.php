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

    
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>

<ul class="breadcrumb">
     <h4>Manage Stock</h4>
</ul>
<div class="panel" >
        
        	
           </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                 
                	<div class="upper_panel_manage_stock">
                        <div id="btn" class="btn-lg">
                            
                            <div class="col-md-6">                           
                            <button onclick="location.href = 'Stock_NewReport_DataReport.php';" id="btnManageStockAddNew" class="btn-lg btn-block" ><h4>Data Report</h4></button>
                           
                            </br>
                            
                            <button onclick="location.href = 'Stock_NewReport_GraphReport.php';" id="btnManageStockAddToExisting" class=" btn-lg btn-block" ><h4>Graphical Report</h4></button>
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






