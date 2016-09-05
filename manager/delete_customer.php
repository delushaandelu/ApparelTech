<?php
/**
 * Created by PhpStorm.
 * User: MadharaUdagedara
 * Date: 04-Sep-16
 * Time: 4:17 PM
 */

 include('database_connection.php');

 if(isset($_POST['delete'])){
    if(isset($_POST['customer_id']) && !empty($_POST['customer_id'])){
        $customer_id = $_POST['customer_id'];
        echo "delete from customer where customer_id=".$customer_id;

        $sql= "DELETE FROM customer WHERE customer_id=".$customer_id;
        $result = mysqli_query($dbcon,$sql);

        if (mysqli_query($dbcon, $sql) === TRUE){
            header("ManageUser-Manage_Customer.php");
           }
        else{
        echo "<script>";
                echo "alert('ERROR: Check your information again!')";
                echo "</script>";
        }
     }
 }


 ?>