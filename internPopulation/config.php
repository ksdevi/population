<?php
//Database details
$db_host = 'sql12.freemysqlhosting.net';
$db_username = 'sql12629071';
$db_password = 'yDyj1AEbXP';
$db_name = 'sql12629071';

//Create connection and select DB
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
