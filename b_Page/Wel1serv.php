<?php
include "../config.php";
	$resultGen="";
	
	$sql="SELECT Name FROM lchronology ORDER BY time DESC LIMIT 1;";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{
		$name=$row["Name"];
	}
}
	
	
	if(isset($_POST["submitGen"])){
		$n = 5; 
		$resultGen = bin2hex(random_bytes($n)); 
	//	echo $resultGen;
	
	$sqlT=("INSERT INTO login_reg (KeyT) VALUES ('$resultGen')");
	if ($conn->query($sqlT) === TRUE) {
	echo "Done";
} else {
    echo "Problem";
}
	}
	 mysqli_close($conn);
?>