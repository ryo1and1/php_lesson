<?php

 

// データベース名の定義

define('DB_DATABASE','pdo_test');

// データベースユーザー名の定義

define('DB_USERNAME','basic');

// データベースユーザーの接続パスワードの定義

define('DB_PASSWORD','Basic-pass1');

// DSN（データソースネーム）の定義

define('DB_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

 

try {

    // コンストラクタ作成の際に、DSN・ユーザー名・パスワード情報を渡す

    $db = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);

    // エラーが起きた際にExceptionを出力する設定

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // クエリ実行

    $statement = $db->prepare("SELECT id, name, mail FROM pdo_practice WHERE id=?;");

    $statement->execute([1]);

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    var_dump($result);

} catch (PDOException $e) {

    var_dump($e);

    exit;

}

?>