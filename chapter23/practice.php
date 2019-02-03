<?php
header('Content-Type:text/html;charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>Send usernmae</title>
</head>
<body>
	<form action="test.php" method="POST">
		<input type="text" name="last_name" placeholder="•cš">
		<input type="text" name="first_name" placeholder="first name">
		<input type="submit" value="send">
	</form>
</body>
</html>
