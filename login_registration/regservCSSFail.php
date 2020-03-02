<?php
include "../config.php";
include "encrypt/DiContainer.php";
include "encrypt/Md5.php";
$error='';
$done='';
$md5=new md5();

if(isset($_POST['submit'])){
 if(empty($_POST['name']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid or empty";
 }
 else
 {
$name=$_POST["name"];
$pass=$_POST["pass"];
$salt=$name;


$query = mysqli_query($conn, "SELECT name FROM login_reg WHERE name='$name'");
 $rows = mysqli_num_rows($query);
 if($rows == 1){
	  $error = "Username is alredy taken";
 }
 else
 {
	 //==========MD5+reverse+b64+b2h==========
	 $hasher = new DiContainer($md5);
	$hashedP=base64_encode (bin2hex (strrev ($hasher->hashIt($pass.$salt))));
	 
	 $sql="INSERT INTO Login_Reg(name,password,time,type)
VALUES('$name','$hashedP','$time','3')";	
if ($conn->query($sql) === TRUE) {
	$done = "Registration is complete";
} else {
    $error = "There was a problem whit the registration";
}
 }
 mysqli_close($conn);
 
}
}


$error1='';
$done1='';
if(isset($_POST['submitT'])){
 if(empty($_POST['name']) || empty($_POST['pass']) || empty($_POST['key'])){
 $error1 = "Username,Password or Key is empty";
 }
 else
 {
$name=$_POST["name"];
$pass=$_POST["pass"];
$key=$_POST["key"];
$salt=$name;
$LoL=NULL;

$query = mysqli_query($conn, "SELECT name FROM login_reg WHERE name='$name'");
 $rows = mysqli_num_rows($query);
 if($rows == 1){
	  $error1 = "Username is alredy taken";
 }
 else
 {
	 $query = mysqli_query($conn, "SELECT KeyT FROM login_reg WHERE KeyT='$key'");
 $rows = mysqli_num_rows($query);
 if($rows == 0){
	  $error1 = "Key is invalid";
 }else{
	 
	 //==========MD5+reverse+b64+b2h==========
	 $hasher = new DiContainer($md5);
	$hashedP=base64_encode (bin2hex (strrev ($hasher->hashIt($pass.$salt))));
	 
	 $sql="UPDATE Login_Reg SET Name='$name',Password='$hashedP',
	 Time='$time',Type='2',KeyT='$LoL' WHERE KeyT='$key'";
	 
if ($conn->query($sql) === TRUE) {
	$done1 = "Registration is complete";
	//$del="DELETE Login_Reg WHERE KeyT='$key'";
} else {
    $error1 = "There was a problem whit the registration";
}
 }
 mysqli_close($conn);
 }
}
}

?>