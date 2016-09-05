<?php
		
			if(isset($_POST["backup"])){
				
				include ('../config/database.php');
				
				
				// Get table data
				// -> start
				$tables = array();
				$query = mysqli_query($conn, 'SHOW TABLES');
				while($row = mysqli_fetch_row($query)){
					 $tables[] = $row[0];
				}

				$result = "";
				foreach($tables as $table){
				$query = mysqli_query($conn, 'SELECT * FROM '.$table);
				$num_fields = mysqli_num_fields($query);

				$result .= 'DROP TABLE IF EXISTS '.$table.';';
				$row2 = mysqli_fetch_row(mysqli_query($conn, 'SHOW CREATE TABLE '.$table));
				$result .= "\n\n".$row2[1].";\n\n";

				for ($i = 0; $i < $num_fields; $i++) {
				while($row = mysqli_fetch_row($query)){
				   $result .= 'INSERT INTO '.$table.' VALUES(';
					 for($j=0; $j<$num_fields; $j++){
					   $row[$j] = addslashes($row[$j]);
					   $row[$j] = str_replace("\n","\\n",$row[$j]);
					   if(isset($row[$j])){
						   $result .= '"'.$row[$j].'"' ; 
						}else{ 
							$result .= '""';
						}
						if($j<($num_fields-1)){ 
							$result .= ',';
						}
					}
					$result .= ");\n";
				}
				}
				$result .="\n\n";
				}
				// -> end
				

				//Create Folder and save backup file in different location
				$folder = '/backup';
				$date = date('m-d-Y'); 
				$filename = $folder."db_backup_".$date; 
				$handle = fopen($filename.'.sql','w+');
				fwrite($handle,$result);
				fclose($handle);
				$file = $filename.".sql";
				
				
				
				// export file as .sql
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename="'.basename($file).'"');
				header('Expires: 0');
				header('Cache-Control: must-revalidate');
				header('Pragma: public');
				header('Content-Length: ' . filesize($file));
				readfile($file);
				exit;
				
				
			
				
			
			}
			
		
			
				
				
		
		?>
        

