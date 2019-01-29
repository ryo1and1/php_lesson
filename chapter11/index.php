<?php
// ŽžŠÔ‘Ñ(’© or ’‹ or –é)
$time_zone = "eveningg";
//ŽžŠÔ‘Ñ‚²‚Æ‚Éˆ¥ŽA‚ð•Ï‚¦‚Ä•\Ž¦‚·‚é
switch ($time_zone){
case("morning"):
	echo "‚¨‚Í‚æ‚¤" .PHP_EOL;
	break;
case("afternoon"):
	echo "‚±‚ñ‚É‚¿‚Í" .PHP_EOL;
	break;
case("evening"):
case("night"):
	echo "‚±‚ñ‚Î‚ñ‚Í" .PHP_EOL;
	break;
default:
	echo "‚¨‚Á‚·" .PHP_EOL;
	break;
}
?>
