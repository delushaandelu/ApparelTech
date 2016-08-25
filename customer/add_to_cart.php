<?php
// connect to database
include 'config/database.php';
 
// product details
$id = isset($_GET['id']) ?  $_GET['id'] : die;
$name = isset($_GET['name']) ?  $_GET['name'] : die;
$quantity  = isset($_GET['quantity']) ?  $_GET['quantity'] : die;
$user_id=1;
$created=date('Y-m-d H:i:s');
 
// insert query
$query = "INSERT INTO cart_items SET product_id=?, quantity=?, user_id=?, created=?";
 
// prepare query
$stmt = $con->prepare($query);
 
// bind values
$stmt->bindParam(1, $id);
$stmt->bindParam(2, $quantity);
$stmt->bindParam(3, $user_id);
$stmt->bindParam(4, $created);
 
// if database insert succeeded
if($stmt->execute()){
    header('Location: products.php?action=added&id=' . $id . '&name=' . $name);
}
 
// if database insert failed
else{
     header('Location: products.php?action=failed&id=' . $id . '&name=' . $name);
}
 
?>