<?php

//DBに接続
$host = "db"; //mysqlがインストールされているcp
$dbname = "todo";//つなげたいデータベース
$charset = "utf8mb4";//文字コード
$user = 'root';//ログインするuser名
$password = 'secret';//パスワード
//データベース接続
$options = [
    //出たエラーを画面に表示させる
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    //取得データを順番に読み込む
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //SQLのインジェクション対策
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
try {
    $dbh = new PDO($dsn, $user, $password, $options);
} catch (\PDOException $e) {
    var_dump($e->getMessage());
    exit;
}
