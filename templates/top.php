<?php $title = 'Kindred top'; ?>
<?php include('./header.php'); ?>

<div class="title titleBig"><h1>Kindred</h1></div>
<p class="subTitle subTitleBig">circle matching app</p>

<form id="searchArea" action="schoolSearch.php" method="post">
  <input type="text" placeholder="University name" name="schoolName">
  <button type="submit"><span class="material-icons">search</span></button>
</form>
<img src="../static/image/undraw_group_selfie_ijc6.svg" alt="若者の画像">

<?php include('./footer.php'); ?>
