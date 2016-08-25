<?php
	define('DB_USER', 'b477c41467c518');
	define('DB_PSWD', '955eff62');
	define('DB_HOST', 'ap-cdbr-azure-southeast-b.cloudapp.net');
	define('DB_NAME', 'apperaltech');

$dbcon = mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);

if (!$dbcon) {
	die("Error connecting to database");
}



?>