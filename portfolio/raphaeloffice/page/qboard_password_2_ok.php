<?php
include "../include/lib.php";

$res = mysql_query("select * from board where no='$_POST[no]' and password=password('$_POST[password]')",$connect);
$data = mysql_fetch_array($res);

if(!$data){
	alertback("��й�ȣ�� ���� �ʽ��ϴ�.");
	exit;
}else{
	move("sub.php?main_id=customer&sub_id=qa_board&qa_board=qboard_delete&no=$_POST[no]");
}

?>