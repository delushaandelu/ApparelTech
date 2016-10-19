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
    <td>invoice date</td>
    <td><input type="date" name="date"></td></br>
    <td>Due date</td>
    <td><input type="date" name="Ddate"></td>
    </tr></br></br>
    </table>    
    </form>
    </div>
    <div id="itemdiv">
    <form method="post" action="invoicepdf.php">
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
   <td><input type="text" name="itemname" >
        </input> <input type="button" id="add_item()" onclick="addItem()" value="+"/></td><td><input type="text" name="quantity" id="a"></td><td><input type="text" name="discount" id="d" onkeyup="add()"></td><td><input type="text" name="rate" id="b"></td><td><input type="text" name="amount" id="c"/></td> </tr> </div>
        
    <tr>
        <td> <input type="submit" value="pdf" name="submit"></td>
        <td><input type="submit" value="Send email"/></td>
    </tr>
        
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
        div.innerHTML='<tr>'+'<td><input type="text" name="itemname"><input type="button" id="add_item()" onClick="addItem()" value="+"/>   <input type="button" value="-" onClick="removeItem(this)"></td>'+'<td><input type="text" name="quantity" id="a"></td>'+'<td><input type="text" name="discount" id="d" onkeyup="add()"></td>'+'<td><input type="text" name="rate" id="b"></td>'+'<td> <input type="text" name="amount" id="c"/></td>'+'</tr>';
        document.getElementById('items').appendChild(div);
    }

    function removeItem(div){
        document.getElementById('items').removeChild(div.parentNode);
        i--;
    }
 
</script>

<script>
function add() {
  var x = parseInt(document.getElementById("a").value);
  var y = parseInt(document.getElementById("b").value);
    var z = parseInt(document.getElementById("d").value);
  document.getElementById("c").value = x * y - z;
}
</script>   
Enter 1st Number :
<input type="text" id="a">
<br>
<br>Enter 2nd Number :
<input type="text" id="b" >
<br>
Enter 1st Number :
<input type="text" id="d" onkeyup="add()">
<br>Result :
<input type="text" id="c">    
    
    
    
    

        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>
