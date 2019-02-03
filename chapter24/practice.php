<?php
setcookie("food","rice",time()-1);
var_dump($_COOKIE);
?>

<?php
session_start();
$_SESSION["drink"] = "coke";
var_dump($_SESSION);
?>
