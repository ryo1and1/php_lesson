<?php
require_once "user.php";
require_once "test.php";
require_once "test2.php";

use Courage\User;
use Courage\Test;
use Courage\Test2;

$user_obj =new User\User("Tanaka");
//$user_obj = new Test\User("Tanaka")
//$user_obj = new Test2\User("Tanaka")
$user_obj->say_hello();
?>
