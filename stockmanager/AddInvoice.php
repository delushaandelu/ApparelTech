<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>    
        <link rel="stylesheet" type="text/css" href="datepicker/css/datepicker.css">
        <script src="datepicker/js/bootstrap-datepicker.js"></script>
        
    </head>
    <body>
        
        <?php
            include("../config/stockmgrmenu.php");
             require("database_connection.php");   
        ?>

                <ul class="breadcrumb">
                    <h2>Add invoice!</li></h2>
                </ul>
    
 
    <div id="invoicediv">
    <form>
    <table border="0" width="1000px" height="100px">
    <tr>
    <td>Order_ID</td>
    <td><input type="text" name="id"></td></br>
    <td>Customer</td>
    <td><input type="text" name="customer"></td>
    <td>onvoice date</td>
    <td><input type="text" name="customer"></td></br>
    <td>Due date</td>
    <td><input class="datepicker" type="text" name="date"></td>
    </tr></br></br>
    </table>    
    </form>
    </div>
    <div id="itemdiv">
    <form>
    <table class="table table-bordered table-hover">
    <tr>
    <th>item</th>
    <th>quantity</th>
    <th>discount</th>
    <th>rate</th>
    <th>amount</th>
    </tr>
    <div id="items"> 
    <tr>
   <td><input type="text" name="item_1" >
        </input> <input type="button" id="add_item()" onclick="addItem()" value="+"/></td><td><input type="text" name="quantity"></td><td><input type="text" name="discount"></td><td><input type="text" name="rate"></td><td><input type="text" name="amount"/></td> </tr> </div>
        
    
        
    </table>    
    </form>
    </div>
        <script type="text/javascript">
            $(function () {
                $('.datetimepicker').datepicker();
            });
        </script>
  

<script type="text/javascript">
var i=1;
function addItem(){
        i++;
        var div=document.createElement('div');
        div.innerHTML='<tr>'+'<td><input type="text" name="item_'+i+'"><input type="button" id="add_item()" onClick="addItem()" value="+"/>   <input type="button" value="-" onClick="removeItem(this)"></td>'+'<td><input type="text" name="quantity"></td>'+'<td><input type="text" name="discount"></td>'+'<td><input type="text" name="rate"></td>'+'<td> <input type="text" name="amount"/></td>'+'</tr>';
        document.getElementById('items').appendChild(div);
    }

    function removeItem(div){
        document.getElementById('items').removeChild(div.parentNode);
        i--;
    }
 
</script>

    
    
    
    
    
    

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>
