<?php

// ファイルの読み込み
require_once('dbconnect.php');
require_once('function.php');

// データの受け取り
$title = $_POST['title'];
$contents = $_POST['contents'];
$id = $_POST['id'];

//$stmtにMysql更新が入ったする関数を代入する
$stmt = $dbh->prepare('UPDATE tasks SET title = ?, contents = ? WHERE id = ? ');
$stmt->execute([$title, $contents, $id]);

header('location:index.php');