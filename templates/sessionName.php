<?php

// DB接続
require('./env.php');

// セッション開始
session_start();

// 選択された学部名とキャンパス名をセッション変数に格納する
$_SESSION['selectCampus'] = $_POST['selectCampus'];

header("location: list.php");

?>
