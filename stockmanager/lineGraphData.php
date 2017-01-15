
        <?php
                include('database_connection.php');
            
                   // if(isset($_POST['categoryname'])){
                     
                    //echo $categoryname;
                    //int i= 1;
                    $query1 = "SELECT count(DISTINCT created) FROM purchasereport ";
                    $query2 = "SELECT DISTINCT created FROM purchasereport";
                    $data = array(array());
                    // echo "$categoryname";
                    $result1 = mysqli_query($dbcon,$query1);
                    $val = mysqli_fetch_array($result1);

                   // print $val[0];
                    $dates = array();

                    
					$result2 = mysqli_query($dbcon,$query2);
                    while($row2 = mysqli_fetch_assoc($result2)){
                        array_push($dates,$row2['created']);

   
                    }
                   //echo $dates[4];
                    for ($i =0;$i<$val[0]-1;$i++){
                        $j = 0;
                        
                        $data[$i][$j] = $dates[$i];
                        //echo($data[$i][$j]);
                        $query3 = "SELECT count(created) FROM purchasereport WHERE created = '$dates[$i]'";
                       //echo $query3;
                        $result3 = mysqli_query($dbcon,$query3);
                        $val2 = mysqli_fetch_array($result3);
                        $data[$i][$j+1] = $val2[0];
                    

                    }
                   
					/*echo $data[0][0];
                    echo $data[0][1];
                    echo $data[1][0];
                    echo $data[1][1];*/

					//$result->close();

					echo json_encode($data);
				
              

            ?>
            


    