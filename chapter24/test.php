<?php
var_dump($_COOKIE);
?>

<?php
session_start();
unset($_SESSION["drink"]);
var_dump($_SESSION);
?>
