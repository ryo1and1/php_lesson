<?php
class User {
	//�v���p�e�B��`
	public $name;

	//static�ȃv���p�e�B��`
	public static $job = "engineer";
	//�R���X�g���N�^
	public function __construct($user_name) {
		//�v���p�e�B�Z�b�g
		$this->name = $user_name;
	}

	//���\�b�h��`
	public function say_hello(){
		//����
		echo "Hello! ".$this->name.PHP_EOL;
	}
	//static�ȃ��\�b�h��`
	public static function staticsay_hello(){
	echo "Hello! from static method." .PHP_EOL;
	}
}

//�C���X�^���X�쐬
$user_obj =new User("Suzuki");
$user_obj =new User("Tanaka");

//static�v���p�e�B�Ăяo��
echo User::$job.PHP_EOL;
echo $user_obj_suzuki::$job.PHP_EOL;
echo $user_obj_tanaka::$job.PHP_EOL;

//static�v���p�e�B��������
User::$job = "teacher";

//����������A�ēxstatic�v���p�e�B�Ăяo��
echo User::$job.PHP_EOL;
echo $user_obj_suzuki::$job.PHP_EOL;
echo $user_obj_tanaka::$job.PHP_EOL;
?>
