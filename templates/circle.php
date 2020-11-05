<?php $title = 'Kindred circle'; ?>
<?php include('./header.php'); ?>

<div class="title titleSmall"><h1><a href="./top.php">Kindred</a></h1></div>
<p class="subTitle subTitleSmall">circle matching app</p>

<!-- PHPで大学名とキャンパス名をDBから取得してここに出力する -->

<div id="circleProfileArea">
<!-- PHPでサークル名をDBから取得してここに出力する -->
<!-- Swiperで写真をここにスライド表示させる -->
<!-- PHPでサークルの紹介文をDBから取得してここに出力する -->
  <div id="tableArea">
    <p>活動日時</p>
    <!-- PHPで活動日時の情報をDBから取得してここにテーブルとして出力する -->
    <p>活動概要</p>
    <!-- PHPで活動概要の情報をDBから取得してここにテーブルとして出力する -->
  </div>
  <form id="contactForm">
    <button type="submit">お問い合わせ</button>
  </form>
</div>

<button id="backBtn" onclick="location.href='./list.php'"><span class="material-icons">arrow_back</span></button>

<?php include('./footer.php'); ?>
