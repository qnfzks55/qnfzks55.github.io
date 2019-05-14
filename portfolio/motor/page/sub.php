<?php include "../include/lib.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<?php
$res = mysql_query("select * from main_menu where main_id='$_GET[main_id]'",$cnt);
$data = mysql_fetch_array($res);

$mres = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and sub_id='$_GET[sub_id]'",$cnt);
$mdata = mysql_fetch_array($mres);
?>
<title>������ - <?php if($data){ echo $data[main_title]; }else{ echo "����������"; } ?> - <?php if($mdata){ echo $mdata[sub_title]; }else{ echo "����������"; }?></title>
<link rel="stylesheet" type="text/css" href="../common/common.css" />
<script src="../common/common.js"></script>
</head>

<body id="sub_page">
<div id="wrapper">
	<div id="sub_top"><!-- Top Area -->
		<div id="sub_top_navi"><!-- Navigation Area -->
			<div class="navi_style">	
				<?php include "../include/navigation.php"; ?>
			</div>
			<div id="logo_area"><!-- Logo Style -->
				<div id="logo_style">
					<a href="index.php">
						<img src="../images/sub_logo.jpg" width="238" height="80" alt="������" />
					</a>
				</div>
			</div>
			<div id="main_menu_area"><!-- Main Menu Area -->
				<script>flash("sub_main_menu.swf?main_id=<?php echo $_GET[main_id]; ?>","664","80","main_menu","","transparent")</script>
			</div>
		</div>
	</div>
	<div id="sub_blank"><!-- Blank --></div>
	<div id="sub_body"><!-- Body Area -->
		<div id="sub_menu_area"><!-- Submenu Area -->
			<script>flash("sub_menu.swf?main_id=<?php echo $_GET[main_id]; ?>&amp;sub_id=<?php echo $_GET[sub_id]; ?>","258","230","sub_menu","","transparent")</script>
		</div>
		<div id="con_area"><!-- Contents Area -->
			<div id="con_style">
				<?php include "contents.php"; ?>
			</div>
		</div>
		<div id="sub_copy_area"><!-- Copyright -->
			<div id="sub_copy"></div>
		</div>
	</div>
</div>
</body>
</html>
