<?php

////自分に届くメール
$send_address = 'jim@river.ocn.ne.jp';
$send_subject = 'メールフォームからお問い合わせがありました。';
$additional_headers = "From:".$_SESSION['form']['email'];
$message = str_replace(array("<br />"), '', $_SESSION['form']['message']);

//自分に届くメールの内容
$send_body = <<<EOM

メールフォームからお問い合わせがありました。
お問い合わせの内容は以下の通りです。

--------------------------------------------------------------------------

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

--------------------------------------------------------------------------

送信者のIPアドレス：{$_SERVER['REMOTE_ADDR']}
送信者のホスト名：{$_SERVER['REMOTE_HOST']}
送信者のブラウザ：{$_SERVER['HTTP_USER_AGENT']}

EOM;

?>
