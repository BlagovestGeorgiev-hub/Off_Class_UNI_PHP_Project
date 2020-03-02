<html>
<head>
<div align="right">
<script language ="javascript">
document.write(" "+Date())
</script>
</div>
<meta http-equiv="content-type" 
	content="text/html; charset=utf-8">
<title>Log in</title>
</head>
<body bgcolor=LightBlue>
<div class="login" align="center">
<?php
include("loginserv.php");
?>
<h2 align="center">Log in</h2>
<big><b><pre>
<form name="f1" action="" method="post" style="text-align:center;">
<label for="name">Username:</label>
<input type="text" placeholder="Username" id="user" name="name"><br>
<label for="pass">Password:</label>
<input type="password" placeholder="Password" id="pass" name="pass"><br>
<input type="submit" value="Login" name="submit">

<p>Dont have an account? <a href="RegTest.php">Register here</a>.</p>
<p>Dont have an account? <a href="RegTestT.php">Teacher register here</a>.</p>
<p>Dont have an account? <a href="RegTestCSSFail.php">Test register here</a>.</p>
<!-- Error -->
<span><?php echo $error; ?></span>
</div>
</form>
</big></b></pre>
</body>
</html>