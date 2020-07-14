<?php

// ファイルの読み込み
require_once('dbconnect.php');
require_once('function.php');

//POSTされてきた値を$_POSTで受け取る
// データの受け取り
$title = $_POST['title'];
$contents = $_POST['contents'];
//現在の日時を表示
$currentTime = date("Y/m/d H:i:s");

// DBへのデータ挿入準備
$stmt = $dbh->prepare('INSERT INTO tasks (title, contents, created) VALUES (?, ?, ?)');
$stmt->execute([$title, $contents, $currentTime]);//?を変数に置き換えてSQLを実行

// リダイレクト ページ誘導
header('location:index.php');