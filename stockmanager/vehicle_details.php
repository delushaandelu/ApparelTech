
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Stock Manager</title>                   
        <link rel="stylesheet" type="text/css" id="theme" href="css/main.css"/> 
        <link rel="stylesheet" href="designs/template1.css" type="text/css" />
        <script src="js/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="js/sweetalert.css">
    
<?php
    include("../config/stockmgrmenu.php");
?>

<ul class="breadcrumb">
    <h4>Vehicle Details</li></h4>
</ul>
<div class = "panel">
        
    <style type="text/css">
        #vehicledisplaytb{
            margin-top:10%;
            margin-left: 30%;
            width: 500px;
            height: 400px;}
        #btnvehicle{
                color: white;
                width:200px;
                height:40px;
            }    
            #btn{
                position: relative;
                margin-top:-30%;
                margin-left:40%;
            }  
        
    </style>
</head>
<body>

</br></br>

<div id="content">
        <table class="table table-striped">
            <tr class="title"><th>vehicle_id</th><th>vehicleNO</th><th>capacity</th><th>vehicletype</th><th>status</th><th colspan="2"><center>Action</center></th></tr>
                <?php 
                    $sql = "select * from vehicle";
                    $result = mysqli_query($dbcon,$sql);        
                        while($row = mysqli_fetch_array($result)) {
    
                ?>
                            <tr class="active">
                            <td><?php echo $row['vehicle_id'] ?></td>
                            <td><?php echo $row['vehicleNo'] ?></td>
                            <td><?php echo $row['capacity'] ?></td>
                            <td><?php echo $row['vehicleType'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                            <td class="bt"><input type="button" class="btn btn-danger" value=Delete onclick="location.href='vehicle_details.php?vehicle_id=<?php echo $row['vehicle_id'] ?>'"/></td>
                            <td class="bt"><input type="button" class="btn" value=update onclick="location.href='vehicle_details_updateVehicle.php?ID=<?php echo $row['vehicle_id'] ?>'" ></td>
                            </tr>
                <?php } ?>
        </table>
    
              <?php
       
                if(isset($_GET['vehicle_id'])){
            
                    $id = $_GET['vehicle_id'];
                    $sql= "delete from vehicle where vehicle_id=$id";
                    $result=mysqli_query($dbcon,$sql);
            
                    $sqlupdatedriver="UPDATE driver SET vechicle_id='XXX' WHERE vechicle_id=$id";
                    mysqli_query($dbcon,$sqlupdatedriver);
            
                        if($result){
                            echo'<script language ="javascript">';
                                echo "swal({  title: 'Vehicle Deleted!', text: '', type: 'success', confirmButtonText: 'Done!'}, function(){window.location.href='vehicle_details.php'});";
                            echo'</script>'; }
                        else{
                            echo'<script language ="javascript">';
                                echo "swal({  title: 'Error!', text: '', type: 'error', confirmButtonText: 'Done!'}, function(){window.location.href='vehicle_details.php'});";
                            echo'</script>'; }
                }
            
           ?>
    

</div>
<div id="bottomvehicle">
    
    
</div>
       
<div id="footer">
     <div id="btn">
    <a href="vehicle_details_addVehicle.php"><button id="btnvehicle" class="btn">Add Vehicle</button></a>  
    </div>   
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





