<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>
          <link rel="stylesheet" type="text/css" href="datepicker/css/datepicker.css">
        <link rel="stylesheet" type="text/css" href="invoice.css">
        <script src="datepicker/js/bootstrap-datepicker.js"></script>
       
            <script src="//code.jquery.com/jquery-1.12.0.min.js">  
        </script>  
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js">  
            </script>  
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
        
        
        
    </head>
    <body>
         <?php
            include("../config/stockmgrmenu.php");
        ?>
       <form action="invoicepdf.php" method="post">  
                    <div class="box box-primary">  
                        <div class="box-header">  
                            <h3 class="box-title">Invoice </h3>  
                        </div>  
                        <div class="box-body">  
                            <table id="top-table" >
                            <tr>
                            <td>Invoice No</td>
                            <td><input type="text" name="invoiceno" class="form-control"></td>
                            <td>Invoice Date</td>
                            <td><input type="date" name="invoicedate" class="form-control"></td>
                            </tr>
                            <tr>
                            <td>Customer</td>
                            <td><input type="text" name="customer" class="form-control"></td>
                            <td>Due Date</td>
                            <td><input type="date" name="duedate" class="form-control"></td>
                            </tr>
                            </table>
                        </div>  
                        
                    </div><br/>  
                    <table class="table table-bordered table-hover">  
                        <thead>  
                            <th>No</th>  
                            <th>Product Name</th>  
                            <th>Quantity</th>  
                            <th>Price</th>  
                            <th>Discount</th>  
                            <th>Amount</th>  
                            <th><input type="button" value="+" id="add" class="btnbtn-primary"></th>  
                        </thead>  
                        <tbody class="detail">  
                            <tr>  
                                <td class="no">1</td>  
                                <td><input type="text" class="form-control productname" name="productname[]"></td>  
                                <td><input type="text" class="form-control quantity" name="quantity[]"></td>  
                                <td><input type="text" class="form-control price" name="price[]"></td>  
                                <td><input type="text" class="form-control discount" name="discount[]"></td>  
                                <td><input type="text" class="form-control amount" name="amount[]"></td>  
                                <td><a href="#" class="remove">Delete</td>  
</tr>  
</tbody>  
<tfoot>  
<th>Sub Total</th>
<th style="text-align:center;" class="total">0<b></b></th>  

    <th><input type="submit" value="pdf" name="submit">
    <input type="submit" value="Send email"/></th>
 
</tfoot>  
  
</table>  
</form>  
</body>  
</html>  
<script type="text/javascript">  
$(function()  
{  
$('#add').click(function()  
{  
addnewrow();  
});  
$('body').delegate('.remove','click',function()  
{  
$(this).parent().parent().remove();  
});  
$('body').delegate('.quantity,.price,.discount','keyup',function()  
{  
var tr=$(this).parent().parent();  
var qty=tr.find('.quantity').val();  
var price=tr.find('.price').val();  
  
var dis=tr.find('.discount').val();  
var amt =(qty * price)-dis;  
tr.find('.amount').val(amt);  
total();  
});  
});  
function total()  
{  
var t=0;  
$('.amount').each(function(i,e)   
{  
var amt =$(this).val()-0;  
t += amt;  
});  
$('.total').html(t);  
}  
function addnewrow()   
{  
var n=($('.detail tr').length-0)+1;  
var tr = '<tr>'+  
'<td class="no">'+n+'</td>'+  
'<td><input type="text" class="form-control productname" name="productname[]"></td>'+  
'<td><input type="text" class="form-control quantity" name="quantity[]"></td>'+  
'<td><input type="text" class="form-control price" name="price[]"></td>'+  
'<td><input type="text" class="form-control discount" name="discount[]"></td>'+  
'<td><input type="text" class="form-control amount" name="amount[]"></td>'+  
'<td><a href="#" class="remove">Delete</td>'+  
'</tr>';  
$('.detail').append(tr);   
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
