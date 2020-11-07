<?php $title = 'Kindred circle'; ?>
<?php include('../component/header.php'); ?>

<div class="title titleSmall"><h1><a href="./top.php">Kindred</a></h1></div>
<p class="subTitle subTitleSmall">circle matching app</p>

<?php
  // 大学名・学部名・キャンパス名を出力
  echo '<div class="circleFlex"><p class="circleP circleSchoolName">'.$_SESSION['schoolName'].'</p>';
  echo '<div class="campusNameFlex"><p class="circleP circleCampus">'.$_SESSION['selectCampus'].'</p>';
  echo '<p class="circleP circleCampusName">'.$_SESSION['campusName'].'</p></div></div>';

  $sql = "SELECT
    CIRCLE.CIRCLE_NAME,
    CIRCLE.CIRCLE_CATEGORY,
    CIRCLE.INTRO,
    CIRCLE.CONTACT,
    CIRCLE.ENTHUSIASM,
    CIRCLE.FREQ_DRINK,
    CIRCLE.FREQ_ACTIVITY,
    CIRCLE_IMAGE.IMAGE1,
    CIRCLE_IMAGE.IMAGE2,
    CIRCLE_IMAGE.IMAGE3,
    CIRCLE_IMAGE.IMAGE4,
    CIRCLE_IMAGE.IMAGE5,
    CIRCLE_TIME.IS_MON,
    CIRCLE_TIME.MON_TIME,
    CIRCLE_TIME.IS_TUE,
    CIRCLE_TIME.TUE_TIME,
    CIRCLE_TIME.IS_WED,
    CIRCLE_TIME.WED_TIME,
    CIRCLE_TIME.IS_THU,
    CIRCLE_TIME.THU_TIME,
    CIRCLE_TIME.IS_FRI,
    CIRCLE_TIME.FRI_TIME,
    CIRCLE_TIME.IS_SAT,
    CIRCLE_TIME.SAT_TIME,
    CIRCLE_TIME.IS_SUM,
    CIRCLE_TIME.SUM_TIME
    FROM CIRCLE
    LEFT JOIN CIRCLE_IMAGE ON CIRCLE_IMAGE.ID = CIRCLE.ID
    LEFT JOIN CIRCLE_TIME ON CIRCLE.ID = CIRCLE_TIME.ID
    WHERE CIRCLE.ID='".$_SESSION['ID']."'";

  // sql文を実行
  $circleInfo = $mysqli->query($sql);

  echo '<div id="circleProfileArea">';

// 取得した情報を表示
  foreach ($circleInfo as $row){

    // サークル名を出力
    echo '<p class="circleInfoName">'.$row['CIRCLE_NAME'].'</p>';

    // Swiperで写真をここにスライド表示させる

    // サークルの紹介文を表示
    echo '<p class="circleInfoIntro">'.$row['INTRO'].'</p>';

    // PHPで活動日時の情報をDBから取得してここにテーブルとして出力する
    echo '<div id="tableArea"><p>活動日時</p>
    <table>
      <tr>
        <td>月</td>
        <td>'.$row['MON_TIME'].'</td>
      </tr>
      <tr>
        <td>火</td>
        <td>'.$row['TUE_TIME'].'</td>
      </tr>
      <tr>
        <td>水</td>
        <td>'.$row['WED_TIME'].'</td>
      </tr>
      <tr>
        <td>木</td>
        <td>'.$row['THU_TIME'].'</td>
      </tr>
      <tr>
        <td>金</td>
        <td>'.$row['FRI_TIME'].'</td>
      </tr>
      <tr>
        <td>土</td>
        <td>'.$row['SAT_TIME'].'</td>
      </tr>
      <tr>
        <td>日</td>
        <td>'.$row['SUM_TIME'].'</td>
      </tr>
    </table>';


    // PHPで活動概要の情報をDBから取得してここにテーブルとして出力する
    echo '<p>活動概要</p>
    <table>
      <tr>
        <td>分類</td>
        <td>'.$row['CIRCLE_CATEGORY'].'</td>
      </tr>
      <tr>
        <td>週の活動頻度</td>
        <td>'.$row['FREQ_ACTIVITY'].'</td>
      </tr>
      <tr>
        <td>ガチ度</td>
        <td>'.$row['ENTHUSIASM'].'</td>
      </tr>
      <tr>
        <td>飲み会の頻度</td>
        <td>'.$row['FREQ_DRINK'].'</td>
      </tr>
    </table>';

    // お問い合わせ
    echo '<form id="contactForm"><button type="submit">お問い合わせ</button></form></div>';
  }
?>

<button id="backBtn" onclick="location.href='./list.php'"><span class="material-icons">arrow_back</span></button>

<?php include('../component/footer.php'); ?>
