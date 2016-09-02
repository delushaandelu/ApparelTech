<?php
//get database connection
include('database_connection.php');
//define variables
if(isset($_POST["SearchSupplier"])){

    $email=$_POST['email'];

    //query
    $sql = "SELECT * FROM supplier WHERE email=$email";

    if (mysqli_query($dbcon, $sql) === TRUE){
        echo"search result...";
        echo "<table class='table' style='border: solid 2px black;'>";
        echo"<tr>
                <th style='border: solid 2px black;'>Supplier ID </th>
                <th style='border: solid 2px black;'>Name </th>
                <th style='border: solid 2px black;'>E-mail </th>
                <th style='border: solid 2px black;'>Address </th>
                <th style='border: solid 2px black;'>Location </th>
                <th style='border: solid 2px black;'>Telephone Number </th>
                <th style='border: solid 2px black;'>Mobile Number </th>
            </tr>";

            echo "<tr>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["supplier_id"]. "</h5></td>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["sname"]. "</h5></td>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["email"]. "</h5></td>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["address"]. "</td>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["location"]. "</h5></td>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["tele"]. "</h5></td>
                    <td style='border: solid 2px black;'><h5 align='center'>" . $row["mobile"]. "</h5></td>
                </tr>";
        echo "</table>";
    } else {
        echo "0 results";
    }

    mysqli_close($dbcon);

}

?>