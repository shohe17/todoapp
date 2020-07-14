<?php


require_once('dbconnect.php');
require_once('function.php');

//データの受け取り
$id = $_POST['id'];


//削除のSQL処理準備を$stmtに入れる
$stmt = $dbh->prepare('DELETE FROM tasks WHERE id = ?');
$stmt->execute([$id]);//実行する

//リダイレクト ページ誘導
header('location:index.php');