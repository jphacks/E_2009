<?php

// DB接続
require('./env.php');

// セッション開始
session_start();

// 選択された学部名とキャンパス名をセッション変数に格納する
$_SESSION['selectCampus'] = $_POST['selectCampus'];

$sql = "SELECT ID,CAMPUS_NAME FROM SCHOOL WHERE SCHOOL_NAME='".$_SESSION['schoolName']."'AND DEPART_NAME='".$_SESSION['selectCampus']."'";

$campusName = $mysqli->query($sql);

foreach ($campusName as $row){
  // キャンパス名をセッション変数に格納する
  $_SESSION['campusName'] = $row['CAMPUS_NAME'];
  // IDをセッション変数に格納する
  $_SESSION['ID'] = $row['ID'];
}

header("location: ../template/list.php");

?>
