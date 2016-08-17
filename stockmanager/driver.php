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
//require("database_connection1.php");
class Driver{

    
    var $DriverName='';
    var $LicenceNumber='';
    var $Address='';
    var $VehicleId='';
    var $Mobile1='';
    var $Mobile2='';

    public function addDriver(){
        require("database_connection1.php");
        $DriverName = $_POST["drivername"];
        $LicenceNumber = $_POST["licencenumber"];
        $Address=$_POST["address"];
        $VehicleId=$_POST["vehicleid"];
        $Mobile1=$_POST["mobile1"];
        //$Mobile2=$_POST["mobile2"];

        $sqlinsert="INSERT INTO driver(driverName,LicenceNo,driverAddress,vehicleid) VALUES('".$DriverName."','".$LicenceNumber."','".$Address."','".$VehicleId."')";
        $result=mysqli_query($dbcon,$sqlinsert);
        if(!$result){
        echo "error";}
       $sqlinsert1="INSERT INTO drivercontact(contactNo) VALUES('".$Mobile1."')";
        $result1=mysqli_query($dbcon,$sqlinsert1);
        if(!$result1){
            echo "error";}
    }
         

   public function searchDriver(){
       require("database_connection1.php");
       $DriverId=$_POST["driverid"];
       $sqlsearch="SELECT * FROM driver WHERE driver_id='$DriverID'";
       $result=mysqli_query($dbcon,$sqlsearch);
       while($res=mysqli_fetch_array($result)){
        
           
       }
       
       
       
    }
        
    public function deleteDriver(){
        require("database_connection1.php");
        $DriverID=$_POST["driverid"];
        $sqldelete = "DELETE FROM driver WHERE driverdriver_id='$DriverID'";
         $result=mysqli_query($dbcon,$sqldelete);
        
        if(!$result){
        echo "error";}
        $sqldelete1="DELETE FROM drivercontact WHERE driver_id='$DriverID'";
         $result1=mysqli_query($dbcon,$sqldelete1);
        
        if(!$result1){
        echo "error";}
        
    }
    public function updateDriver(){
        require("database_connection1.php");
        $DriverID=$_POST["driverid"];
        $DriverName = $_POST["drivername"];
        /*$LicenceNumber = $_POST["licencenumber"];
        $Address=$_POST["address"];
        $VehicleId=$_POST["vehicleid"];
        $Mobile1=$_POST["mobile1"];*/
        $sqlupdate="UPDATE driver SET driverName='$DriverName' WHERE driver_id='$DriverID'";
        $result=mysqli_query($dbcon,$sqlupdate);
        
        if(!$result){
        echo "error";}
        /*$sqlupdate1="UPDATE drivercontact SET contactNo='$Mobile1' WHERE driver_id='$DriverID'";
        $result1=mysqli_query($dbcon,$sqlupdate1);
        
        if(!$result1){
        echo "error";}*/
        
        
        
        
        
    }




}
?>

    </body>
</html>