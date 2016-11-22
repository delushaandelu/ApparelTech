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
<div class="panel-body">
                <div class="manage_delivery_table">
                    
                </div>
                
                <div class="manage_delivery_middle_part">
                     <h3 align="center"> Delivery Note</h3>
                </div>
               
                <div class="manage_delivery_form">
                    
                        <form method="post">
                            <table border="0">
                                  
                                  <tr>
                                    <td id="table_font" width="70%">
                                        Note ID
                                    </td> 
                                    
                                    <td>
                                        <input type="text" class="form-control" name="noteid"><br><br>
                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <td id="table_font" width="70%">
                                        Purchase Order ID
                                    </td> 
                                        
                                    <td>
                                        <select>
                                            <option value="volvo">sgrewr</option>
                                            <option value="saab">dger</option>
             
                                        </select><br><br>
                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <td id="table_font" width="70%">
                                        Date
                                    </td> 
                                    
                                    <td>
                                        <input type="text" class="form-control"  name="date"><br><br>
                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <td id="table_font" width="70%">
                                        Note
                                    </td> 
                                    
                                    <td>
                                        <input type="text" class="form-control"  name="note"><br><br>
                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <td id="table_font" width="70%">
                                        Address
                                    </td>
                                  </tr>
                                  
                                 <tr>
                                    <td id="table_font" width="70%">
                                        Line 1
                                    </td> 
                                    
                                    <td>
                                        <input type="text" class="form-control" name="line1"><br><br>
                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <td id="table_font" width="70%">
                                        Line 2
                                    </td> 
                                    
                                    <td>
                                        <input type="text" class="form-control"  name="line2"><br><br>
                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <td id="table_font" width="70%">
                                        City
                                    </td> 
                                    
                                    <td>
                                        <input type="text" class="form-control"  name="city"><br><br>
                                    </td>
                                  </tr>
                                  
                                  <tr>
                                    <td id="table_font" width="70%">
                                        Driver
                                    </td> 
                                    
                                    <td>
                                        <select>
                                            <option value="volvo">sgrewr</option>
                                            <option value="saab">dger</option>
             
                                        </select><br><br>
                                    </td>
                                  </tr>
                                  
                                   <tr>
                                    <td id="table_font" width="70%">
                                        Vehicle
                                    </td> 
                                        
                                    <td>
                                        <select>
                                            <option value="volvo">sgrewr</option>
                                            <option value="saab">dger</option>
             
                                        </select><br><br>
                                    </td>
                                  </tr>
                                  
                                  
                                </table>
                                
                               
                        </form>
                </div>
                
                <div class="manage_delivery_button_section">
                    <form method="post">
                         <button type="button" id="button_effect" >Approve</button>
                        
                         <button type="button" id="button_effect">Reject</button>
                    </form>
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






