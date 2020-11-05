function formCheck() {
  var inputText = document.getElementById("searchWord").nodeValue;
  if (inputText != "") {
    document.getElementById("schoolSearchBtn").disabled = false;
  }
}
