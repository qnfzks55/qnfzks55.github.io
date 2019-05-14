<?php
mysql_query("delete from board where no='$_GET[no]'",$cnt);
alert("삭제 되었습니다.");
move("index.php?mid=community&sid=board");
?>