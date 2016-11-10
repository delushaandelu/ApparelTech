
$tbl_header = '<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    margin: 0 20px;
}
tr {
    padding: 3px 0;
}

th {
    background-color: #CCCCCC;
    border: 1px solid #DDDDDD;
    color: #333333;
    font-family: trebuchet MS;
    font-size: 30px;
    padding-bottom: 4px;
    padding-left: 6px;
    padding-top: 5px;
    text-align: left;
}
td {
    border: 1px solid #CCCCCC;
    font-size: 25px;
    padding: 3px 7px 2px;
}

</style>
<table class='table' style='border: 0;' id='myTable'>
                <tr>
                <th><h4 align='center'>Supplier ID </h4></th>
                <th><h4 align='center'>Name </h4></th>
                <th><h4 align='center'>E-mail </h4></th>
                <th><h4 align='center'>Address </h4></th>
                <th><h4 align='center'>Location </h4></th>
                <th><h4 align='center'>Telephone Number </h4></th>
                <th><h4 align='center'>Mobile Number </h4></th>
            </tr>
$tbl_footer = '</table>';
$tbl = '';
<? php
    include("database_connection.php");
    $sql = "SELECT (supplier_id, sname, email, address, location, tele, mobile) FROM supplier"
        $result = mysqli_query($dbcon, $sql);
while ($row = mysql_fetch_assoc($result)) {
    ?>
    <tr>
                    <td><h5 align='center'><?php echo $row['supplier_id'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['sname'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['email'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['address'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['location'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['tele'] ?></h5></td>
                    <td><h5 align='center'><?php echo $row['mobile'] ?></h5></td>

    </tr>
<? php
}
?>
// output the HTML content
$pdf->writeHTML($tbl_header . $tbl . $tbl_footer, true, false, false, false, '');