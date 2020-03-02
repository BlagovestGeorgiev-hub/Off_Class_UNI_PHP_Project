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
"CREATE TABLE Login_Reg ( ".
"Id INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,".
"Name TEXT NOT NULL,".
"Password TEXT NOT NULL)";
if ($conn->query($sql) === TRUE) 
{   echo "<p>Table Login_Reg created successfully"; }
else {  echo "<p>Error creating table: " . $conn->error;  }
$conn->close();

?>