<?php
/**
 * Created by PhpStorm.
 * User: Chamrith
 * Date: 8/11/2016
 * Time: 12:13 PM
 */
require("database_connection.php");
Class Driver{

    var $diverid;
    var $drivername;
    var $licencenumber;
    var $address;
    var $vehicleid;
    var $mobile1;
    var $mobile2;

    public function insert(){
        //require("database_connection.php");
        $drivername = $_POST["drivername"];
        $licencenumber = $_POST["licencenumber"];
        $address=$_POST["address"];
        $vehicleid=$_POST["vehicleid"];

        $sqlinsert="INSERT INTO driver(driverName,LicenceNo,driverAddress,vehicle_id) VALUES('".$drivername."','".$licencenumber."','".$address."','".$vehicleid."')";
        if(mysqli_query($dbcon,$sqlinsert)){
            die();
        } else{
            echo "error";
        }
            



        }





}
?>