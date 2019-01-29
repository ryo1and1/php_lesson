<?php
// 時間帯(朝 or 昼 or 夜)
$time_zone = "evening";
//時間帯ごとに挨拶を変えて表示する
switch ($time_zone){
case("morning"):
	echo "おはよう" .PHP_EOL;
	break;
case("afternoon"):
	echo "こんにちは" .PHP_EOL;
	break;
case("evening"):
case("night"):
	echo "こんばんは" .PHP_EOL;
	break;
default:
	echo "おっす" .PHP_EOL;
	break;
}
?>

<?php
//天気(晴or曇りor雨)
$tenki = "sunny";
//天気によって行動を変える
switch($tenki){
case("sunny"):
	echo "釣り" .PHP_EOL;
	break;
case("cloudy"):
	echo "走る" .PHP_EOL;
	break;
case("rainy"):
	echo "読書" .PHP_EOL;
	break;
default:
	echo "家事" .PHP_EOL;
	break;
}
?>
