<?php require_once('../../config.php');?>
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
<title>ペット関連商品｜日本産業機械株式会社</title>
<link rel="shortcut icon" href="<?php echo $src; ?>/favicon.ico" type="image/x-icon" />
<meta property="og:image" content="<?php echo $src; ?>/ogimage.jpg" />
<meta name="keywords" content="ペット関連商品" />
<meta name="description" content="動物用プールや水中トレッドミルなどペット関連商品の開発を行っています。" />
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
	include_once('../../include/header.php');
	?>
	<section id="teaser" class="teaser_business teaserh02">
		<div class="bgtext roboto"><img src="<?php echo $src; ?>/common/img/teaser/txt_business.png" alt="business"></div>
		<h2 class="teasertit"><span class="roboto">BUSINESS</span>事業について</h2>
	</section><!-- teaser -->
	<article class="business03 page">
		<div id="page_slug" class="visiblepc">
			<div class="inner">
				<span class="roboto">Pet Supplies</span>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;ペット関連商品 
			</div>
		</div><!-- contents -->
		<section id="contents">
			<div id="breadcrumb" class="visiblepc">
				<a href="<?php echo $src; ?>/">HOME</a> / <a href="<?php echo $src; ?>/business/">事業について</a> / <span>ペット関連商品</span>
			</div>
			<div class="in">
				<div class="flex_row">
					<aside id="side">
						<ul>
							<li><a href="<?php echo $src; ?>/business/">事業について</a></li>
							<li><a href="<?php echo $src; ?>/business/industrial_machinery/">産業機械部門</a></li>
							<li><a href="<?php echo $src; ?>/business/building_materials/">建材部門</a></li>
							<li><span class="current">ペット関連商品</span></li>
							<li><a href="<?php echo $src; ?>/business/integrated_manufacturing/">自社一貫生産</a></li>
						</ul>
					</aside>
					<main id="main">
						<div class="cont01">
							<h3 class="hd02">ペット関連商品</h3>
							<p class="business_comment">「愛犬の肥満解消」と「基礎体力の強化」をコンセプトに<br class="visiblepc">プールとトレッドミルを一体化しました。</p>
						</div>
						<div class="cont02">
							<div class="item">
								<img src="<?php echo $src; ?>/img/business/business03_img01.jpg" alt="">
							</div>
						</div>
						<div class="cont03">
							<div class="visiblepc">
								<div class="item">
									<img src="<?php echo $src; ?>/img/business/business03_img06.jpg" alt="">
								</div>
							</div>
							<div class="visiblets">
								<div class="item">
									<img src="<?php echo $src; ?>/img/business/business03_img02.jpg" alt="動物用プール">
									<p>動物用プール （点検用扉を外した状態です。<br>プール内の清掃がとてもしやすいです。）</p>
								</div>
								<div class="item">
									<img src="<?php echo $src; ?>/img/business/business03_img03.jpg" alt="">
								</div>
								<div class="item">
									<img src="<?php echo $src; ?>/img/business/business03_img04.jpg" alt="動物用プールと水中トレッドミル">
									<p>動物用プールと水中トレッドミル</p>
								</div>
								<div class="item">
									<img src="<?php echo $src; ?>/img/business/business03_img05.jpg" alt="">
								</div>
							</div>
						</div>
					</main>
				</div>
			</div>
		</section><!-- contents -->
	</article>
	<?php
	// footer 読み込み
	include_once('../../include/footer.php');
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
