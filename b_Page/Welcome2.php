<html>
<head>
</head>
<body>
<?php
include "../config.php";
$sql="SELECT Name FROM lchronology ORDER BY time DESC LIMIT 1;";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{
		$name=$row["Name"];
	}
}

?>
<h1>Welcome <?php echo $name ?> to Teacher! </h1>
</body>
</html>