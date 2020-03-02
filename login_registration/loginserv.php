<?php

include "../config.php";
include "encrypt/DiContainer.php";
include "encrypt/Md5.php";

$md5=new md5();
$error='';
if(isset($_POST['submit'])){
 if(empty($_POST['name']) || empty($_POST['pass'])){
 $error = "Username or Password is empty";
 }
 else
 {
 $name=$_POST['name'];
 $pass=$_POST['pass'];
 $salt=$name;
 $type;
 	$hasher = new DiContainer($md5);
	$hashedP=base64_encode (bin2hex (strrev ($hasher->hashIt($pass.$salt))));
 

 $query = mysqli_query($conn, "SELECT name,password FROM login_reg WHERE password='$hashedP' AND name='$name'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){

$sql="SELECT Type FROM login_reg WHERE name='$name' AND password='$hashedP'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{
		$pType=($row["Type"]);
	}
}
	 
	 $sql="INSERT INTO LChronology(Name,Time,Type)
VALUES('$name','$time','$pType')";
if ($conn->query($sql) === TRUE) {
	echo "1";
} else {
    echo "0";
}
	if($pType==0){
 header("Location: ../b_Page/welcome.php"); // Redirecting to other page
	}elseif($pType==1){
		header("Location: ../b_Page/welcome1.php");
	}elseif($pType==2){
		header("Location: ../b_Page/welcome2.php");
	}elseif($pType==3){
		header("Location: ../b_Page/welcome3.php");
	}
 }
 else
 {
 $error = "<br>Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>