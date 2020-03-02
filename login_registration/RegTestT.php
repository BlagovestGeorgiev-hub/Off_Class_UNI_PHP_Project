<html>
<head>
<title>Registration</title>
<meta http-equiv="content-type" 
	content="text/html; charset=utf-8">
	<div align="right">
<script language ="javascript">
document.write(" "+Date())
</script>
	</div>
</head>
<body bgcolor=lightblue>
<div align=center>
<?php
include("regservT.php");
?>

<h2>Registration for teachers</h2>
<big><b>
<pre>
<form name="f2" action="" method="post" style="text-align:center;">
<label for="name">Enter Username:</label>
<input type="text" name="name"><br>
<label for="pass">Password:</label>
<input type="password" name="pass"><br>
<label for="key">Key:</label>
<input type="text" name="key">

<input type="submit" value="Registrate" name="submitT">

<span><?php echo $error; ?></span><span><?php echo $done; ?></span>
</big>
</b>
</pre>
</form>

<p>Already have an account? <a href="Index.php">Login here</a>.</p>
</div>


</body>
</html>