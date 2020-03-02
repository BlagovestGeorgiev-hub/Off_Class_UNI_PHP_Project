<?php
$servername = "localhost";
$username = "Alpha";
$password = "Beta";
$dbname = "off_class_php_db";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn===FALSE)
{
	die("Connection failed: ".$conn->connect_error."<br>");
}else{echo "Connection successful<br>";}

$sql =
"CREATE TABLE AlphaMK3 ( ".
"Id INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,".
"Name VARCHAR(33) NOT NULL,".
"Pay INT(3) NOT NULL,".
"ProductID VARCHAR(50) NOT NULL,".
"ProductN VARCHAR(10) NOT NULL,".
"Money INT(100) NOT NULL,".
"Time TEXT NOT NULL)";
if ($conn->query($sql) === TRUE) 
{   echo "<p>Table AlphaMK3 created successfully"; }
else {  echo "<p>Error creating table: " . $conn->error;  }
$conn->close();

/*
//SQL to create a table
$sql="CREATE TABLE AlphaMK1 
(
Name VARCHAR(40) NOT NULL,
Id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
PayType INT(3) UNSIGNED,
IdOfProducts VARCHAR(30),
NumberOfProducts INT(255) UNSIGNED
)";
*/
?>