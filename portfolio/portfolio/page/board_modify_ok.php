<?php
include "../include/lib.php";

$contents = addslashes($_POST[contents]);
$contents = strip_tags($contents);
$contents = nl2br($contents);

mysql_query("update board set subject='$_POST[subject]', contents='$contents', password=password('$_POST[password]') where no='$_GET[no]'",$cnt);

alert("���� �Ǿ����ϴ�.");
move("index.php?mid=community&sid=board&board_list=board_view&no=$_GET[no]");
?>