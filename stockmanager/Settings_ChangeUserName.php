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
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






