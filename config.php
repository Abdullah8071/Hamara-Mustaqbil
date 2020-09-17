<?php
define('DB_SERVER','localhost');
define('DB_USER','hamaramu_staqbil');
define('DB_PASS' ,'founders2016');
define('DB_NAME', 'hamaramu_db');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>