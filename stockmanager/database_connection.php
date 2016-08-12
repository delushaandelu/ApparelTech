<?php
	/*$DB_USER= 'chamrith';
	$DB_PSWD= '';
	$DB_HOST='localhost';
	$DB_NAME='appareltech';*/
$dbcon = mysqli_connect('localhost','chamrith','','apperaltec');

if (!$dbcon) {
	die("Error connecting to database");
}
