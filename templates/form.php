<?php $title = 'Kindred form'; ?>
<?php include('./header.php'); ?>

<h1>Kindred</h1>
<p>circle matching app</p>
<p>サークル新規登録</p>

<div id="addCircleInfo">
  <form id="addForm">

  <span>
    <p>大学名</p>
    <input type="text">
  </span>

  <span>
    <p>学部名</p>
    <input type="text">
  </span>

  <span>
    <p>サークル名</p>
    <input type="text">
  </span>

  <span>
    <p>紹介文</p>
    <textarea></textarea>
  </span>

  <span>
    <p>活動日時</p>
    <!-- JSでループさせてここに活動日時欄を作りたい -->
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
    <input type="text">
  </span>

  <div id="uploadArea">
    <p>写真のアップロード</p>
    <!-- ここにアップロード機能を追加する -->
  </div>

    <button type="submit">登録する</button>

  </form>
</div>

<button><span class="material-icons">arrow_back</span></button>

<?php include('./footer.php'); ?>
