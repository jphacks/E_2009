window.onload = function () {

  const date = ['月', '火', '水', '木', '金', '土', '日'];

  // 活動日時のフォームを動的に生成
  for (var i = 0; i < 7; i++){

    // 月～日までのチェックボックスをそれぞれ生成
    document.getElementById("activityDate").insertAdjacentHTML('beforeend', '<div id="selectTime"><span><input type="checkbox">' + date[i] + '曜日</span><span><select name="startTime' + i + '" id="start' + i + '"></select>～<select name="endTime' + i + '" id="end' + i + '"></select></span></div>');

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
