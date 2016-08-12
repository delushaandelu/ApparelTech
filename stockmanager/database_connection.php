<?php
	$DB_USER= 'chamrith';
	$DB_PSWD= '';
	$DB_HOST='localhost';
	$DB_NAME='apperaltec';
$dbcon = mysqli_connect($DB_HOST,$DB_USER,$DB_PSWD,$DB_NAME);

if (!$dbcon) {
	die("Error connecting to database");
}
