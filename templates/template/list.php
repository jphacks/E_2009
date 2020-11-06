<?php $title = 'Kindred university'; ?>
<?php include('../component/header.php'); ?>

<div class="title titleSmall"><h1><a href="./top.php">Kindred</a></h1></div>
<p class="subTitle subTitleSmall">circle matching app</p>

<button class="submitBtn addCircle" onclick="location.href='./form.php'">サークル登録する</button>

<form id="circleSearch">

  <div id="searchArea">
  <input type="text" placeholder="Circle name" id="searchWord" onChange="formCheck()">
  <button type="submit" id="schoolSearchBtn"><span class="material-icons">search</span></button>
  </div>

  <p>ジャンルで検索</p>
  <select name="circle_category">
    <option>運動系</option>
    <option>文化系</option>
    <option>その他</option>
  </select>

  <p>週の活動頻度で検索</p>
  <select name="frequency_activity">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
  </select>

  <p>ガチ度で検索</p>
  <select name="enthusiasm">
    <option>がっつり</option>
    <option>そこそこ</option>
    <option>まったり</option>
  </select>

  <p>飲み会の頻度で検索</p>
  <select name="frequency_of_drinking">
    <option>0</option>
    <option>1～5</option>
    <option>6～10</option>
    <option>11～15</option>
    <option>16～20</option>
    <option>21～25</option>
    <option>26～31</option>
  </select>
</form>

<div id="circleListArea">
<?php

  // 大学名・学部名・キャンパス名を出力
  echo '<p>'.$_SESSION['schoolName'].'</p>';
  echo '<p>'.$_SESSION['selectCampus'].'&nbsp'.$_SESSION['campusName'].'</p>';

  // サークル名と写真を取得
  $sql = "SELECT CIRCLE_NAME,IMAGE1 FROM CIRCLE_IMAGE WHERE ID='".$_SESSION['ID']."'";

  $circleImage = $mysqli->query($sql);

  // onclick属性を変数に代入
  $onClick1 = 'onclick="location.href=';
  $onClick2 = "'./circle.php'".'"';

  // サークル名と写真を出力
  foreach ($circleImage as $row){
    echo '<div id="circleCard"'.$onClick1.$onClick2.'><p>'.$row['CIRCLE_NAME'].'</p><image src="../static/image/'.$row['IMAGE1'].'"alt="サークルの写真"></div>';
  }

?>
</div>

<button id="backBtn" onclick="location.href='../function/backBtn.php'"><span class="material-icons">arrow_back</span></button>

<script src="../../static/js/formCheck.js"></script>
<?php include('../component/footer.php'); ?>
