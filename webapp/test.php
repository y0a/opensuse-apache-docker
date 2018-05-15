<?php
	phpinfo();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello there</title>
</head>
<body>
	<form method="post" action="$_SERVER['PHP_SELF']">
		<input type="text" name="uname" placeholder="Name">
		<input type="submit" name="sbm" value="Submit">
	</form>
</body>
</html>
