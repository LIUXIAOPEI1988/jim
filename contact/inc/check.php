<?php require_once('../config.php');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<title>お問い合わせ｜日本産業機械株式会社</title>
<link rel="shortcut icon" href="<?php echo $src; ?>/favicon.ico" type="image/x-icon" />
<meta property="og:image" content="<?php echo $src; ?>/ogimage.jpg" />
<meta name="keywords" content="お問い合わせ" />
<meta name="description" content="お問い合わせはこちらから" />
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo $src; ?>/common/css/import.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $src; ?>/common/css/animate.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $src; ?>/css/style.css" media="all" />


</head>
<body>
<div id="wrapper">
	
	<?php
	// header 読み込み
	include_once('../include/header.php');
	?>
	<section id="teaser" class="teaser_contact teaserh02">
		<div class="bgtext roboto"><img src="<?php echo $src; ?>/common/img/teaser/txt_contact.png" alt="CONTACT"></div>
		<h2 class="teasertit"><span class="roboto">CONTACT</span>お問い合わせ</h2>
	</section><!-- teaser -->
	<article class="contact page">
		<div id="page_slug" class="visiblepc">
			<div class="inner">
				<span class="roboto">CONTACT</span>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;お問い合わせ 
			</div>
		</div><!-- contents -->
		<section id="contents">
			<div id="breadcrumb" class="visiblepc">
				<a href="<?php echo $src; ?>/">HOME</a> / <span>お問い合わせ</span>
			</div>
			<div class="contact_form check" id="form">
				<form name="form01" action="index.php" method="POST">
					<div class="in">
						<table>
							<tr>
								<th>お名前<span>[必須]</span></th>
								<td>
									<?php echo htmlspecialchars($form['form']['name01']); ?>
								</td>
							</tr>
							<tr>
								<th>ふりがな<span>[必須]</span></th>
								<td>
									<?php echo htmlspecialchars($form['form']['name02']); ?>
								</td>
							</tr>
							<tr>
								<th>御社名</th>
								<td>
									<?php echo htmlspecialchars($form['form']['name03']); ?>
								</td>
							</tr>
							<tr>
								<th>所属部署名</th>
								<td>
									<?php echo htmlspecialchars($form['form']['name04']); ?>
								</td>
							</tr>
							<tr>
								<th>郵便番号</th>
								<td>
									<?php echo htmlspecialchars($form['form']['zip']); ?>
								</td>
							</tr>
							<tr>
								<th>住所</th>
								<td>
									<?php echo htmlspecialchars($form['form']['address']); ?>
								</td>
							</tr>
							<tr>
								<th>メールアドレス<span>[必須]</span></th>
								<td>
									<?php echo htmlspecialchars($form['form']['email']); ?>
								</td>
							</tr>
							<tr>
								<th>電話番号<span>[必須]</span></th>
								<td>
									<?php echo htmlspecialchars($form['form']['tel']); ?>
								</td>
							</tr>
							<tr>
								<th>お問い合わせ内容<span>[必須]</span></th>
								<td>
									<?php echo htmlspecialchars($form['form']['message']); ?>
								</td>
							</tr>
						</table>
					</div>
					<p class="submit"><a href="index.php?mode=back" class="backbtn">編集へ戻る</a><a href="javascript:void(0)" onclick="document.form01.submit();return false;">送信する</a></p>
					<input name="txtFlag" type="hidden" id="txtFlag" value="send">
				</form>
			</div>
		</section><!-- contents -->
	</article>
	<?php
	// footer 読み込み
	include_once('../include/footer.php');
	?>
</div><!-- /#wrapper -->

<script type="text/javascript" src="<?php echo $src; ?>/common/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $src; ?>/common/js/common.js"></script>
<script type="text/javascript" src="<?php echo $src; ?>/common/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="<?php echo $src; ?>/common/js/wow.min.js"></script>
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script>
	new WOW().init();
</script>
</body>
</html>
