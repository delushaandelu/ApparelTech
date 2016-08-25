<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>                        
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
        ?>

                <ul class="breadcrumb">
                    <h2>Page Heading here!</li></h2>
                </ul>

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

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






