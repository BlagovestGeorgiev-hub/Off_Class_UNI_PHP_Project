<?php
$servername="localhost";
$username="Alpha";
$password="Beta";


//Create connection
$conn = new mysqli($servername, $username,$password);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}else{echo "Connection Successful<br>";}
 
// Attempt create database query execution
$sql = "CREATE DATABASE Off_Class_PHP_DB";
if($conn->query($sql) === true){
    echo "Database created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}
 
// Close connection
$conn->close();
?>