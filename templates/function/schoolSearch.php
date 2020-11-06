<?php

// DB接続
require('./env.php');

// セッション開始
session_start();

// top.phpから値を受け取ってセッション変数に格納
$_SESSION['schoolName'] = $_POST['schoolName'];

// 変数にSELECT文を格納
$schoolSearchSql = "SELECT SCHOOL_NAME,DEPART_NAME,CAMPUS_NAME FROM SCHOOL WHERE SCHOOL_NAME='".$_SESSION['schoolName']."'";

// SELECT文の実行
$schoolSearch = $mysqli->query($schoolSearchSql);

// レコード数を取得
$row_school = mysqli_num_rows($schoolSearch);

// レコード数をセッション変数に代入
$_SESSION['row_school'] = $row_school;

// レコード数によって遷移先を決定
if($_SESSION['row_school']==1){
  // 学部名とキャンパス名をセッション変数に格納
  foreach($schoolSearch as $row){
    $_SESSION['selectCampus'] = $row['DEPART_NAME'].'&nbsp'.$row['CAMPUS_NAME'];
  }
  header("location: ../template/list.php");
}else{
  header("location: ../template/select.php");
}

?>
