<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$email=$_GET['email'];
		session_start();
		if (!isset($_SESSION[$email])) {
			hearder("location:login.php?message=unauthorised user");
			exit;
		}
	?>
 <h1>Hello</h1>
</body>
</html>