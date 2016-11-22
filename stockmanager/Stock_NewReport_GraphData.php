
        <?php
                include('database_connection.php');
            
                    if(isset($categoryname =  $_POST['categoryname'])){
                     
                    echo $categoryname;

                    $query = "SELECT itemName, stockQty,buyingPrice FROM item WHERE catagery = '$categoryname'
                     ORDER BY itemName";
                     echo "$categoryname";
					$result = mysqli_query($dbcon,$query);

					$data = array();

					foreach($result as $row){
						$data[] = $row;
					}

					$result->close();

					print json_encode($data);
				
                       
                   }

            ?>
            


    