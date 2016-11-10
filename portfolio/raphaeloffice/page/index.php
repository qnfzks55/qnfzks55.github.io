<?php include "include/lib.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<title>라파엘 오피스텔</title>
<link rel="stylesheet" href="../common/common.css" type="text/css" />
<script type="text/javascript" src="../common/common.js"></script>
</head>

<body id="main_bg">
<div id="wrapper">
	<div id="main_top"><!-- 메인 윗영역 -->
		<div id="logo"><!-- 로고 -->
			<input type="image" src="../images/logo.jpg" title="라파엘 오피스텔" onclick="location.href='index.php'" />
		</div>
		<div id="main_top_right">
			<img src="../images/navigation.jpg" width="170" height="16" usemap="#Map" style="float:right; margin:17px 0 0 12px;" />
			<map name="Map" id="Map">
			<area shape="rect" coords="-1,0,30,12" href="index.php" />
			<area shape="rect" coords="50,0,96,14" href="sub.php?main_id=sitemap&amp;sub_id=sitemap" />
			<area shape="rect" coords="110,3,167,18" href="mailto:admin@naver.com;" />
			</map>
		</div>
		<div id="main_menu_flash"><!-- 메인메뉴 플래시 -->
			<script type="text/javascript">flash("../source/index.swf","680","58","index","","transparent")</script>
		</div>
	</div>
	<div id="visual_main"><!-- 메인 플래시 -->
		<script type="text/javascript">flash("../source/main.swf","980","230","main","","transparent")</script>
	</div>
	<div id="main_bottom_1"><!-- 메인 아랫영역 -->
		<div id="main_notice"><!-- 게시판 추출 -->	
			<?php include "./page/main_gallery.php"; ?>
		</div>
		<div id="main_bar"><img src="../images/main_bar.jpg" width="5" height="111" alt="" /></div>
		<div id="room_ting"><!-- 오피스텔 소개 -->
			<input type="image" src="../images/main_ting.jpg" title="라파엘 오피스텔 소개" onclick="location.href='./page/sub.php?main_id=officetel_ting&amp;sub_id=r_officetel_ting'" />
		</div>
		<input type="image" src="../images/more_bt.jpg" title="목록으로" onclick="location.href='./page/sub.php?main_id=officetel_ting&amp;sub_id=r_officetel_ting'" style="margin:116px 0 0 0; float:left;" />
		<div id="main_bar"><img src="../images/main_bar.jpg" width="5" height="111" alt="" /></div>
		<div id="interior_ting">
			<input type="image" src="../images/main_inter.jpg" title="인테리어 안내" onclick="location.href='./page/sub.php?main_id=interior&amp;sub_id=inter_view'" />
		</div>

	</div>
	<div id="main_bottom_2"><!-- 메인 아랫영역2 -->
		<div id="main_customer"></div>
		<div id="banner_1"><!-- 배너 1 -->
			<script type="text/javascript">flash("../source/banner.swf","169","48","banner","","transparent")</script>
		</div>
		<div id="banner_2"><!-- 배너 2 -->
			<script type="text/javascript">flash("../source/banner_2.swf","169","48","banner_2","","transparent")</script>
		</div>
		<div id="banner_3"><!-- 배너 3 -->
			<script type="text/javascript">flash("../source/banner_3.swf","169","48","banner_3","","transparent")</script>
		</div>
	</div>
	<div id="main_copy"><!-- 카피라이트 -->
		<img src="../images/main_copy.jpg" width="978" height="83" border="0" usemap="#Map2" />
			<map name="Map2" id="Map2">
				<area shape="rect" coords="271,10,319,27" href="sub.php?main_id=sitemap&amp;sub_id=sitemap" />
				<area shape="rect" coords="339,10,386,28" href="mailto:admin@naver.com;" />
			</map>
	</div>
</div>
</body>
</html>
