<?php
// ���ԑ�(�� or �� or ��)
$time_zone = "eveningg";
//���ԑт��ƂɈ��A��ς��ĕ\������
switch ($time_zone){
case("morning"):
	echo "���͂悤" .PHP_EOL;
	break;
case("afternoon"):
	echo "����ɂ���" .PHP_EOL;
	break;
case("evening"):
case("night"):
	echo "����΂��" .PHP_EOL;
	break;
default:
	echo "������" .PHP_EOL;
	break;
}
?>
