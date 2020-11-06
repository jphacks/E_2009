<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../static/style/css/style.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <title><?php echo $title ?></title>
  </head>
  <body>

<?php

  // DBに接続
  require('../function/env.php');

  // セッション開始
  session_start();

?>
