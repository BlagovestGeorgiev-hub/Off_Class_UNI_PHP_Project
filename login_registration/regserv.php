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
	  $error = "Username or Name is alredy taken";
 }
 else
 {
	 //==========MD5+reverse+b64+b2h==========
	 $hasher = new DiContainer($md5);
	$hashedP=base64_encode (bin2hex (strrev ($hasher->hashIt($pass.$salt))));
	 
	 $sql="INSERT INTO Login_Reg(name,password)
VALUES('$name','$hashedP')";	
if ($conn->query($sql) === TRUE) {
	$done = "Registration is complete";
} else {
    $error = "There was a problem whit the registration";
}
 }
 mysqli_close($conn);
 
}
}

?>