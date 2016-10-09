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
        ?>

                <ul class="breadcrumb">
                    <h2>Page Heading here!</li></h2>
                </ul>
    <div>
    <form>
    <table class="table table-hover"  height="100px">
        <tr>
        <td>invoice no</td>
        <td><input type="text" class="form-control" name="inv_no" id="inv_no" class="form-control"/></td>
        <td></td>
        <td></td>
        <td>date</td>
        <td><input type="date" class="form-control" name="inv_date" id="inv_date"  class="form-control"/></td>
        </tr>
       
        
    </table>    
        
    </form>
    
    </div>

    <div>
        <form>
            <table class="table table-bordered table-hover">
                <thead>
                    <th>No</th> 
                    <th>productName</th>    
                    <th>quantity</th>
                    <th>price</th>
                    <th>discount</th>
                    <th>amount</th>        
                    <th><input type="button" onclick="addnewrow()" value="+" id="add" class="btn btn-primary"/></th>
                </thead>
                <tbody id="detail">
                <tr>
                    <td class="no">1</td>
                    <td><input type="text" class="form-control productname" name="productname[]"</td>
                    <td><input type="text" class="form-control quantity" name="quantity[]"</td>
                    <td><input type="text" class="form-control price" name="price[]"</td>  
                    <td><input type="text" class="form-control discount" name="discount[]"</td>
                    <td><input type="text" class="form-control amount" name="amount[]"</td>
                    <td><a href="#" class="remove">Delete</td>
                </tr>    
                </tbody>
                <tfoot>
                    <tr>
                    <td></td>
        <td><input type="submit" value="Send email"/></td>
                    </tr>
                
                </tfoot>
        </table>    
    </form>
</div>
    
    
<script type="text/javascript">
       $(function(){
    
   $('body').delegate('.remove','click',function(){
      $(this).parent().parent().remove(); 
   });
        
   /*  $('.detail').delegate('.quantity','price',,'keyup',function(){
      var tr=$(this).parent().parent();
        var qty=tr.find('.quantity').val();
       var price=tr.find('.price').val();  
        var amt=qty*price;
         tr.find('.amount').val(amt);
   });*/
    });
    
    
    function addnewrow()
        {
            var n =($('.detail tr').length-0)+1;
            var tr = '<tr>'+
    '<td class="no">'+n+'</td>'+
    '<td><input type="text" class="form-control productname" name="productname[]"</td>'+
    '<td><input type="text" class="form-control quantity" name="quantity[]"</td>'+
    '<td><input type="text" class="form-control price" name="price[]"</td>'+  
    '<td><input type="text" class="form-control discount" name="discount[]"</td>'+
    '<td><input type="text" class="form-control amount" name="amount[]"</td>'+
    '<td><a href="#" class="remove">Delete</td>'+
    '</tr> ';
    
    $('#detail').append(tr);
    }
</script>
    
    
  <div id="pdf">
        <form method="post" action="invoicepdf.php">
        <input type="submit" value="pdf"></form>
</div>
     
    
    
    
    
    
    
    
    
    
    
    
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>
