<?php include "./include/lib.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<title>���Ŀ� ���ǽ���</title>
<link rel="stylesheet" type="text/css" href="../common/common.css" />
<script src="../common/common.js"></script>
</head>

<body id="sub_bg">
<div id="wrapper">
	<div id="main_top"><!-- ���� ������ -->
		<div id="logo"><!-- �ΰ� -->
			<input type="image" src="../images/logo.jpg" title="���Ŀ� ���ǽ���" onclick="location.href='index.php'" />
		</div>
		<div id="main_top_right">
			<img src="../images/navigation.jpg" width="170" height="16" usemap="#Map" style="float:right; margin:17px 0 0 12px;" />
			<map name="Map" id="Map">
			<area shape="rect" coords="-1,0,30,12" href="index.php" />
			<area shape="rect" coords="50,0,96,14" href="sub.php?main_id=sitemap&amp;sub_id=sitemap" />
			<area shape="rect" coords="110,3,167,18" href="mailto:ose2p@naver.com" />
			</map>
		</div>
		<div id="main_menu_flash"><!-- ���θ޴� �÷��� -->
			<script>flash("../source/index.swf","680","58","index","","transparent")</script>
		</div>
	</div>
	<div id="visual_sub">
		<script>flash("../source/sub1.swf","954","124","sub1","","transparent")</script>
		<div id="sub_left_title"><!-- ���� Ÿ��Ʋ -->
			<?php include "../page/mainmenu.php"; ?>
		</div>
	</div>
	<div>
	<div id="sub_body">
		<div id="sub_left_top"><!-- ���� ���� ���κ� -->
			<div id="sub_menu_view"><!-- ����޴� -->
				<?php include "../page/submenu.php"; ?>
			</div>
			<div id="sub_banner"><!-- ���� ��� -->
				<script>flash("../source/banner.swf","169","48","banner","","transparent")</script>
			</div>
		</div>
		<div id="sub_contents" style="background:#fff;"><!-- ���� �ٵ�-->
			<div id="sub_title_area"><!-- ���� Ÿ��Ʋ -->
				<?php
				if(!$_GET[sub_id]){
					$res = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and od='1'",$connect);
					$data = mysql_fetch_array($res);
					$mres = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and sub_id='$data[sub_id]'",$connect);
				}else{
					$mres = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and sub_id='$_GET[sub_id]'",$connect);
				}
					$mdata = mysql_fetch_array($mres);
				?>
				&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mdata[sub_title]; ?>
			</div>
			<div id="sub_navi_view"><!-- ���� �׺���̼� -->
				<?php
				$res = mysql_query("select * from main_menu where main_id='$_GET[main_id]'",$connect);
				$data = mysql_fetch_array($res);

				$mres = mysql_query("select * from sub_menu where main_id='$data[main_id]' and od='1'",$connect);
				$mdata = mysql_fetch_array($mres);
				
				$jres = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and sub_id='$_GET[sub_id]'",$connect);
				$jdata = mysql_fetch_array($jres);
				?>
				<img src="../images/sub_navi_home.jpg" />&nbsp;
				<a href="index.php">Home</a>&nbsp;>
				<a href="sub.php?main_id=<?php echo $_GET[main_id]; ?>&amp;sub_id=<?php echo $mdata[sub_id]; ?>"><?php echo $data[main_ftitle]; ?></a>&nbsp;>
				<a href="sub.php?main_id=<?php echo $_GET[main_id]; ?>&amp;sub_id=<?php echo $jdata[sub_id]; ?>"><?php echo $jdata[sub_title]; ?></a>
			</div>
			<div style="border-bottom:1px solid #ddd; padding:6px 0 0 0; clear:both; "></div>
			<div id="sub_con_view"><!-- ���� ��� -->
				<?php include "../page/contents.php"; ?>
			</div>
		</div>
		<div style="clear:both; background:#ebebeb; overflow:hidden; width:100%; height:80px; margin:67px 0 0 0; float:left;">
			<div id="sub_copy"><!-- ī�Ƕ���Ʈ -->
				<img src="../images/main_copy.jpg" width="978px" height="83px" border="0" usemap="#Map2" />
				<map name="Map2" id="Map2">
					<area shape="rect" coords="271,10,319,27" href="sub.php?main_id=sitemap&amp;sub_id=sitemap" />
					<area shape="rect" coords="339,10,386,28" href="mailto:ose2p@naver.com" />
				</map>
			</div>
		</div>
	</div>
</div>
</body>
</html>
