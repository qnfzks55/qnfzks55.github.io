<?php include('../include/lib.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>한국재활용산업개발</title>
<link rel="stylesheet" type="text/css" href="<?php echo "../common/common.css"; ?>" media="screen" />
<script src="<?php echo "../common/common.js"; ?>"></script>
</head>

<body <?php if(!$_GET[tid]) { echo 'style="background:url(../image/main_bg.jpg) repeat-x;"'; }else{ echo 'style="background:url(../image/sub_bg_2.jpg) repeat-x;"'; } ?>>
<div id="wrapper">
<?php
//메인페이지
if(!$_GET[tid]){
?>
	<div id="main_page">
		<?php include('main_page.php'); ?>
	</div>
	<div id="copyright">
		<img src="../image/copy.jpg" alt="" usemap="#copy" />
	</div>
<?
//서브페이지
}else{
?>
	<div id="sub_page">
		<?php include('sub_page.php'); ?>
	</div>
	<div id="copyright2">
		<div class="copy_style"><img src="../image/copy.jpg"  usemap="#copy" style="margin-top:6px;" alt="" /></div>
	</div>
<?php
}
?>
</div>
<map name="copy" id="copy">
	<area shape="rect" coords="738,16,813,32" href="http://cp.ck.hs.kr/copy/copyright_03a.html" target="_blank" alt="개인정보보호정책" />
	<area shape="rect" coords="832,15,917,34" href="http://cp.ck.hs.kr/copy/email.html" alt="이메일 무단수집거부" target="_blank" />
	<area shape="rect" coords="938,15,985,33" href="http://cp.ck.hs.kr/copy/protect.html" alt="저작권신고" target="_blank" />
</map>	
</body>
</html>