<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
<div id="page-wrap">	
	<link rel='stylesheet' type='text/css' href='css/invoice_css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/invoice_css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
     <link rel="stylesheet" type="text/css" href="invoice1.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/>
        
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js">  
        </script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   
        
</head>

<body>
    <!--invoice print function ------------------------------->
    
    <script>
    function printPageArea(areaID){
	var printContent = document.getElementById(areaID);
	var WinPrint = window.open('', '', 'width=2000,height=850');
	WinPrint.document.write(printContent.innerHTML);
	WinPrint.document.close();
	WinPrint.focus();
	WinPrint.print();
	WinPrint.close();
}
</script>
    <!--------------------------------------->
    <?php
    require("database_connection.php");   //connecting to database
    ?>
	
    
<!---------------------- INVOICE ----------------------------------->
    
		<textarea id="header">INVOICE</textarea>
        
		
		<div id="identity">
		<?php
            if(!empty($_GET['ID']) && !empty($_GET['customer_id']) ){
                $cusid=$_GET['customer_id'];
                $sql1="select address from customer where customer_id=$cusid";
                $result1=mysqli_query($dbcon,$sql1);
                $row=mysqli_fetch_assoc($result1);?>
            <textarea id="address">
                <?php  echo $row['address']; ?>
</textarea>
        <?php    }?>
            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="img/logo.png" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <textarea id="customer-title">Priyantha Enterprice</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">December 15, 2009</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  <?php
            if(!empty($_GET['ID']) && !empty($_GET['customer_id']) ){
                         
            $id = $_GET['ID'];
            $sql="select product_id,itemName,brand,quantity,sellingPrice from item,order_items where item.item_id=order_items.product_id && order_id=$id";
            $result=mysqli_query($dbcon,$sql);
            if(!$result){
                echo "errorrrrr";
            }
            while($row=mysqli_fetch_assoc($result)){?>
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea><?php echo $row['itemName'] ?></textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>item description here </textarea></td>
		      <td><textarea class="cost"><?php echo $row['sellingPrice'] ?></textarea></td>
		      <td><textarea class="qty"><?php echo $row['quantity'] ?></textarea></td>
		      <td><span class="price">$650.00</span></td>
		  </tr>
		  <?php	}}?>
		  
		  
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$875.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$875.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Discount</td>

		      <td class="total-value"><textarea id="paid">$0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$875.00</div></td>
		  </tr>
	
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>
	
	</div>
<!----------------- INVOICE END -------------------------------------->
    
    
<!----------------- EMAIL display ------------------------------------>
    
    <div id="dialog" style="display: none" align = "center">
    <form method="post" action="?">
        <table width="350px" height="300px" border="0">
        <tr>
            <td>To:</td>
            <td><input type="text" name="name" class="form-control"/></td>
        </tr>
         <tr>
            <td>Subject:</td>
            <td><input type="text" name="subject" class="form-control"/></td>
        </tr>
        <tr>
            <td>Message:</td>
            <td><textarea name="message" placeholder="write here !" class="form-control" ></textarea></td>
        </tr>
        <tr>
            <td>file:</td>
            <td><input type="file" name="invoice/>" class="form-control"</td>
        </tr>  
        <tr>
            
            <td colspan="2"><center><input type="submit" name="mailBtn" value="Send" style="width: 130px;background-color:#A9A9A9;border:none;color: #fff;"/></center></td>
        </tr>
            
        
        </table>
    </form>
</div>
    
  <?php
                        if(isset($_POST['mailBtn'])){
                            $to = $_POST['name'];
                            $subject = $_POST['subject'];
                            $message = $_POST['message'];
                             $headers = 'From: Appareltech@priyantha.com' . "\r\n" .
                            'Reply-To: Appareltech@priyantha.com' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

                            mail($to, $subject, $message, $headers);
                        }

                        ?>
 
<!-------------------- email end ---------------------------------------------->
    
 <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>  
        
    
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>  
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    
<!--------------------email function -------------------------->
  </script>
            <script type="text/javascript">
                $(function () {
                    $("#dialog").dialog({
                        modal: true,
                        autoOpen: false,
                        title: "Send Email",
                        display: "block",
                        width: 400,
                        height: 400,
                    });
                    $("#btnShow").click(function () {
                        $('#dialog').dialog('open');
                    });
                });
            </script>  
    
    
    
	 <a href="javascript:void(0);" id="print_button2" style="width: 130px; padding: 5px 8px 5px 8px;text-align: center;float: right;background-color:#1caf9a;color: #fff;text-decoration: none; margin: 10px;" onclick="printPageArea('page-wrap')">Print Invoice</a>
    <input type="button" id="btnShow" value="Send Email" style="width: 130px; padding: 5px 8px 5px 8px;text-align: center;float: left;border:none;background-color:#1caf9a;color: #fff;" />
</body>

</html>