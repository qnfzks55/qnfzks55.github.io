<?php
include "../include/lib.php";

$file = $HTTP_POST_FILES[photo][tmp_name];
$file_name = $HTTP_POST_FILES[photo][name];
NoScriptFiles($file_name);
move_uploaded_file($file,"../file/$file_name");

$contents = addslashes($_POST[contents]);
$contents = nl2br($contents);

$res = mysql_query("update board set name='$_POST[name]', subject='$_POST[subject]', contents='$contents', photo='$file_name', password=password('$_POST[password]') where no='$_GET[no]'",$connect);

alert("수정 되었습니다.");
move("sub.php?main_id=customer&sub_id=free_board&board=board_view&no=$_GET[no]");
?>