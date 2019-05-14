<?php include "include/lib.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<title>���Ŀ� ���ǽ���</title>
<link rel="stylesheet" href="./common/common.css" type="text/css" />
<script src="./common/common.js"></script>
</head>

<body id="main_bg">
<div id="wrapper">
	<div id="main_top"><!-- ���� ������ -->
		<div id="logo"><!-- �ΰ� -->
			<input type="image" src="./images/logo.jpg" title="���Ŀ� ���ǽ���" onclick="location.href='index.php'" />
		</div>
		<div id="main_top_right">
			<img src="./images/navigation.jpg" width="170" height="16" usemap="#Map" style="float:right; margin:17px 0 0 12px;" />
			<map name="Map" id="Map">
			<area shape="rect" coords="-1,0,30,12" href="index.php" />
			<area shape="rect" coords="50,0,96,14" href="http://www.raphaeloffice.com/page/sub.php?main_id=sitemap&amp;sub_id=sitemap" />
			<area shape="rect" coords="110,3,167,18" href="mailto:ose2p@naver.com" />
			</map>
		</div>
		<div id="main_menu_flash"><!-- ���θ޴� �÷��� -->
			<script>flash("./source/index.swf","680","58","index","","transparent")</script>
		</div>
	</div>
	<div id="visual_main"><!-- ���� �÷��� -->
		<script>flash("./source/main.swf","980","230","main","","transparent")</script>
	</div>
	<div id="main_bottom_1"><!-- ���� �Ʒ����� -->
		<div id="main_notice"><!-- �Խ��� ���� -->	
			<?php include "./page/main_gallery.php"; ?>
		</div>
		<div id="main_bar"><img src="./images/main_bar.jpg" width="5" height="111" alt="" /></div>
		<div id="room_ting"><!-- ���ǽ��� �Ұ� -->
			<input type="image" src="./images/main_ting.jpg" title="���Ŀ� ���ǽ��� �Ұ�" onclick="location.href='./page/sub.php?main_id=officetel_ting&amp;sub_id=r_officetel_ting'" />
		</div>
		<input type="image" src="./images/more_bt.jpg" title="�������" onclick="location.href='./page/sub.php?main_id=officetel_ting&amp;sub_id=r_officetel_ting'" style="margin:116px 0 0 0; float:left;" />
		<div id="main_bar"><img src="./images/main_bar.jpg" width="5" height="111" alt="" /></div>
		<div id="interior_ting">
			<a href="./page/sub.php?main_id=interior&amp;sub_id=inter_view"><img src="./images/main_inter.jpg" alt="���׸��� �Ұ�" /></a>
		</div>
	</div>
	<div id="main_bottom_2"><!-- ���� �Ʒ�����2 -->
		<div id="main_customer"></div>
		<div id="banner_1"><!-- ��� 1 -->
			<script>flash("./source/banner.swf","169","48","banner","","transparent")</script>
		</div>
		<div id="banner_2"><!-- ��� 2 -->
			<script>flash("./source/banner_2.swf","169","48","banner_2","","transparent")</script>
		</div>
		<div id="banner_3"><!-- ��� 3 -->
			<script>flash("./source/banner_3.swf","169","48","banner_3","","transparent")</script>
		</div>
	</div>
	<div id="main_copy"><!-- ī�Ƕ���Ʈ -->
		<img src="./images/main_copy.jpg" width="978" height="83" border="0" usemap="#Map2" />
			<map name="Map2" id="Map2">
				<area shape="rect" coords="271,10,319,27" href="http://www.raphaeloffice.com/page/sub.php?main_id=sitemap&amp;sub_id=sitemap" />
				<area shape="rect" coords="339,10,386,28" href="mailto:ose2p@naver.com" />
			</map> 
	</div>
</div>
</body>
</html>

