<?php require_once('config.php');?>
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
<title>日本産業機械株式会社</title>
<link rel="shortcut icon" href="<?php echo $src; ?>/favicon.ico" type="image/x-icon" />
<meta property="og:image" content="<?php echo $src; ?>/ogimage.jpg" />
<meta name="keywords" content="産業機械,建材,工場ライン機器,門扉,開閉装置,ロボット,きのこ栽培装置,製造,港区,日本産業機械株式会社" /> 
<meta name="description" content="カタログにない機械づくり。各種工場ライン機器、門扉および開閉装置などの受注生産を手がけています。" /> 
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
<div id="wrapper" class="index">
	
	<?php
	// header 読み込み
	include_once('./include/header.php');
	?>
		<section class="top_video">
			<!-- <img src="<?php echo $src; ?>/common/img/main.jpg" width="100%" height="100%" alt=""> -->
			<video loop="loop" muted="muted" playsinline="" autoplay="autoplay">
				<source src="<?php echo $src; ?>/video/key.mp4" type="video/mp4" />
			</video>
			<img src="<?php echo $src; ?>/common/img/main_sp.jpg" width="100%" height="100%" alt="" class="visiblets">
			<div class="txt"><img src="<?php echo $src; ?>/common/img/logo_main.png" alt="JIM"></div>
		</section><!-- /top_video -->
	<article>
		
		
		<section class="top_intro js-showhead">
			<div class="in">
				<div class="txt01 wow fadeInUp01" data-wow-duration="1.5s">オンリーワンの技術発信地として<span class="big">カタログにない<br>機械づくり</span></div>
				<div class="txt02 wow fadeInUp01" data-wow-duration="1.5s" data-wow-delay="0.3s">ご依頼は、製造分野や各種施設まで幅広い分野にわたり、<br class="visiblepc">その9割以上が受注生産。<br>難問に挑戦するたび「技術包容力」と「技術情報力」を獲得し成長してきました。<br>当社はこれからも、ここにしかない技術と情報の発信地として<br class="visiblepc">満足いただける機械づくりをめざしていきます。</div>
			</div>
		</section><!-- /top_intro -->
		<section class="top_business">
			<div class="in">
				<h2 class="hd01 wow fadeInUp01" data-wow-duration="1.5s"><span>BUSINESS</span>事業について</h2>
				<div class="top_business_box">
					<a href="<?php echo $src; ?>/business/industrial_machinery/" class="item wow Shrink" data-wow-duration="1.5s" data-wow-delay="0.3s">
						<div class="img">
							<img src="<?php echo $src; ?>/img/top/img01.jpg" alt="産業機械部門">
							<div class="text">
								<p class="en roboto">Industrial Machinery</p>
								<p class="ja">産業機械部門</p>
							</div>
						</div>
						<div class="txt">工場のラインから産業ロボット、省力化装置まで！医療、食品、プラスチックなど、分野も多岐にわたります。</div>
					</a>
					<a href="<?php echo $src; ?>/business/building_materials/" class="item wow Shrink" data-wow-duration="1.5s" data-wow-delay="0.6s">
						<div class="img">
							<img src="<?php echo $src; ?>/img/top/img02.jpg" alt="建材部門">
							<div class="text">
								<p class="en roboto">Building Materials</p>
								<p class="ja">建材部門</p>
							</div>
						</div>
						<div class="txt">建物一般の門扉開閉装置から医療施設の放射線遮蔽装置、舞台装置、動物園などの各種扉まで。</div>
					</a>
					<a href="<?php echo $src; ?>/business/pet_supplies/" class="item wow Shrink" data-wow-duration="1.5s" data-wow-delay="0.9s">
						<div class="img">
							<img src="<?php echo $src; ?>/img/top/img03.jpg" alt="ペット関連商品">
							<div class="text">
								<p class="en roboto">Pet Supplies</p>
								<p class="ja">ペット関連商品</p>
							</div>
						</div>
						<div class="txt">動物用プールと水中トレッドミルなど愛犬の健康管理を目的とした商品開発に取り組んでいます。</div>
					</a>
					<a href="<?php echo $src; ?>/business/integrated_manufacturing/" class="item wow Shrink" data-wow-duration="1.5s" data-wow-delay="1.2s">
						<div class="img">
							<img src="<?php echo $src; ?>/img/top/img04.jpg" alt="自社一貫生産">
							<div class="text">
								<p class="en roboto">Integrated Manufacturing</p>
								<p class="ja">自社一貫生産</p>
							</div>
						</div>
						<div class="txt">自社一貫生産により、構成部品一つひとつのバランスに配慮でき、常に高い品質の維持を実現しています。</div>
					</a>
				</div>
			</div>
		</section><!-- /top_business -->
		<section class="top_about">
			<div class="in">
				<h2 class="hd01 white wow fadeInUp01" data-wow-duration="1.5s"><span>ABOUT US</span>当社について</h2>
				<div class="box">
					<a href="<?php echo $src; ?>/about/" class="item wow fadeInDown01" data-wow-duration="1.5s" data-wow-delay="0.2s">
						<div class="inner">
							<div class="img"><img src="<?php echo $src; ?>/img/top/img05.jpg" alt="ごあいさつ・当社の姿勢"></div>
							<div class="num ffBC">01</div>
							<div class="name">ごあいさつ・当社の姿勢</div>
						</div>
					</a>
					<a href="<?php echo $src; ?>/outline/" class="item wow fadeInDown01" data-wow-duration="1.5s" data-wow-delay="0.5s">
						<div class="inner">
							<div class="img"><img src="<?php echo $src; ?>/img/top/img06.jpg" alt="概要・沿革"></div>
							<div class="num ffBC">02</div>
							<div class="name">概要・沿革</div>
						</div>
					</a>
					<a href="<?php echo $src; ?>/access/" class="item wow fadeInDown01" data-wow-duration="1.5s" data-wow-delay="0.8s">
						<div class="inner">
							<div class="img"><img src="<?php echo $src; ?>/img/top/img07.jpg" alt="地図・所在地"></div>
							<div class="num ffBC">03</div>
							<div class="name">地図・所在地</div>
						</div>	
					</a>
				</div>
			</div>
		</section><!-- /top_about -->
		<section class="top_recruit">
			<div class="in">
				<a href="<?php echo $src; ?>/recruit/" class="wow fadeInUp01" data-wow-duration="1.5s">
					<div class="box02">技術包容力育ててます</div>
					<div class="box01">
						<img src="<?php echo $src; ?>/img/top/txt01_pc.png" alt="recruit">
						<span>ー 採用情報 ー</span>
					</div>
				</a>
			</div>
		</section><!-- /top_recruit -->
	</article>
	<?php
	// footer 読み込み
	include_once('./include/footer.php');
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
