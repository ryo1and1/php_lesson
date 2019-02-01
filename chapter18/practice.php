<?php
class User {
	//プロパティ定義
	public $name;

	//staticなプロパティ定義
	public static $job = "engineer";
	//コンストラクタ
	public function __construct($user_name) {
		//プロパティセット
		$this->name = $user_name;
	}

	//メソッド定義
	public function say_hello(){
		//処理
		echo "Hello! ".$this->name.PHP_EOL;
	}
	//staticなメソッド定義
	public static function staticsay_hello(){
	echo "Hello! from static method." .PHP_EOL;
	}
}

//インスタンス作成
$user_obj =new User("Suzuki");
$user_obj =new User("Tanaka");

//staticプロパティ呼び出し
echo User::$job.PHP_EOL;
echo $user_obj_suzuki::$job.PHP_EOL;
echo $user_obj_tanaka::$job.PHP_EOL;

//staticプロパティ書き換え
User::$job = "teacher";

//書き換え後、再度staticプロパティ呼び出し
echo User::$job.PHP_EOL;
echo $user_obj_suzuki::$job.PHP_EOL;
echo $user_obj_tanaka::$job.PHP_EOL;
?>
