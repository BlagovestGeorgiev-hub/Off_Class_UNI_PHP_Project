<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'Alpha');
define('DB_PASSWORD', 'Beta');
define('DB_NAME', 'Off_Class_PHP_DB');
 
// Attempt to connect to MySQL database 
 $conn = mysqli_connect("localhost", "Alpha", "Beta","Off_Class_PHP_DB");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}//else{echo "Connection Successful";}

date_default_timezone_set("Europe/Sofia");
//echo "The time is " . date("h:i:sa");
$time=date("Y/m/d"." "."H:i:s");
//echo "<br>".$time;



?>