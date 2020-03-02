<html>
<head>
</head>
<body>
<div align="center">
<div align="left"><a href="../login_registration/Index.php">Exit</a></div>
<?php
include "Wel0serv.php";
?>
<h1>Welcome <?php echo $name ?> to Admin! </h1>
<big><b>
<pre>
<form name="f1" action="" method="post" style="text-align:center;">
<label for="name">Get teacher's key:</label>
<input id="text_input" type="text" name="name" value="<?php echo $resultGen; ?>">
<input type="submit" value="Generate" name="submitGen">

</div>
</form>
</pre>
</b>
</big>
</div>
</body>
</html>