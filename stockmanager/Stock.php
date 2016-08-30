<?php
	class Stock{
		createchart($sql , $categoryname){
			include (database_connection.php);
			$dataArray=array();
				if($result = mysqli_query($dbcon, $sql)){
					if(mysqli_num_rows($result) > 0){
						while ($row = mysql_fetch_assoc($result)) {
      						$category=$row["$categoryname"];
      						$count=$row["stockQty"];
      						//add to data areray
      						$dataArray[$category]=$count;
  						}

					}
				}

		}
	}

?>