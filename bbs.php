<?php

if( empty($_POST["name"]) or empty($_POST["message"] ) ){
    echo '名前かメッセージが入力されていません。';
    exit();
} else
    echo '書き込み完了';
$fp = fopen("saito.html", "a+");
fputs($fp, sprintf("<b>%s</b> 「%s」<br />", $_POST["name"], $_POST["message"]));
fclose($fp);

?>
<HTML> 
    <HEAD> 
        <TITLE>ジャンプ</TITLE> 
        <META http-equiv="Refresh" content="0.1;URL=comment.php"> 
            </HEAD> 
        <BODY> 
            <P>1秒後にジャンプします</P> 
            <?php $name = $_POST{'name'}; $txt = $_POST{'txt'}; $txt = htmlspecialchars($txt); if(isset($txt)) { $file = file_get_contents('log.html'); $fp = fopen('log.html', 'w'); fputs($fp, $name . "<br />" . $txt . "<hr>" . "\n" . $file); fclose($fp); } ?> 
        </BODY> 
        </HTML> 
