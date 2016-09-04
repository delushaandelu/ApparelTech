<html>
<head>
   
    </head>

<body>

<?php
/**
 * User: Chamrith
 * Date: 8/11/2016
 * Time: 12:13 PM
 */
class Vehicle{

    
    var $VehicleType='';
    var $VehicleNumber='';
    var $Capacity='';
    var $Status='';
   

    public function addVehicle(){
       
  
        require("database_connection.php");          //connecting to databse
       
        $VehicleNumber = $_POST["vehiclenumber"];
        $Capacity=$_POST["vehiclecapacity"];
        $VehicleType = $_POST["vehicletype"];
        $Status=$_POST["status"];
        
        if(!empty($VehicleNumber) && !empty($Capacity)){
        $sqlinsert="INSERT INTO vehicle(vehicleNo,capacity,vehicleType,status)VALUES('".$VehicleNumber."','".$Capacity."','".$VehicleType."','".$Status."')";
        $result=mysqli_query($dbcon,$sqlinsert);
        
        if($result){
        echo'<script language ="javascript">';
            echo'alert("Vehicle inserted succesfully")';
        echo'</script>'; 
        }
        
        echo'<script language ="javascript">';
            echo'alert("Error")';
        echo'</script>'; }
        
        else{
             echo'<script language ="javascript">';
                echo'alert("All fields shoud be filled.")';
            echo'</script>'; 
        }
  
       
    }
         
}
    

?>

    </body>
</html>