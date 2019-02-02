<?php
namespace Courage\User;


class User{
	public $name;
	public static $job = "engineer";

	public function __construct($user_name){
		$this->name = $user_name;
	}

	public function say_hello(){
		echo "Hello!".$this->name.PHP_EOL."from user.php!";
	}

	public static function static_say_hello(){
		echo "Hello! from static method.".PHP_EOL;
	}
}

?>
