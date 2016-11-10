<?php include "../include/lib.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<meta http-equiv="Refresh" content="1800;url=http://127.0.0.1/portfolio/" /> 
<meta name="Author" content="이명종" />
<meta name="Keyword" content="이명종의 포트폴리오" />
<meta name="Description" content="이명종의 포트폴리오를 소개한 웹사이트" />
<meta name="Copyright" content="2010 LMJ PORTFOLIO" />
<meta name="Classification" content="text" />
<?php
// Web Title
$res = mysql_query("select * from main_menu where mid='$_GET[mid]'",$cnt);
$data = mysql_fetch_array($res);

$mres = mysql_query("select * from sub_menu where sid='$_GET[sid]'",$cnt);
$mdata = mysql_fetch_array($mres);
?>
<title>Web Publisher :: LMJ :: - <?php echo $data[main_title]; ?> - <?php echo $mdata[sub_title]; ?></title>
<link rel="stylesheet" type="text/css" href="../common/common.css" />
<script type="text/javascript" src="../common/common.js"></script>
</head>

<body>
<div id="wrap">
<div id="main_page">
	
	<!-- Header -->
	<div id="header">
		<div class="logo">
			<a href="../index.php" onfocus="this.blur()"><img src="../images/logo.jpg" width="232" height="122" alt="STRAWBERRY WEBPUBLISHER" /></a>
		</div>
		<div class="header_r_blank"></div>
		<div class="gnb">
			<?php include "main_menu.php"; ?>
		</div>
		<div class="me_area">
			<div class="me_title">
				<a href="index.php?mid=profile&amp;sid=about_me"><img src="../images/more_bt.jpg" width="28" height="9" alt="전체보기" class="more_bt" /></a>
			</div>
			<div class="list" title="이명종&#13;Web publisher&#13;안녕하세요! 항상 새로운 변화를 시도하는&#13;신입 웹퍼블리셔입니다. 웹퍼블리셔라는 직업을..">
				<p><img src="../images/me_sample.jpg" width="75" height="84" alt="이명종" /></p>
				<h2>이명종</h2>
				<p>
					Web publisher<br />
					안녕하세요! 항상 새<br />
					로운 변화를 시도하<br />
					는 신입 웹퍼블리셔<br />
				</p>
				<p class="list_p">입니다. 웹퍼블리셔라는 직업을..</p>
			</div>
		</div>
		<div class="my_area">
			<div class="my_title">
				<a href="index.php?mid=profile&amp;sid=my_way"><img src="../images/more_bt.jpg" width="28" height="9" alt="전체보기" class="more_bt" /></a>			
			</div>
			<div class="list" title="웹퍼블리셔라는 직업을 알아갈수록&#13;내두손가락으로 이뤄내는웹페이지의&#13;코딩(퍼블리싱),모든 사람들이 평등하게&#13;편안하게 구독 할수있도록 웹접근성을 감안..">
				<ul>
					<li class="list_li">웹퍼블리셔라는 직업을 알아갈</li>
					<li class="list_li">수록 내두손가락으로 이뤄내는</li>
					<li class="list_li">웹페이지의 코딩(퍼블리싱),모</li>
					<li class="list_li">든 사람들이 평등하게 편안하</li>
					<li class="list_li">게 구독 할수있도록</li>
					<li class="list_li">웹접근성을 감안..</li>
				</ul>
			</div>
		</div>
		<div class="board_area">
			<div class="board_title">
				<a href="index.php?mid=community&amp;sid=board"><img src="../images/more_bt.jpg" width="28" height="9" alt="전체보기" class="more_bt" /></a>
			</div>
			<div class="list">
				<ul>
				<?php
				$res = mysql_query("select * from board where mid='community' and sid='board' order by no desc limit 4",$cnt);
				for($i = 1; $data = mysql_fetch_array($res); $i++){
				?>
					<li class="list_li">
						<a href="index.php?mid=community&amp;sid=board&amp;board_list=board_view&amp;no=<?php echo $data[no]; ?>" class="li_img" title="<?php echo $data[subject]; ?>">
							&nbsp;&nbsp;&nbsp;<?php echo cut_str($data[subject],18); ?>
						</a>
					</li>
				<?php
				}
				?>
				</ul>
			</div>
		</div>
		<div class="main_gal_area">
			<div class="gal_title">
				<a href="index.php?mid=community&amp;sid=gallery"><img src="../images/more_bt.jpg" width="28" height="9" alt="전체보기" class="more_bt" /></a>
			</div>
			<div class="list">
				<ul class="gal_l_wrap">
				<?php
				for($i = 1; $i < 3; $i++){
				?>
					<li class="gal_list">
						<a href="" title="푸른공원"><img src="../images/gal_img1.jpg" width="69" height="46" alt="" /></a>
						<ul>
							<li><a href="" title="푸른공원">푸른공원</a></li>
						</ul>
					</li>
				<?php
				}
				?>
				</ul>
			</div>
		</div>
	</div>
	<!-- //Header_Left -->

	<!-- Container -->
	<div id="container">
		<div class="top_view">
			<div class="navigation">
				<div class="navi_style">
					<script type="text/javascript">flash("navigation.swf","70","122","navigation","","transparent")</script>
				</div>
			</div>
		</div>
		<div class="contents">
			<div class="con_style">
				<?php include "../page/contents.php"; ?>
			</div>
		</div>
	</div>
	<!-- //Container -->
	
	<!-- Footer -->
	<div id="footer">
		<div class="foot_con">
			<p title="COPYRIGHT 2010 LEE MYEONG JONG PORTFOLIO All right reserverd.">COPYRIGHT <span class="bold">2010 LEE MYEONG JONG PORTFOLIO</span> All right reserverd.</p>
			<p title="TEL. 010-8392-3022 Email. lmj5@naver.com 본페이지는 IE / FF 에 호환되어 있습니다.">TEL. 010-8392-3022 Email. lmj5@naver.com 본페이지는 IE / FF 에 호환되어 있습니다.</p>
		</div>
		<div class="w3c">
			<a href="http://validator.w3.org/check?uri=referer">
				<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
			</a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer">
				<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="올바른 CSS입니다!" />
			</a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer">
				<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="올바른 CSS입니다!" />
			</a>
		</div>
	</div>
	<!-- //Footer -->

</div>

<!-- Bottom -->
<div id="bottom"></div>
<!-- //Bottom -->

</div>
</body>
</html>
