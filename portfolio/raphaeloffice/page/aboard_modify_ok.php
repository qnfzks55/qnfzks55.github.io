<?php
include "../include/lib.php";

$file = $HTTP_POST_FILES[photo][tmp_name];
$file_name = $HTTP_POST_FILES[photo][name];
NoScriptFiles($file_name);
move_uploaded_file($file,"../file/$file_name");

$answer = addslashes($_POST[answer]);
$answer = nl2br($answer);

$res = mysql_query("update board set name='$_POST[name]', subject='$_POST[subject]', answer='$answer', photo='$file_name', password=password('$_POST[password]') where no='$_GET[no]'",$connect);

alert("���� �Ǿ����ϴ�.");
move("sub.php?main_id=customer&sub_id=qa_board&qa_board=aboard_view&no=$_GET[no]");
?>