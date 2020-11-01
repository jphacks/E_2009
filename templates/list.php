<?php $title = 'Kindred university'; ?>
<?php include('./header.php'); ?>

<h1>Kindred</h1>
<p>circle matching app</p>

<form id="searchArea">

  <button type="submit">サークル登録する</button>

  <p>サークル名で検索</p>
  <input type="text" placeholder="Circle name">
  <button type="submit"><span class="material-icons">search</span></button>

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
<!-- PHPで大学名とキャンパス名をDBから取得してここに出力する -->
<!-- PHPで各サークルの名前と写真をDBから取得してここに出力する -->
</div>

<button><span class="material-icons">arrow_back</span></button>

<?php include('./footer.php'); ?>
