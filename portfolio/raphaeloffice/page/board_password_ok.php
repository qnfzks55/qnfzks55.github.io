<?php
include "../include/lib.php";

$res = mysql_query("select * from board where no='$_POST[no]' and password=password('$_POST[password]')",$cnt);
$data = mysql_fetch_array($res);

if(!$data){
	alertback("비밀번호가 다시 확인 해 주세요.");
	exit;
}else{
	move("sub.php?main_id=customer&sub_id=free_board&board=board_modify&no=$_POST[no]");
}

?>