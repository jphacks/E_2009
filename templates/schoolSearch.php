<?php

// DB接続
require('./env.php');

// top.phpから値を受け取って遷移先を決定する
$schoolName=$_POST['schoolName'];

// 変数にSELECT文を格納
$schoolSearchSql = "SELECT SCHOOL_NAME,DEPART_NAME,CAMPUS_NAME FROM SCHOOL WHERE SCHOOL_NAME='".$schoolName."'";

// SELECT文の実行
$schoolSearch = $mysqli->query($schoolSearchSql);

// レコード数を取得
$row_school = mysqli_num_rows($schoolSearch);

// レコード数によって遷移先を決定
if($row_school==1){
  header("location: list.php");
}else{
  header("location: select.php");
}

?>
