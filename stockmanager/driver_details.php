
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" href="designs/template1.css" type="text/css" />
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="js/sweetalert.css">
         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>
    </head>

        
<?php
     include("../config/stockmgrmenu.php");      //include stock manager menu
 ?>

<ul class="breadcrumb">
    <h4>Driver Details</li></h4>
</ul>
<div class = "panel">
        
<style type="text/css">
     
    #driverdisplaytb{         
        margin-top:10%;
        margin-left: 30%;      
        width: 500px;
        height: 400px;
        }
    #btndriver{
        color: white;
        width:200px;
        height:40px;
        }    
            
</style>
</head>
    <body>

</br></br>

<div id="content">
 
        <table class="table datatable">   <!--driver details table -->
            <tr class='success'>
                <th><center>driver_id</center></th>
                <th><center>driverName</center></th>
                <th><center>LicenceNo</center></th>
                <th><center>driverAddress</center></th>
                <th><center>Mobile No</center></th>
                <th><center>vehicle_id</center></th>
                <center><th colspan="2"><center>Action</center></th></center></tr>
                <?php 
                    $sql = "select * from driver";
                    $result = mysqli_query($dbcon,$sql);        
                        while($row = mysqli_fetch_array($result)) {
    
                ?>
                            <tr class="active">
                            <td><center><?php echo $row['driver_id'] ?></center></td>
                            <td><center><?php echo $row['driverName'] ?></center></td>
                            <td><center><?php echo $row['LicenceNo'] ?></center></td>
                            <td><center><?php echo $row['driverAddress'] ?></center></td>
                            <td><center><?php echo $row['mobileNo'] ?></center></td>
                            <td><center><?php echo $row['vechicle_id'] ?></center></td>
                                <td class="bt"><center><button type="button" class="btn btn-danger" name="Delete" onclick="location.href='driver_details.php?driver_id=<?php echo $row['driver_id']?> & vehicle_id=<?php echo $row['vechicle_id'] ?>'"><i class="fa fa-trash" ></i> Delete</button></center></td>
                                <td class="bt"><center><button type="button" class="btn" name="Update" onclick="location.href='driver_details_updateDriver.php?ID=<?php echo $row['driver_id'] ?>'" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button></center></td>
                            </tr>
                
                <?php } ?>
            <tr>
            <td colspan="7"><center><a href="driver_details_addDriver.php"><button id="btndriver" class="btn">Add Driver</button></a></center>  </td>
            </tr>
        </table>
    <!-----------------------END TABLE------------------- -->
                <?php
       
                    if(!empty($_GET['driver_id']) && !empty($_GET['vehicle_id']) ){
            
                        $vehicle_id=$_GET['vehicle_id'];
                        $id = $_GET['driver_id'];
                        $sql= "delete from driver where driver_id = '$id'";
                        $result=mysqli_query($dbcon,$sql);
                            if($result){
                                echo'<script language ="javascript">';
                                echo"swal({  title: 'Driver Deleted!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='driver_details.php'});";
                                echo'</script>'; }
            
                        $sqlupdate="UPDATE vehicle SET status=0 WHERE vehicle_id=$vehicle_id ";
                        mysqli_query($dbcon,$sqlupdate);
                    }
    
                ?>
</div>
<div id="bottomdriver">
    
</div>
       
<div id="footer">
    
</div>


</div>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>





