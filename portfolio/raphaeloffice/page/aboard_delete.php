<?php
mysql_query("delete from board where no='$_GET[no]'",$connect);

alert("���� �Ǿ����ϴ�.");
move("sub.php?main_id=customer&sub_id=qa_board");
?>