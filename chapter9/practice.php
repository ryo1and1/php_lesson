<?php
$array = [
	"name" => "Tanaka" ,
	"place" => "Osaka" ,
	"age" => 23
];
$array["place"] = "Tokyo" ;
print_r($array);
?>

<?php
$array = [
	"name" => [
		tanaka,
		suzuki,
		yamamoto
	]
];
echo $array["name"][0];
?>
