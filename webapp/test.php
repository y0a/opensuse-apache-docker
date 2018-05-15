<?php
	if(isset($_POST['sbm'])){
		if(empty($_POST['uname'])){
			echo "opa";
		}else {
			echo "<script>alert('Hello ".$_POST['uname']."');</script>"
		}
	}
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
