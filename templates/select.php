<?php $title = 'Kindred select'; ?>
<?php include('./header.php'); ?>

<div class="title titleBig"><h1><a href="./top.php">Kindred</a></h1></div>
<p>circle matching app</p>

<div id="selectArea">
<?php

  // 変数にSELECT文を格納
  $sql = "SELECT SCHOOL_NAME,DEPART_NAME,CAMPUS_NAME FROM SCHOOL WHERE SCHOOL_NAME='".$_SESSION['schoolName']."'";

  // SELECT文の実行
  $schoolSearch = $mysqli->query($sql);

  // 大学名の出力
  echo '<p>'.$_SESSION['schoolName'].'</p>';

  // form作成
  echo '<form action="sessionName.php" method="post">';

  // 学部名とキャンパス名を出力
  foreach ($schoolSearch as $row){
    echo '<label><input type="radio" name="selectCampus" value="'.$row['DEPART_NAME'].'&nbsp'.$row['CAMPUS_NAME'].'">'.$row['DEPART_NAME'].$row['CAMPUS_NAME'].'</label>';
  }

  echo '<button type="submit">選択する</button></form>';

?>
</div>

<button onclick="location.href='./top.php'"><span class="material-icons">arrow_back</span></button>

<?php include('./footer.php'); ?>
