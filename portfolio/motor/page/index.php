<?php include "../include/lib.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<title>원동기 - 메인페이지</title>
<link rel="stylesheet" type="text/css" href="../common/common.css" />
<script type="text/javascript" src="../common/common.js"></script>
</head>

<body id="main_page">
<div id="wrapper">
	<div id="main_top"><!-- Top Area -->
		<div id="top_navi_area"><!-- Navigation Area -->
			<div class="navi_style">	
				<?php include "../include/navigation.php"; ?>
			</div>
			<div id="logo_area"><!-- Logo Style -->
				<div id="logo_style">
					<a href="index.php">
						<img src="../images/logo.jpg" width="238" height="80" alt="원동기" />
					</a>
				</div>
			</div>
			<div id="main_menu_area"><!-- Main Menu Area -->
				<script type="text/javascript">flash("main_menu.swf","664","80","main_menu","","transparent")</script>
			</div>		
		</div>
	</div>
	<div id="main_middle">
		<div id="main_left_flash"><!-- Left Flash -->
			<script type="text/javascript">flash("../source/main_visual_left.swf","221","348","main_visual_left","","transparent")</script>
		</div>
		<div id="visual_main"><!-- Visual Flash -->
			<script type="text/javascript">flash("../source/main_visual.swf","671","349","main_visual","","transparent")</script>
		</div>
	</div>
	<div id="bottom_blank"></div>
	<div id="main_body"><!-- Main Body -->
		<img src="../images/con_bg.jpg" alt="" width="897" height="160" usemap="#Map" />
			<map name="Map" id="Map">
				<area shape="rect" coords="15,66,96,110" href="sub.php?main_id=cycle&amp;sub_id=four_stroke" alt="4행정사이클" />
				<area shape="rect" coords="126,68,207,111" href="sub.php?main_id=cycle&amp;sub_id=two_stroke" alt="2행정사이클" />
				<area shape="rect" coords="238,77,277,104" href="sub.php?main_id=cycle&amp;sub_id=difference" alt="차이점" />
				<area shape="rect" coords="324,78,586,137" href="sub.php?main_id=gasoline_structure&amp;sub_id=gasoline_structure" alt="가솔린기관의 구조" />
				<area shape="rect" coords="732,69,889,143" href="sub.php?main_id=study_file&amp;sub_id=relaty" alt="증강현실" />
				<area shape="rect" coords="245,14,289,32" href="sub.php?main_id=cycle&amp;sub_id=four_stroke" alt="전체보기" />
				<area shape="rect" coords="547,11,588,33" href="sub.php?main_id=gasoline_structure&amp;sub_id=gasoline_structure" alt="전체보기" />
				<area shape="rect" coords="850,13,890,33" href="sub.php?main_id=study_file&amp;sub_id=relaty" alt="전체보기" />
			</map>
	</div>
  <div id="main_copy"><!-- Copyright --></div>
</div>
</body>
</html>