<?php
session_start();
?>
<html>
<head>
      <title>Login Page</title>
</head>
<body>
	<form action="login.php" method="POST">
	<fieldset>
		<legend>Login Here</legend>
		Username:<input type="text" name ="uname" size="20"><br>
		Password:<input type="password" name="pass" size="20"><br>
		<input type="submit" name="submit" value="Log-In">
	</fieldset>
	</form>

</body>



</html>