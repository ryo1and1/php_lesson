<?php
$last_name = "";
$first_name ="";


if($_SERVER['REQUEST_METHOD']==="GET"){
	$last_name = $_GET["last_name"];
	$first_name = $_GET["first_name"];
}
?>

<!DOCTYPE html>
<html lang = "ja">
<head>
	<meta charset = "utf-8">
	<title>Send username</title>
</head>

<body>
<?php echo "last_name : ".htmlspecialchars($last_name).PHP_EOL;?>
<?php echo "first_name : ".htmlspecialchars($first_name).PHP_EOL;?>
</body>
</html>
