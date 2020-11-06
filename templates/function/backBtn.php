<?php

// DB接続
require('./env.php');

// セッション開始
session_start();

// レコード数によって遷移先を決定
if($_SESSION['row_school']==1){
  header("location: ../template/top.php");
}else{
  header("location: ../template/select.php");
}

?>
