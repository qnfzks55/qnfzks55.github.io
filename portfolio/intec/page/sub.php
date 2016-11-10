<?php include "../include/lib.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<?php
$res = mysql_query("select * from main_menu where main_id='$_GET[main_id]'",$cnt);
$data = mysql_fetch_array($res);

$mres = mysql_query("select * from sub_menu where main_id='$data[main_id]' and sub_id='$_GET[sub_id]'",$cnt);
$mdata = mysql_fetch_array($mres);
?>
<title>InTEC into English Instruction - <?php echo $data[main_title]; ?> - <?php echo $mdata[sub_title]; ?></title>
<link rel="stylesheet" type="text/css" href="../common/common.css" />
<link rel="stylesheet" type="text/css" href="../common/print.css" />
<script type="text/javascript" src="../common/common.js"></script>
</head>

<body>
<div id="wrapper">
<div id="sub_page">
	<div id="sub_top"><!-- 로고 부분 -->	
		<script type="text/javascript">flash("../source/logo.swf","900","134","logo","","transparent")</script>
	</div>
	<div id="top_navi"><!-- 네비게이션 -->
		<?php include "../include/navigation.php"; ?>
	</div>
	<div id="main_menu_view"><!-- 메인메뉴 -->
		<script type="text/javascript">flash("main_menu.swf","900","35","main_menu","","transparent")</script>
	</div>
	<div id="main_search_area"><!-- 메인 검색 부분 -->
		<div id="search_img">
			<input type="text" class="main_search_input" title="검색" style="margin-left:50px; margin-top:6px; float:left;" />
			<input type="submit" class="main_search_bt" title="검색" value="" style="margin-left:195px; margin-top:6px; margin-top:-19px; float:left;" />
		</div>
	</div>
	<div id="sub_body"><!-- 서브 바디 -->
		<div id="sub_menu_area"><!-- 서브메뉴 영역 -->
			<div id="sub_menu_top"></div>
			<div id="sub_menu_list">
				<script type="text/javascript">flash("sub_menu.swf?main_id=<?php echo $_GET[main_id]; ?>&amp;sub_id=<?php echo $_GET[sub_id]; ?>","226","145","","transparent")</script>
			</div>
			<div id="sub_banner"><!-- 서브 배너 -->
				<img src="../images/banner.jpg" width="226" height="95" alt="배너" />
			</div>
		</div>
		<div id="sub_title_area"><!-- 서브 타이틀 -->
			<div id="title_style">
				<?php
				if(!$_GET[sub_id]){
					$res = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and od='1'",$cnt);
					$data = mysql_fetch_array($res);
					$mres = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and sub_id='$data[sub_id]'",$cnt);
				}else{
					$mres = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and sub_id='$_GET[sub_id]'",$cnt);
				}
					$mdata = mysql_fetch_array($mres);
					echo $mdata[sub_title];
				?>
			</div>
			<div id="sub_con"><!-- 서브 내용 -->
				<div id="con_style">
					<?php include "contents.php"; ?>
				</div>
				<div id="print_area"><!-- 프린트 -->
					<a href="javascript:on_print();">
						<img src="../images/print_bt.jpg" width="66" height="26" alt="프린트" style="margin:7px 0 0 582px;" />
					</a>
				</div>
			</div>
			<div id="sub_copy"><!-- 카피라이트 --></div>
		</div>
	</div>
</div>
</div>
</body>
</html>
