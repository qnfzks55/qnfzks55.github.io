<?php
include "../include/lib.php";

$contents = addslashes($_POST[contents]);
$contents = strip_tags($contents);
$contents = nl2br($contents);

mysql_query("insert into board (mid,sid,name,subject,contents,password,date) values('$_POST[mid]','$_POST[sid]','$_POST[name]','$_POST[subject]','$contents',password('$_POST[password]'),now())",$cnt);

alert("새글이 등록되었습니다.");
move("index.php?mid=community&sid=board");
?>