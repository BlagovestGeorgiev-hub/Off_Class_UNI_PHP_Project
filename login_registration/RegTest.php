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
<div align="center">
<h2>Registration</h2>
<?php
include("regserv.php");
?>
<big><b>
<pre>
<form name="f1" action="" method="post" style="text-align:center;">
<label for="name">Enter Username:</label>
<input type="text" name="name"><br>
<label for="pass">Password:</label>
<input type="password" id="pass" name="pass">

<input type="submit" value="Registrate" name="submit">

<p>Already have an account? <a href="Index.php">Login here</a>.</p>
<span><?php echo $error; ?></span><span><?php echo $done; ?></span>

</div>
</form>
</pre>
</b>
</big>

</body>
</html>