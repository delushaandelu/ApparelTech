<?php
    define('DB_USER', 'bbff2134fa7f9a');
    define('DB_PSWD', '68d089ed');
    define('DB_HOST', 'ap-cdbr-azure-east-c.cloudapp.net');
    define('DB_NAME', 'appareltech');

    $dbconn = mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);

    if (!$dbconn) {
        die("Error connecting to database");
    }
?>
