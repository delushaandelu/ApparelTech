<?php
include ('database_connection.php');
$output='';
$sql = "SELECT * FROM supplier WHERE sname LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($dbcon, $sql);
if(mysqli_num_rows($result)>0){
    $output .= '<h4 align="center">Search Result</h4>';
    $output .= '<div class="table-responsive">
                    <table class="table table bordered">
                        <tr> 
                            <th>Supplier ID</th>
                            <th>Supplier Name</th>
                            <th>E mail</th>
                            <th>Address</th>
                            <th>Location</th>
                            <th>Telephone</th>
                            <th>Mobile</th>
                        </tr>';
                while($row = mysqli_fetch_array($result)){
                    $output .='
                    <tr>
                        <td>' .$row["supplier_id"].'</td>
                        <td>' .$row["sname"].'</td>
                        <td>' .$row["email"].'</td>
                        <td>' .$row["address"].'</td>
                        <td>' .$row["location"].'</td>
                        <td>' .$row["tele"].'</td>
                        <td>' .$row["mobile"].'</td>
                        </tr>';
                }
                echo $output;
    
}
else{
    echo 'Data not found!';
}
mysqli_close($dbcon);


?>