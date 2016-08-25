<?php
    class supplier{
        var $supplierid="";
        var $suppliername="";
        var $Email="";
        var $Address="";
        var $Telephone="";
        
        public function addSupplier($supplierid, $suppliername, $Email, $Address, $Telephone){
            include ('../manager/database.php');
            
            $supplierid = $supplierid;
            $suppliername = $suppliername;
            $Email = $Email;
            $Address = $Address;
            $Telephone = $Telephone;
            
            $sqlInsert = "INSERT INTO supplier (supplier_id, name, email, address) VALUES ('$supplierid', '$suppliername', '$Email', '$Address')";
            $sqlInserttel = "INSERT INTO suppliercontact(supplier_id, contactNumber) VALUES ('$supplierid','$Telephone')";


            if(!mysqli_query($conn, $sqlInsert)){
                die('Error occurs while inserting new record');
            }
            elseif (!mysqli_query($conn, $sqlInserttel)){
                die('Error occurs while inserting new record');
            }
            mysqli_close($conn);
        }

    }
?>

