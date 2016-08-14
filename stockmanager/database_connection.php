<?php
	define('DB_USER', 'chamrith');
	define('DB_PSWD', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'apperaltec');

$dbcon = mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);

if (!$dbcon) {
	die("Error connecting to database");
}



?>