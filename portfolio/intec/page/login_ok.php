<?php
include "../include/lib.php";

$res = mysql_query("select * from member where member_id='$_POST[member_id]' and member_pw=password('$_POST[member_pw]')",$cnt);
$data = mysql_fetch_array($res);

if($data){
	$_SESSION[no] = $data[no];
	$_SESSION[name] = $data[name];
	$_SESSION[member_lv] = $data[member_lv];
	$_SESSION[position] = $data[position];
}else{
	alertback("아이디 또는 비밀번호를 다시 확인 해 주세요.");
	exit;
}

move("sub.php?main_id=mem_area&sub_id=login");
?>