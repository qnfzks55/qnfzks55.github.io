<?php
/* 로그인 유지 */
session_start();

/* mysql 연결 */
$cnt = mysql_connect("localhost","website","website");
mysql_select_db("english");


/* 간편 자바 */
define("PAGE","?main_id=$_GET[main_id]&amp;sub_id=$_GET[sub_id]");

/* 경고창 */
function alert($msg){
	echo "
	<script type='text/javascript'>
		alert('$msg');
	</script>
	";
}

/* 경고 후 뒤로 */
function alertback($msg){
	echo "
	<script type='text/javascript'>
		alert('$msg');
		history.back();
	</script>
	";
}

/* 페이지 이동 */
function move($url){
	echo "
	<script type='text/javascript'>
		location.href = '$url';
	</script>
	";
}

/* 문자열 자르기 */
function cut_str($str,$len){
	if(strlen($str) > $len){
		$dot = "...";
	}
	$str = substr($str,0,$len);
	return $str.$dot;
}

/* 이메일 보안 */
function hex($str){
	for($i = 1; $i < strlen($str); $i++){
		$return .= '&#x'.bin2hex(substr($str,$i,1)).";";
	}
	return $return;
}

/* 검색어 하이라이트 */
function hlt($str){
	return str_replace($_GET[search],"<span style='font-weight:bold; color:#fff; background:#fea700;'>".$_GET[search]."</span>",$str);
}

?>