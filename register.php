<?php
session_start();
 // include 'database.php';

?>

<html>
<head>
      <title>Register</title>
</head>
<body>
	<form action="signup.php" method="POST">
	<fieldset>
		<legend>Register Here</legend>
        
		Username:<input type="text" name ="uname" size="20"><br>
		Password:<input type="password" name="pass" size="20"><br>
		<input type="submit" name="register" value="Register">
	</fieldset>
	</form>

</body>

</html>