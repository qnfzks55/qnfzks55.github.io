<?php
include "../include/lib.php";

$res = mysql_query("select * from board where no='$_POST[no]' and password=password('$_POST[password]')",$cnt);
$data = mysql_fetch_array($res);

if(!$data){
	alertback("비밀번호가 일치하지 않습니다.");
	exit;
}else{
	move("index.php?mid=community&sid=board&board_list=board_modify&no=$_POST[no]");
}

?>