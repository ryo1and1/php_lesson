<?php
// ���ԑ�(�� or �� or ��)
$time_zone = "evening";
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

<?php
//�V�C(��or�܂�or�J)
$tenki = "sunny";
//�V�C�ɂ���čs����ς���
switch($tenki){
case("sunny"):
	echo "�ނ�" .PHP_EOL;
	break;
case("cloudy"):
	echo "����" .PHP_EOL;
	break;
case("rainy"):
	echo "�Ǐ�" .PHP_EOL;
	break;
default:
	echo "�Ǝ�" .PHP_EOL;
	break;
}
?>
