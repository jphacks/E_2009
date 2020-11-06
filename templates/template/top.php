<?php $title = 'Kindred top'; ?>
<?php include('../component/header.php'); ?>

<div class="title titleBig"><h1>Kindred</h1></div>
<p class="subTitle subTitleBig">circle matching app</p>

<form id="searchArea" action="../function/schoolSearch.php" method="post">
  <input type="text" placeholder="University name" name="schoolName" id="searchWord" onChange="formCheck()">
  <button type="submit" id="schoolSearchBtn" disabled><span class="material-icons">search</span></button>
</form>
<img src="../../static/image/undraw_group_selfie_ijc6.svg" alt="若者の画像">

<script src="../../static/js/formCheck.js"></script>
<?php include('../component/footer.php'); ?>
