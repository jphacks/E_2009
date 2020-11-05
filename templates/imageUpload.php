<?php
define('FILE_PATH','./image/'); //保存するパスを指定
 
if ( !empty($_FILES) ) {
    for ( $i=0; $i<count($_FILES["upfile"]["tmp_name"]); $i++ ) {
        if ( is_uploaded_file($_FILES["upfile"]["tmp_name"][$i]) ) {
 
            $name = $_FILES['upfile']['name'][$i];
            $tempFile = $_FILES['upfile']['tmp_name'][$i];
 
            // Validate the file type
            $fileTypes = array('jpg','jpeg','gif','png');   // File extensions
            $fileParts = pathinfo($_FILES['upfile']['name'][$i]);
 
            // ファイル名がアルファベットのみかをチェック
            if ( preg_match("/^([a-zA-Z0-9\.\-\_])+$/ui", $name) == "0" ) {
                // アルファベット以外を含む場合はファイル名を日時とする
                $saveFileName = date("Ymd_His", time());
            } else {
                if ( preg_match("/\.jpg$/ui", $name) == true ) {
                    $ret = explode('.jpg', $name);
                } elseif ( preg_match("/\.jpeg$/ui", $name) == true ) {
                    $ret = explode('.jpeg', $name);
                } elseif ( preg_match("/\.png$/ui", $name) == true ) {
                    $ret = explode('.png', $name);
                }
                $saveFileName = $ret[0]; // 拡張子を除いたそのまま
            }
 
            // マイクロ秒をファイル名に付加
            $saveFileName = FILE_PATH . '[' . (microtime()*1000000) . ']' . $saveFileName;
 
            if ( in_array($fileParts['extension'], $fileTypes) ) {
 
                if ( move_uploaded_file($_FILES["upfile"]["tmp_name"][$i], $saveFileName . '.' . $fileParts['extension']) ) {
                    //chmod($fileName, 0644);
                    echo $_FILES["upfile"]["name"][$i] . "をアップロードしました。<br>";
                } else {
                    echo "アップロードエラー";
                }
 
            } else {
              echo "アップロードの対象は画像ファイル（.jpg/.jpeg/.png）のみです。";
            }
        }
    }
}


?>