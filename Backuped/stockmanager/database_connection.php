<?php
	define('DB_USER', 'root');
	define('DB_PSWD', '123');
	define('DB_HOST', '127.0.0.1');
	define('DB_NAME', 'appareltech');

$dbcon = mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);

if (!$dbcon) {
	die("Error connecting to database");
}



?>