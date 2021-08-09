<?php
//相手に届く自動返信メール
$send_name = '日本産業機械株式会社';
$thanks_subject = '【日本産業機械株式会社】お問い合わせありがとうございます';
$send_name = mb_encode_mimeheader($send_name, 'ISO-2022-JP');
$thanks_additional_headers = "From:".$send_name." <".$send_address.">";
$message = str_replace(array("<br />"), '', $_SESSION['form']['message']);


//相手に届く自動返信メールの内容
$thanks_body = <<<EOM

お問い合わせいただきまして誠にありがとうございます。
下記内容にて受付をいたしました。

===================================================================

お名前：{$_SESSION['form']['name01']}
ふりがな：{$_SESSION['form']['name02']}
御社名：{$_SESSION['form']['name03']}
所属部署名：{$_SESSION['form']['name04']}
郵便番号：{$_SESSION['form']['zip']}
住所：{$_SESSION['form']['address']}
メールアドレス：{$_SESSION['form']['email']}
電話番号：{$_SESSION['form']['tel']}
お問い合わせ内容：
{$message}

===================================================================
日本産業機械株式会社
===================================================================


EOM;

?>