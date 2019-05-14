<?php
/* Mysql Server Connect */
$cnt = mysql_connect("localhost","audwhd55","dlaudwhd55");
mysql_select_db("audwhd55");

/* Page */
define("PAGE","?mid=$_GET[mid]&amp;sid=$_GET[sid]");

/* Alert Blank */
function alert($msg){
	echo "
	<script type='text/javascript'>
		alert('$msg');	
	</script>
	";
}

/* Page Move */
function move($url){
	echo "
	<script type='text/javascript'>
		location.href='$url';
	</script>
	";
}

/* Alert Blank Back */
function alertback($msg){
	echo "
	<script type='text/javascript'>
		alert('$msg');
		history.back();
	</script>
	";
}

/* Cut Message */
function cut_str($str,$len){
	if(strlen($str) > $len){
		$dot = "..";
	}
	$str = substr($str,0,$len);
	return $str.$dot;
}

/* Image Check */
function NoScriptFiles($file_name){
	$file_names = explode(".", strrev($file_name));
	$filex = strrev($file_names[0]);

	switch($filex){
		case '':
		case 'jpg':
		case 'jpeg';
		case 'gif':
		case 'png':
			break;
			alertback("이미지 파일만 업로드 하실 수 있습니다.");
			exit;
			break;
	}
}

/* Mysql Code Gard */
function NoFiles($file_name){
	$file_name = explode(".", strrev($file_name));
	$filex = strrev($file_name[0]);

	switch($filex){
		case '':
			exit;
			break;
		case 'html':
			alertback("보안에 위험이 있는 파일은 업로드 하실 수 없습니다.");
			exit;
			break;
		case 'php':
			alertback("보안에 위험이 있는 파일은 업로드 하실 수 없습니다.");
			exit;
			break;
		case 'dll':
			alertback("보안에 위험이 있는 파일은 업로드 하실 수 없습니다.");
			exit;
			break;
		case 'exe':
			alertback("보안에 위험이 있는 파일은 업로드 하실 수 없습니다.");
			exit;
			break;
	}
	return $file_name;
}

?>