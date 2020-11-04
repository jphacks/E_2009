window.onload = function () {

  const date = ['月', '火', '水', '木', '金', '土', '日'];

  // 活動日時のフォームを動的に生成
  for (var i = 0; i < 7; i++){

    // 月～日までのチェックボックスをそれぞれ生成
    document.getElementById("activityDate").insertAdjacentHTML('beforeend', '<div id="selectTime"><span><input type="checkbox" name="date" onChange="activityDateCheck();">' + date[i] + '曜日</span><span><select name="startTime' + i + '" id="start' + i + '" disabled></select>～<select name="endTime' + i + '" id="end' + i + '" disabled></select></span></div>');

    // 24時間分のドロップダウンリストを生成
    for (var j = 0; j < 25; j++){

      var startOption = document.createElement('option');
      var endOption = document.createElement('option');

      startOption.textContent = j + ':00';
      endOption.textContent = j + ':00';

      document.getElementById("start" + i).appendChild(startOption);
      document.getElementById("end" + i).appendChild(endOption);
    }

  }

}

// チェックボックスの状態判定
function activityDateCheck() {

    const elements = document.getElementsByName("date");

  for (let i = 0; i < elements.length; i++){

    if (elements[i].checked) {
      document.getElementById("start" + i).disabled = false;
      document.getElementById("end" + i).disabled = false;
    } else {
      document.getElementById("start" + i).disabled = true;
      document.getElementById("end" + i).disabled = true;
    }

  }

}

// テキストエリアの文字数チェック
function textLengthCheck() {
  var input = document.getElementById("formTextArea");
  var span = document.getElementById("inputCounter");
  span.textContent = input.value.length;


  if(span.textContent > 500){
    var newElement = document.createElement("p"); // p要素作成
    var newContent = document.createTextNode("500文字を超えています"); // テキストノードを作成
    
    newElement.appendChild(newContent); // p要素にテキストノードを追加
    newElement.setAttribute("id","lengthExcess"); // p要素にidを設定
     
    // ----------------------------
    // 親要素の最初の子要素を追加します
    // ----------------------------
    // 親要素（div）への参照を取得
    var parentDiv = document.getElementById("inputCounter");

    parentDiv.insertBefore(newElement, inputCounter.firstChild);

  }
}

