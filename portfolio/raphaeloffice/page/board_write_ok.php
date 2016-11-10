<?php
include "../include/lib.php";

$file = $HTTP_POST_FILES[photo][tmp_name];
$file_name = $HTTP_POST_FILES[photo][name];
NoScriptFiles($file_name);
move_uploaded_file($file,"../file/$file_name");

$contents = addslashes($_POST[contents]);
$contents = nl2br($contents);

$res = mysql_query("insert into board (main_id,sub_id,category,name,subject,contents,photo,password,date) values('$_POST[main_id]','$_POST[sub_id]','$_POST[category]','$_POST[name]','$_POST[subject]','$contents','$file_name',password('$_POST[password]'),now())",$connect);

move("sub.php?main_id=customer&sub_id=free_board");
?>