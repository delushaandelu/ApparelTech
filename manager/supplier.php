<?php

    class Supplier{

        var $supplier_id = '';
        var $name = '';
        var $address = '';
        var $email = '';
        var $tele = '';

        public function addSupplier(){
            require("database_connection.php");

            $supplier_id = $_POST["supplier_id"];
            $name = $_POST["name"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            $tele = $_POST["tele"];

            $sqlinsert = "INSERT INTO supplier(supplier_id, name, email, address ) VALUES('" . $supplier_id . "','" . $name . "','" . $email . "','" . $address  . "')";
            $result = mysqli_query($dbcon, $sqlinsert);
            if (!$result) {
                echo "error";
            }
            $sqlinsert1 = "INSERT INTO suppliercontact(contactNumber) VALUES('" . $tele . "')";
            $result1 = mysqli_query($dbcon, $sqlinsert1);
            if (!$result1) {
                echo "error";
            }
        }
    }

?>
         