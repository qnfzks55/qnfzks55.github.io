<?php
mysql_query("delete from board where no='$_GET[no]'",$cnt);
alert("���� �Ǿ����ϴ�.");
move("index.php?mid=community&sid=board");
?>