<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cmn-Hans">
<head>
	<title>Analytttics - Dribbble 综合实力评价系统</title>
	<meta charset="UTF-8">
	<meta name="robots" content="noodp"/>
	<meta name="description" content="Dribbble 综合实力评价系统"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<link rel="stylesheet" rev="stylesheet" href="main.css" type="text/css" media="all" />
	
	<script type="text/javascript" src="http://anyway-web.b0.upaiyun.com/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src='http://anyway-web.b0.upaiyun.com/js/jribbble.min.js'></script>	
	<script type="text/javascript" src="http://anyway-web.b0.upaiyun.com/js/d3.min.js"></script>
	<script type="text/javascript" src="http://anyway-web.b0.upaiyun.com/js/main.js"></script>
	<script type="text/javascript" src='http://anyway-web.b0.upaiyun.com/js/social-share.min.js'></script>
	
	<link rel="shortcut icon" href="favicon.png" />
	
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Analytttics - Dribbble 综合实力评价系统" />
	<meta property="og:description" content="Evaluate your Dribbble activities, in a better way." />
	<meta property="og:url" content="http://Anyway.Design/analytttics/index-cn.php" />
	<meta property="og:site_name" content="Analytttics" />
	<meta property="og:image" content="http://anyway.design/analytttics/preview-cn.png" />
	
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="Analytttics - Dribbble 综合实力评价系统" />
	<meta name="twitter:title" content="Analytttics – Your Personal Dribbble Score" />
	<meta name="twitter:site" content="@anyway__fm" />
	<meta name="twitter:image" content="http://anyway.design/analytttics/preview-cn.png" />
	
</head>

<body>
	<div class="home<?php if ($_GET['n']) {echo(' hide');}?>">
		<div class="inner v-align">
			<h1>
				<svg xmlns="http://www.w3.org/2000/svg" width="552.969" height="54.219" viewBox="0 0 552.969 54.219">
				  <path class="logo-svg" d="M571.814,46.359a54.091,54.091,0,0,0-8.95-4.115,25.071,25.071,0,0,0-8.033-1.774q-3.032,0-3.031,2.2a2.87,2.87,0,0,0,1.938,2.625,39.159,39.159,0,0,0,6.167,2.058,73.714,73.714,0,0,1,8.773,2.98,15.753,15.753,0,0,1,6.1,4.718,13.084,13.084,0,0,1,2.608,8.479,14.489,14.489,0,0,1-2.784,9.046,16.447,16.447,0,0,1-7.5,5.428,29.684,29.684,0,0,1-10.5,1.774,42.577,42.577,0,0,1-13.213-2.164,37.648,37.648,0,0,1-11.522-5.924l6.06-12.416a33.2,33.2,0,0,0,9.373,5.57,26.014,26.014,0,0,0,9.443,2.306,5.334,5.334,0,0,0,2.89-.674,2.306,2.306,0,0,0,1.057-2.093,2.946,2.946,0,0,0-2.009-2.661,35.76,35.76,0,0,0-6.307-2.022,65.639,65.639,0,0,1-8.7-2.8,15.534,15.534,0,0,1-6.026-4.505,12.357,12.357,0,0,1-2.537-8.159,14.77,14.77,0,0,1,2.608-8.691,16.426,16.426,0,0,1,7.4-5.711,28.928,28.928,0,0,1,11.135-1.987,42,42,0,0,1,11.522,1.632,37.573,37.573,0,0,1,9.972,4.328ZM503.961,64.026a9.307,9.307,0,0,0,5.25,1.561,12.51,12.51,0,0,0,5.743-1.6,19.625,19.625,0,0,0,5.462-4.222l9.443,10.146a31.006,31.006,0,0,1-9.971,7.343,27.089,27.089,0,0,1-24.948-.639,24.242,24.242,0,0,1-9.337-9.365,26.88,26.88,0,0,1-3.383-13.445,25.549,25.549,0,0,1,3.453-13.232,24.525,24.525,0,0,1,9.549-9.188A28.232,28.232,0,0,1,509,28.054a29.6,29.6,0,0,1,20.859,9.224l-9.443,11.281a18.009,18.009,0,0,0-5.25-4.931,11.394,11.394,0,0,0-5.955-1.88,9.469,9.469,0,0,0-5.25,1.525,10.171,10.171,0,0,0-3.665,4.222,13.83,13.83,0,0,0-1.3,6.1,14.057,14.057,0,0,0,1.3,6.137A10.361,10.361,0,0,0,503.961,64.026ZM461.949,29.118H478.3V78.855h-16.35V29.118Zm-16,49.736H429.6V42.1h-9.745V29.118H458.4V42.1H445.954V78.855Zm-39.5,0H390.109V42.1h-9.746V29.118h35.911V42.1h-9.816V78.855Zm-39.5,0H350.614V42.1H338.235l6.583-12.984h31.961V42.1h-9.816V78.855Zm-43.923,0H306.69V63.742L288.649,29.118h16.279l9.937,19.157,9.584-19.157h16.279L323.04,63.387V78.855Zm-25.175,0H260.937V29.118h16.35V65.161h20.578V78.855ZM233.251,47.977l-5.851,19.2h6.82l2.592,11.676H208.2l16.384-49.736h18.1l15.776,49.736H242.329Zm-61.22,5.477v25.4h-14.87V29.118h13.672L190.354,54.66V29.118h14.8V78.855H191.482Zm-43.113-5.477-5.852,19.2h6.82l2.593,11.676h-28.61l16.385-49.736h18.1l15.775,49.736H138ZM35.36,78.96L24.755,46.1,52.519,25.791,80.283,46.1l-10.6,32.86H35.36ZM52.521,44.581L42.449,51.949,46.3,63.869H58.745l3.847-11.921Z" transform="translate(-24.75 -25.781)"/>
				</svg>
			</h1>
			<div class="tagline">Dribbble 综合实力评价，<span class="mobile-only"><br /></span>我们不光只看粉丝数</div>
			<form class="submit-form" action="" method="get">
				<input type="text" name="n" value="输入你的 Dribbble 用户名进行评测，或者试试看「jjying」" class="input-box" onFocus="this.value='';$('.input-box').css('color','#444');"/><input type="submit" value="OK" class="btn"/>
			</form>
		</div>
		
		<footer class="footer home-footer">
			<div class="inner">
				由 <a href="http://Anyway.FM">Anyway.FM</a> 的 <a href="https://dribbble.com/jjying">JJ Ying</a> 设计开发<span>•</span>源代码在 <a href="#">GitHub</a> 上<span>•</span>所有指数仅供娱乐，请勿严肃对待<span>•</span><a href="index.php">for English</a>
			</div>
		</footer>
	</div>
	
	<header class="<?php if ($_GET['n']=='') {echo('hide');}?>">
		<div class="logo">
			<a href="index-cn.php">
				<svg xmlns="http://www.w3.org/2000/svg" width="552.969" height="54.219" viewBox="0 0 552.969 54.219">
			  <path class="logo-svg" d="M571.814,46.359a54.091,54.091,0,0,0-8.95-4.115,25.071,25.071,0,0,0-8.033-1.774q-3.032,0-3.031,2.2a2.87,2.87,0,0,0,1.938,2.625,39.159,39.159,0,0,0,6.167,2.058,73.714,73.714,0,0,1,8.773,2.98,15.753,15.753,0,0,1,6.1,4.718,13.084,13.084,0,0,1,2.608,8.479,14.489,14.489,0,0,1-2.784,9.046,16.447,16.447,0,0,1-7.5,5.428,29.684,29.684,0,0,1-10.5,1.774,42.577,42.577,0,0,1-13.213-2.164,37.648,37.648,0,0,1-11.522-5.924l6.06-12.416a33.2,33.2,0,0,0,9.373,5.57,26.014,26.014,0,0,0,9.443,2.306,5.334,5.334,0,0,0,2.89-.674,2.306,2.306,0,0,0,1.057-2.093,2.946,2.946,0,0,0-2.009-2.661,35.76,35.76,0,0,0-6.307-2.022,65.639,65.639,0,0,1-8.7-2.8,15.534,15.534,0,0,1-6.026-4.505,12.357,12.357,0,0,1-2.537-8.159,14.77,14.77,0,0,1,2.608-8.691,16.426,16.426,0,0,1,7.4-5.711,28.928,28.928,0,0,1,11.135-1.987,42,42,0,0,1,11.522,1.632,37.573,37.573,0,0,1,9.972,4.328ZM503.961,64.026a9.307,9.307,0,0,0,5.25,1.561,12.51,12.51,0,0,0,5.743-1.6,19.625,19.625,0,0,0,5.462-4.222l9.443,10.146a31.006,31.006,0,0,1-9.971,7.343,27.089,27.089,0,0,1-24.948-.639,24.242,24.242,0,0,1-9.337-9.365,26.88,26.88,0,0,1-3.383-13.445,25.549,25.549,0,0,1,3.453-13.232,24.525,24.525,0,0,1,9.549-9.188A28.232,28.232,0,0,1,509,28.054a29.6,29.6,0,0,1,20.859,9.224l-9.443,11.281a18.009,18.009,0,0,0-5.25-4.931,11.394,11.394,0,0,0-5.955-1.88,9.469,9.469,0,0,0-5.25,1.525,10.171,10.171,0,0,0-3.665,4.222,13.83,13.83,0,0,0-1.3,6.1,14.057,14.057,0,0,0,1.3,6.137A10.361,10.361,0,0,0,503.961,64.026ZM461.949,29.118H478.3V78.855h-16.35V29.118Zm-16,49.736H429.6V42.1h-9.745V29.118H458.4V42.1H445.954V78.855Zm-39.5,0H390.109V42.1h-9.746V29.118h35.911V42.1h-9.816V78.855Zm-39.5,0H350.614V42.1H338.235l6.583-12.984h31.961V42.1h-9.816V78.855Zm-43.923,0H306.69V63.742L288.649,29.118h16.279l9.937,19.157,9.584-19.157h16.279L323.04,63.387V78.855Zm-25.175,0H260.937V29.118h16.35V65.161h20.578V78.855ZM233.251,47.977l-5.851,19.2h6.82l2.592,11.676H208.2l16.384-49.736h18.1l15.776,49.736H242.329Zm-61.22,5.477v25.4h-14.87V29.118h13.672L190.354,54.66V29.118h14.8V78.855H191.482Zm-43.113-5.477-5.852,19.2h6.82l2.593,11.676h-28.61l16.385-49.736h18.1l15.775,49.736H138ZM35.36,78.96L24.755,46.1,52.519,25.791,80.283,46.1l-10.6,32.86H35.36ZM52.521,44.581L42.449,51.949,46.3,63.869H58.745l3.847-11.921Z" transform="translate(-24.75 -25.781)"/>
			</svg>
			</a>
		</div>
		<form class="v-align submit-form" action="" method="get">
			<input type="text" name="n" value="输入 Dribbble 用户名" class="input-box" onFocus="this.value='';$('.input-box').css('color','#aaa');"/>
			<input type="submit" value="OK" class="btn"/>
		</form>
		<nav class="v-align">
			<ul>
				<li><a href="http://Anyway.FM">Anyway.FM 旗下产品</a></li>
				<li><a href="#">源代码 @ GitHub</a></li>
				<li><a href="index.php<?php if ($_GET['n']) {echo('?n='.$_GET['n']);}?>">English</a></li>
			</ul>
		</nav>
	</header>
	<main class="<?php if ($_GET['n']=='') {echo('hide');}?>">
		<section class="responsive score">
			<div class="responsive profile">
				<div class="profile-bio">
					<div class="inner v-align">
						<div class="profile-avatar">
							<svg width="900px" height="900px" viewBox="0 0 900 900" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							        <g id="ball">
							            <rect id="Rectangle" fill="#F2F2F2" x="0" y="0" width="900" height="900"></rect>
							            <path d="M449.688,762.375 C277.271,762.375 137,622.105 137,449.688 C137,277.271 277.271,137.001 449.688,137.001 C622.105,137.001 762.375,277.271 762.375,449.688 C762.375,622.105 622.104,762.375 449.688,762.375 Z M713.394,492.491 C704.257,489.606 630.726,467.676 547.031,481.073 C581.964,577.073 596.18,655.253 598.917,671.501 C660.150901,630.192062 701.582064,565.405314 713.394,492.491 Z M554.016,695.952 C550.043,672.52 534.536,590.852 497.039,493.414 C496.452,493.614 495.865,493.804 495.278,494.014 C344.633,546.502 290.556,650.972 285.75,660.797 C362.150095,720.368864 464.845993,733.826679 554.016,695.952 Z M468.365,452.428 C471.845667,451.303333 475.353667,450.244 478.889,449.25 C472.189,434.078 464.882,418.888 457.236,403.925 C323.853,443.838 194.426,442.174 182.741,441.938 C182.659,444.65 182.604,447.368 182.604,450.099 C182.552786,516.079513 207.023783,579.724562 251.265,628.675 C257.315,618.319 330.616,496.952 468.365,452.428 Z M188.246,395.393 C200.192,395.551 310.229,396.029 435.161,362.852 C390.907,284.185 343.179,218.045 336.138,208.389 C261.418,243.638 205.565,312.515 188.246,395.393 Z M486.756,346.791 C581.728,311.191 621.932,257.156 626.736,250.314 C561.465162,192.348783 471.963326,169.985742 387.099,190.438 C394.482,200.322 442.99,266.38 486.756,346.791 Z M656.427,281.198 C650.797,288.814 606.041,346.189 507.29,386.506 C513.505,399.228 519.463,412.167 525.01,425.191 C526.976,429.808333 528.893667,434.403 530.763,438.975 C619.632,427.8 707.933,445.71 716.739,447.575 C716.228694,386.855109 694.944432,328.140231 656.427,281.198 Z" fill="#999999"></path>
							        </g>
							    </g>
							</svg>
						</div>
						<div class="profile-name"><h2><span class="user-name"><i class="placeholder">✱</i></span> 加入 Dribbble 已经 <span class="user-years"><i class="placeholder">✱</i></span> 年了，总共上传了 <span class="user-shots"><i class="placeholder">✱</i></span> 个作品，获得了 <span class="user-total-favs"><i class="placeholder">✱</i></span> 次加心和 <span class="user-total-comments"><i class="placeholder">✱</i></span> 条评论。</h2></div>
					</div>
				</div>
				<div class="profile-total">
					<div class="inner v-align">
						<h4 class="total-score"><i class="placeholder">✱</i></h4>
						<h3>总体评价</h3>
						<div class="score-desc">基于以下五个指标</div>
					</div>
				</div>
			</div>
			<div class="responsive sub-scores diligence">
				<div class="inner v-align">
					<h4 class="diligence-score"><i class="placeholder">✱</i></h4>
					<h3 class="diligence-title">勤劳度</h3>
					<div class="score-desc">每个月的作品上传数量</div>
				</div>
			</div>
			
			<div class="responsive sub-scores attractions">
				<div class="inner v-align">
					<h4 class="attractions-score"><i class="placeholder">✱</i></h4>
					<h3 class="attractions-title">吸引力</h3>
					<div class="score-desc">粉丝中活跃用户的比例</div>
				</div>
			</div>
			
			<div class="responsive sub-scores influence">
				<div class="inner v-align">
					<h4 class="influence-score"><i class="placeholder">✱</i></h4>
					<h3 class="influence-title">影响力</h3>
					<div class="score-desc">每年增加的粉丝数</div>
				</div>
			</div>
			
			<div class="responsive sub-scores appreciation">
				<div class="inner v-align">
					<h4 class="appreciation-score"><i class="placeholder">✱</i></h4>
					<h3 class="appreciation-title">赞赏率</h3>
					<div class="score-desc">作品加星与浏览量比值</div>
				</div>
			</div>
			
			<div class="responsive sub-scores engagement">
				<div class="inner v-align">
					<h4 class="engagement-score"><i class="placeholder">✱</i></h4>
					<h3 class="engagement-title">评论率</h3>
					<div class="score-desc">作品所获得的评论</div>
				</div>
			</div>
		</section>			

		<section class="responsive chart-share">
			<div class="chart">
				<div class="chart-loading"><i class="placeholder">✱</i></div>
				<div id="chart" class="v-align"></div>
			</div>
			<div class="responsive share">
					<div class="social-share" data-initialized="true" data-title="Dribbble 综合实力评价系统" data-description="Analytttics - Dribbble 综合实力评价系统" data-image="http://anyway.design/analytttics/preview-cn.png" data-wechat-qrcode-title="扫二维码分享" data-wechat-qrcode-helper="<p>微信里点“发现”，扫一下</p><p>二维码便可将本站分享至朋友圈。</p>" data-twitter-via="">
					    <a href="#" class="social-share-icon icon-weibo"><span class="v-align"> 分享到微博</span></a>
					    <a href="#" class="social-share-icon icon-wechat"><span class="v-align">分享到微信</span></a>
					</div>
			</div>
		</section>
		
		<section class="mobile-input">
			<h2>测一下你自己的 Dribbble 评分吧~</h2>
			<form class="submit-form" action="" method="get">
				<input type="text" name="n" value="" class="input-box"/><input type="submit" value="OK" class="btn"/>
			</form>
		</section>
	</main>
	
	
	
	
	<footer class="<?php if ($_GET['n']=='') {echo('hide');}?>">
		<div class="inner">
			由 <a href="http://Anyway.FM">Anyway.FM</a> 主播 <a href="https://dribbble.com/jjying">JJ Ying</a> 设计开发，源代码在 <a href="#">GitHub</a> 上，所有指数仅供娱乐，请勿严肃对待 ☻ <a href="mailto:hello@anyway.fm">联系我们</a>
		</div>
	</footer>

<?php
if ($_GET['n']) {
	$userName = $_GET['n'];
	$day = date('y-m-d');
	$folderPath = 'log/'.date('y-m-d');
	if(is_dir($folderPath) == 0) {
		mkdir($folderPath,0777,true);
	}
	$logFileUrl = $folderPath. "/" . $userName . ".txt";
	$logFile = fopen($logFileUrl, "a");
	fwrite($logFile, date('H:i:s')."\n");
	fclose($logFile);
}
?>

<!--BA-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?e504a84b35d39da2620d74bea38d9ef3";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


</body>
</html>