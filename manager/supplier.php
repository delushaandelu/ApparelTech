<?php
    class supplier{
        var $supplierID="";
        var $supplierName="";
        var $Email="";
        var $Address="";
        var $Telephone="";
        
        public function addSupplier($supplierID, $supplierName, $Email, $Address, $Telephone){
            include ('database.php');
            
            $supplierID = $supplierID;
            $supplierName = $supplierName;
            $Email = $Email;
            $Address = $Address;
            $Telephone = $Telephone;
            
            $sqlInsert = "INSERT INTO supplier (supplier_id, name, email, address) VALUES ('$supplierID', '$supplierName', '$Email', '$Address')";
            $sqlInsertTel = "INSERT INTO suppliercontact(supplier_id, contactNumber) VALUES ('$supplierID','$Telephone')";


            if(!mysqli_query($conn, $sqlInsert)){
                die('Error occurs while inserting new record');
            }
            elseif (!mysqli_query($conn, $sqlInsertTel)){
                die('Error occurs while inserting new record');
            }
            mysqli_close($conn);
        }

    }
?>

