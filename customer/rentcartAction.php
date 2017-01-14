<?php
// initialize shopping cart class
include 'rentCart.php';
$cart = new Cart;

// include database configuration file
include 'dbConfig.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['item_id'])){
        $productID = $_REQUEST['item_id'];
        // get product details
        $query = $db->query("SELECT * FROM rent_item WHERE item_id = ".$productID);
        $row = $query->fetch_assoc();
        $itemData = array(
            'item_id' => $row['item_id'],
            'itemName' => $row['itemName'],
            'rentPrice' => $row['rentPrice'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'rentviewCart.php':'rentitem.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['item_id'])){
        $itemData = array(
            'rowid' => $_REQUEST['item_id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['item_id'])){
        $deleteItem = $cart->remove($_REQUEST['item_id']);
        header("Location: rentviewCart.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO rentorders (customer_id, total_price, created, modified) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
        
        if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO rent_order_items (order_id, product_id, quantity) VALUES ('".$orderID."', '".$item['item_id']."', '".$item['qty']."');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: rentorderSuccess.php?id=$orderID");
            }else{
                header("Location: rentcheckout.php");
            }
        }else{
            header("Location: rentcheckout.php");
        }
    }else{
        header("Location: rentitem.php");
    }
}else{
    header("Location: rentitem.php");
}