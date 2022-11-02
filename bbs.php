<?php

if( empty($_POST["name"]) or empty($_POST["message"] ) ){
    echo '名前かメッセージが入力されていません。';
    exit();
} else
    echo '書き込み完了';
$fp = fopen("messages.html", "a+");
fputs($fp, sprintf("<b>%s</b> 「%s」<br />", $_POST["name"], $_POST["message"]));
fclose($fp);

?>
