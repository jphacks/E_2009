<?php $title = 'Kindred select'; ?>
<?php include('../component/header.php'); ?>

<div class="title titleBig"><h1><a href="./top.php">Kindred</a></h1></div>
<p class="subTitle subTitleBig">circle matching app</p>

<div class="selectArea">
<?php

  // 変数にSELECT文を格納
  $sql = "SELECT SCHOOL_NAME,DEPART_NAME,CAMPUS_NAME FROM SCHOOL WHERE SCHOOL_NAME='".$_SESSION['schoolName']."'";

  // SELECT文の実行
  $schoolSearch = $mysqli->query($sql);

  // 大学名の出力
  echo '<p id="selectP">'.$_SESSION['schoolName'].'</p>';

  // form作成
  echo '<form id="selectCampus" action="../function/sessionName.php" method="post">';

  // 学部名とキャンパス名を出力
  foreach ($schoolSearch as $row){
    echo '<label><input type="radio" name="selectCampus" value="'.$row['DEPART_NAME'].'" required>'.$row['DEPART_NAME'].'&nbsp'.$row['CAMPUS_NAME'].'</label>';
  }

  echo '<button class="submitBtn" type="submit">選択する</button></form>';

?>
</div>

<button id="backBtn" onclick="location.href='./top.php'"><span class="material-icons">arrow_back</span></button>

<?php include('../component/footer.php'); ?>
