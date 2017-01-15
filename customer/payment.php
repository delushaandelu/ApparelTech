<?php
session_start();
//Set useful variables for paypal form
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_id = 'info@delushaan.com'; //Business Email

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products - Delushaan</title>
</head>
<body>

    <form action="<?php echo $paypal_url; ?>" method="post">

        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <?php
            include('dbConfig.php');
            $id = $_GET['p_id'];
            $c_id = $_SESSION['csid'];
            $name = $_SESSION['fname'];
            $sql = "SELECT * FROM rentorders where id=$id ";
            $result = $db->query($sql);

            while($row = $result->fetch_assoc()) {
                $order = $row['id'];
                $amount = $row['total_price'];
        
                ?>              

        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo 'C_ID -'. $c_id.'-'.$name ?>">
        <input type="hidden" name="item_number" value="<?php echo 'Rent Order No'.$order?>">
        <input type="hidden" name="amount" value="<?php echo $amount ?>">
        <input type="hidden" name="currency_code" value="USD">
        <?php
            }
        ?>
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/cancel.php'>
		<input type='hidden' name='return' value='http://localhost/paypal_integration_php/success.php'>
        
        <!-- Display the payment button. -->
        <div 
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    
    </form>
</body>
</html>
