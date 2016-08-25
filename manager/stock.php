<?php
class stock{
    var $itemName = "";
    var $brand = "";
    var $sellingPrice = "";
    var $cost ="";
    var $categoryName = "";
    var $quantity = "";

    public function showSearch($sql){
        include ('database.php');
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table border = '0'>";
                echo "<tr>";
                echo "<th class>Item ID</th>"; echo"<td width = 10%></td>";
                echo "<th>Item Name</th>";echo"<td width = 5%></td>";
                echo "<th>Category</th>";echo"<td width=5%></td>";
                echo "<th>Brand</th>";echo"<td width=5%></td>";
                echo "<th>Buying Price</th>";echo"<td width = 5%></td>";
                echo "<th>Selling Price</th>";echo"<td width=5%></td>";
                echo "<th>Quantity</th>";
                echo "</tr>";

                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $row['item_id'] . "</td>"; echo"<td ></td>";
                    echo "<td>" . $row['itemName'] . "</td>";echo"<td></td>";
                    echo "<td>" . $row['catagery'] . "</td>";echo"<td></td>";
                    echo "<td>" . $row['brand'] . "</td>";echo"<td></td>";
                    echo "<td>" . $row['buyingPrice'] . "</td>";echo"<td></td>";
                    echo "<td>" . $row['sellingPrice'] . "</td>";echo"<td></td>";
                    echo "<td>" . $row['stockQty'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";

                mysqli_free_result($result);
            } else{
                echo "No such record found!!.";
            }
        } else{
            echo "ERROR $sql. " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

    public function searchStock($itemName){
        include ('database.php');

        $sql = "SELECT * FROM item WHERE itemName = '$itemName'";
        $this->showSearch($sql);
    }
}