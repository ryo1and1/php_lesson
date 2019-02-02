<?php
spl_autoload_register(function($class){
	require $class.".php" ;
});

$user_obj = new User("Tanaka");
$user_obj->say_hello();
?>
