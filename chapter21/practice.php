<?php
function say_hello($name){
	try{
		if(empty($name)){
			throw new Exception("No Name!");
		}
		echo "Hello!".$name.PHP_EOL;
	}catch(Exception $e){
		echo $e->getMessage();
	}
}

say_hello("")
?>



<?php
function math($num1,$num2){
	try{
		if($num2 == 0){
			throw new Exception("Cannot devide by zero!");
		}
		$result = $num1/$num2;
		echo $result.PHP_EOL;
	}catch(Exception $e){
		echo $e->getMessage();
	}
}

math(6,0);
?>
