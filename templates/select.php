<?php $title = 'Kindred select'; ?>
<?php include('./header.php'); ?>

<h1><a href="./top.php">Kindred</a></h1>
<p>circle matching app</p>

<div id="selectArea">
<!-- PHPで大学名とキャンパス名をDBから取得してここに出力する -->
<?php

  // 変数にSELECT文を格納
  $sql = "SELECT SCHOOL_NAME,DEPART_NAME,CAMPUS_NAME FROM SCHOOL WHERE SCHOOL_NAME='".$_SESSION['schoolName']."'";

  // SELECT文の実行
  $schoolSearch = $mysqli->query($sql);

  // 大学名の出力
  echo '<p>'.$_SESSION['schoolName'].'</p>';

  // 学部名とキャンパス名を出力
  foreach ($schoolSearch as $row){
    echo '<p>'.$row['DEPART_NAME'].$row['CAMPUS_NAME'].'</p>';
  }

?>
</div>

<button onclick="location.href='./top.php'"><span class="material-icons">arrow_back</span></button>

<?php include('./footer.php'); ?>
