<?php
/* �α��� ���� */
session_start();

/* mysql ���� */
$cnt = mysql_connect("localhost","website","website");
mysql_select_db("english");


/* ���� �ڹ� */
define("PAGE","?main_id=$_GET[main_id]&amp;sub_id=$_GET[sub_id]");

/* ���â */
function alert($msg){
	echo "
	<script type='text/javascript'>
		alert('$msg');
	</script>
	";
}

/* ��� �� �ڷ� */
function alertback($msg){
	echo "
	<script type='text/javascript'>
		alert('$msg');
		history.back();
	</script>
	";
}

/* ������ �̵� */
function move($url){
	echo "
	<script type='text/javascript'>
		location.href = '$url';
	</script>
	";
}

/* ���ڿ� �ڸ��� */
function cut_str($str,$len){
	if(strlen($str) > $len){
		$dot = "...";
	}
	$str = substr($str,0,$len);
	return $str.$dot;
}

/* �̸��� ���� */
function hex($str){
	for($i = 1; $i < strlen($str); $i++){
		$return .= '&#x'.bin2hex(substr($str,$i,1)).";";
	}
	return $return;
}

/* �˻��� ���̶���Ʈ */
function hlt($str){
	return str_replace($_GET[search],"<span style='font-weight:bold; color:#fff; background:#fea700;'>".$_GET[search]."</span>",$str);
}

?>