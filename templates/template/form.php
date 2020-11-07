<?php $title = 'Kindred form'; ?>
<?php include('../component/header.php'); ?>

<div class="title titleSmall"><h1><a href="./top.php">Kindred</a></h1></div>
<p class="subTitle subTitleSmall">circle matching app</p>
<p id="addNewCircle">サークル新規登録</p>

<div id="addCircleInfo">
  <form id="addForm">

  <span>
    <p>大学名</p>
    <input type="text" class="inputForm">
  </span>

  <span>
    <p>学部名</p>
    <input type="text" class="inputForm">
  </span>

  <span>
    <p>サークル名</p>
    <input type="text" class="inputForm">
  </span>

  <span id="textArea">
    <p>紹介文</p>
    <textarea id="formTextArea" rows="10" cols="50" onkeyup="textLengthCheck();" class="inputForm"></textarea>
    <p><span id="inputCounter">0</span>/500文字</p>
  </span>

  <span id="activityDate">
    <p>活動日時</p>
  </span>

  <span>
    <p>分類</p>
    <select name="circle_category">
      <option>運動系</option>
      <option>文化系</option>
      <option>その他</option>
    </select>
  </span>

  <span>
    <p>週の活動頻度</p>
    <select name="frequency_activity">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
    </select>
  </span>

  <span>
    <p>ガチ度</p>
    <select name="enthusiasm">
      <option>がっつり</option>
      <option>そこそこ</option>
      <option>まったり</option>
    </select>
  </span>

  <span>
    <p>飲み会の頻度</p>
    <input type="text" class="inputForm">
  </span>

  <div id="uploadArea">
    <p>写真のアップロード</p>
    <!-- ここにアップロード機能を追加する -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
      Files:<input type="file" name="upfile[]" multiple>
    </form>


  </div>

    <button type="submit">登録する</button>

  </form>
</div>

<button id="backBtn" onclick="location.href='./list.php'"><span class="material-icons">arrow_back</span></button>

<script src="../../static/js/createForm.js"></script>

<?php include('../component/footer.php'); ?>
