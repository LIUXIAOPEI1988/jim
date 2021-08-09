<?php

session_start();

mb_language('Japanese');
mb_internal_encoding('UTF-8');

// 定義
$form_page   = "inc/form.php";														// 入力画面
$check_page   = "inc/check.php";													// 確認画面
$thanks_page   = "inc/thanks.php";													// 完了画面

$mail_self    = "inc/mail_self.php";													// 自分に届くメール
$mail_opponent    = "inc/mail_opponent.php";										// 相手に届くメール
$txtFlag = isset($_POST['txtFlag']) ? $_POST['txtFlag'] : '';
$mode = isset($_GET['mode']) ? $_GET['mode'] : '';


$form = array(
	'form' => array(
		'name01' => '',
		'name02' => '',
		'name03' => '',
		'name04' => '',
		'zip' => '',
		'address' => '',
		'email' => '',
		'tel' => '',
		'message' => '',
	),
	'error' => array(
		'name01' => '',
		'name02' => '',
		'email' => '',
		'tel' => '',
		'message' => '',
	)
);

foreach($form['form'] as $key => $value){
	if(isset($_SESSION['form']) and is_array($_SESSION['form'])){
		if(isset($_SESSION['form'][$key])){
			$form['form'][$key] = $_SESSION['form'][$key];
		}
	}
	if(isset($_POST[$key]) and is_string($_POST[$key])){
		$form['form'][$key] = $_POST[$key];
	}
}

if ($txtFlag == ""){																	// フラグに何も入力されていないとき
	if($mode != 'back'){													// セッションをリセット
		unset($_SESSION['form']);
		require_once $form_page;
	}else{
		require_once $form_page;
	}
	exit;
}


if ($txtFlag == "check"){															// 確認ボタン押下時
	$form['form']['name01']     = str_replace(array("\r","\n"), '', trim(mb_convert_kana($form['form']['name01'], 'KVas'))); //お名前
	$form['form']['name02']     = str_replace(array("\r","\n"), '', trim(mb_convert_kana($form['form']['name02'], 'KVas'))); //ふりがな
	$form['form']['name03']     = str_replace(array("\r","\n"), '', trim(mb_convert_kana($form['form']['name03'], 'KVas'))); //御社名
	$form['form']['name04']     = str_replace(array("\r","\n"), '', trim(mb_convert_kana($form['form']['name04'], 'KVas'))); //所属部署名
	$form['form']['zip']      = str_replace(array("\r","\n"), '', trim(mb_convert_kana($form['form']['zip'], 'hkas'))); //郵便番号
	$form['form']['address']  = str_replace(array("\r","\n"), '', trim(mb_convert_kana($form['form']['address'], 'KVas'))); //所在地
	$form['form']['tel']      = str_replace(array("\r","\n"), '', trim(mb_convert_kana($form['form']['tel'], 'hkas'))); //電話番号
	$form['form']['email']    = str_replace(array("\r","\n"), '', trim(mb_convert_kana($form['form']['email'], 'as'))); //メールアドレス
	$form['form']['message']  = trim($form['form']['message']); //お問い合わせ内容

	$error = 0;

	// お名前
	if((empty($form['form']['name01'])) ){
		$error++;
		$form['error']['name01'] = '※お名前を入力してください。';
	}
	// ふりがな
	if((empty($form['form']['name02'])) ){
		$error++;
		$form['error']['name02'] = '※ふりがなを入力してください。';
	}

	// メールアドレス
	if((empty($form['form']['email'])) ){
		$error++;
		$form['error']['email'] = '※メールアドレスを入力してください。';
	}
	else if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $form['form']['email'])){
		$error++;
		$form['error']['email'] = '※メールアドレスは正しくありません。';
	}
	// 電話番号
	if((empty($form['form']['tel'])) ){
		$error++;
		$form['error']['tel'] = '※電話番号を入力してください。';
	}

	// ご相談内容
	if((empty($form['form']['message']))){
		$error++;
		$form['error']['message'] = '※お問い合わせ内容を入力してください。';
	}

	if($error == 0){
		$_SESSION['form'] = $form['form'];
		require_once $check_page;
		exit;
	}else{
		require_once $form_page;
		exit;
	}
}

if ($txtFlag == "send"){																// 送信ボタン押下時
	if(!isset($_SESSION['form'])){
		require_once $form_page;
		exit;
	}
	require_once $mail_self;
	require_once $mail_opponent;

	mb_send_mail($send_address, $send_subject, $send_body, $additional_headers);
	mb_send_mail($_SESSION['form']['email'], $thanks_subject, $thanks_body, $thanks_additional_headers);
	unset($_SESSION['form']);

	require_once $thanks_page;
}

?>