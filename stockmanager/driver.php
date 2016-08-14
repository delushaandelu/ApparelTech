<html>
<head>
   
    </head>

<body>

<?php
/**
 * Created by PhpStorm.
 * User: Chamrith
 * Date: 8/11/2016
 * Time: 12:13 PM
 */
//require("database_connection.php");
class Driver{

    
    var $DriverName='';
    var $LicenceNumber='';
    var $Address='';
    var $VehicleId='';
    var $Mobile1='';
    var $Mobile2='';

    public function addDriver(){
        require("database_connection.php");
        $DriverName = $_POST["drivername"];
        $LicenceNumber = $_POST["licencenumber"];
        $Address=$_POST["address"];
        $VehicleId=$_POST["vehicleid"];
        $Mobile1=$_POST["mobile1"];
        //$Mobile2=$_POST["mobile2"];

        $sqlinsert="INSERT INTO driver(driverName,LicenceNo,driverAddress,vehicleid) VALUES('".$DriverName."','".$LicenceNumber."','".$Address."','".$VehicleId."')";
        if(mysqli_query($dbcon,$sqlinsert)){
        echo "error";}
       $sqlinsert1="INSERT INTO drivercontact(contactNo) VALUES('".$Mobile1."')";
        if(mysqli_query($dbcon,$sqlinsert1)){
            die();
        } else{
            echo "error";}
         }
    
    public function searchDriver(){
         require("database_connection.php");
        $DriverID=$_POST["driverid"];
        $sqlsearch="SELECT * FROM driver WHERE driver_id='$DriverID'";
    
        $result=mysqli_query($dbcon,$sqlsearch);
        
        if(!$result){
        echo "error";}
        echo"<table>";
    echo"<tr>";
         echo"<th>".'DriverID'."</th>";
        echo"<th>" .'DriverName'."</th>";
        echo"<th>" .'Address'."</th>";
    echo"<tr>";
    $i = 0;
    while ($row = mysqli_fetch_assoc($result) ){

        if ($i % 2 == 0) {
            $bgColor = ' style="background-color:#CCFFFF;" ';
        } else {
            $bgColor = ' style="background-color:#FFFF99;" ';
        }
        echo "<tr>";
            echo "<td $bgColor>";
            echo $row['driver_id'];
            echo "</td>";

            echo "<td $bgColor>";
            echo $row['driverName'];
            echo "</td>";
        
            echo "<td $bgColor>";
            echo $row['driverAddress'];
            echo "</td>";
        echo "</tr>";

        $i++;
    }
    
echo"</table>";
 
    }
    public function deleteDriver(){
        require("database_connection.php");
        $DriverID=$_POST["driverid"];
        $sqldelete = "DELETE FROM driver WHERE driver_id='$DriverID'";
         $result=mysqli_query($dbcon,$sqldelete);
        
        if(!$result){
        echo "error";}
        
    }





}
?>

    </body>
</html>