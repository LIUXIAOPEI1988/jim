<?php require_once('../config.php');?>
<!DOCTYPE html>
<html>
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50856039-1', 'jim-ltd.com');
  ga('send', 'pageview');

</script>
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
			<div class="contact_form" id="form">
				<form name="form01" action="index.php#form" method="POST">
					<div class="in">
						<table>
							<tr>
								<th>お名前<span>[必須]</span></th>
								<td>
									<input type="text" name="name01" value="<?php echo htmlspecialchars($form['form']['name01']); ?>" placeholder="（例）鈴木　太郎">
									<p class="error"><?php echo $form['error']['name01']; ?></p>
								</td>
							</tr>
							<tr>
								<th>ふりがな<span>[必須]</span></th>
								<td>
									<input type="text" name="name02" value="<?php echo htmlspecialchars($form['form']['name02']); ?>" placeholder="（例）すずき　たろう">
									<p class="error"><?php echo $form['error']['name02']; ?></p>
								</td>
							</tr>
							<tr>
								<th>御社名</th>
								<td><input type="text" name="name03" value="<?php echo htmlspecialchars($form['form']['name03']); ?>" placeholder="（例）日本産業機械株式会社"></td>
							</tr>
							<tr>
								<th>所属部署名</th>
								<td><input type="text" name="name04" value="<?php echo htmlspecialchars($form['form']['name04']); ?>" placeholder="（例）○○事業部"></td>
							</tr>
							<tr>
								<th>郵便番号</th>
								<td>
									<div class="zipbox">
										<input type="text" name="zip" value="<?php echo htmlspecialchars($form['form']['zip']); ?>" placeholder="（例）141-0031"><!-- <a href="https://postcode.goo.ne.jp/" target="_blank" class="zipbtn">住所検索</a> -->
									</div>
								</td>
							</tr>
							<tr>
								<th>住所</th>
								<td><input type="text" name="address" value="<?php echo htmlspecialchars($form['form']['address']); ?>" placeholder="（例）東京都品川区西五反田2-15-7　ジブラルタ生命五反田ビル7階" class="full"></td>
							</tr>
							<tr>
								<th>メールアドレス<span>[必須]</span></th>
								<td>
									<input type="text" name="email" value="<?php echo htmlspecialchars($form['form']['email']); ?>" placeholder="（例）sample@jim-ltd.com">
									<p class="error"><?php echo $form['error']['email']; ?></p>
								</td>
							</tr>
							<tr>
								<th>電話番号<span>[必須]</span></th>
								<td>
									<input type="text" name="tel" value="<?php echo htmlspecialchars($form['form']['tel']); ?>" placeholder="（例）03-6431-9687">
									<p class="error"><?php echo $form['error']['tel']; ?></p>
								</td>
							</tr>
							<tr>
								<th>お問い合わせ内容<span>[必須]</span></th>
								<td>
									<textarea name="message"><?php echo htmlspecialchars($form['form']['message']); ?></textarea>
									<p class="error"><?php echo $form['error']['message']; ?></p>
								</td>
							</tr>
						</table>
					</div>
					<p class="submit"><a href="javascript:void(0)" onclick="document.form01.submit();return false;">入力内容を確認する</a></p>
					<input name="txtFlag" type="hidden" id="txtFlag" value="check">
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
<script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script>
	new WOW().init();
	$(function() {
	    $('input[name="zip"]').keyup( function( e ) {
	        AjaxZip3.zip2addr('zip','','address','address');
	    } )
	} );
</script>
</body>
</html>
