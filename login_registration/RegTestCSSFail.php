<html>
<head>
<title>Registration</title>
<meta http-equiv="content-type" 
	content="text/html; charset=utf-8"
	name="viewport" content="width=device-width, initial-scale=1">
	<div align="right">
<script language ="javascript">
document.write(" "+Date())
</script>
	</div>
</head>
<body bgcolor=lightblue>
<div class="split left" >
<div class="centered">
<h2>Registration</h2>
<?php
include("regservCSSFail.php");
include("regCSS.css");
?>
<big><b>
<pre>
<form name="f1" action="" method="post" style="text-align:center;">
<label for="name">Enter Username:</label>
<input type="text" name="name"><br>
<label for="pass">Password:</label>
<input type="password" id="pass" name="pass">

<input type="submit" value="Registrate" name="submit">

<span><?php echo $error; ?></span><span><?php echo $done; ?></span>
</big>
</b>
</pre>
</form>
</div>
</div>

<div class="split right" >
<div class="centered">
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

<span><?php echo $error1; ?></span><span><?php echo $done1; ?></span>
</big>
</b>
</pre>
</form>
</div>
</div>
<div align="center">
<p>Already have an account? <a href="Index.php">Login here</a>.</p>
</div>


</body>
</html>