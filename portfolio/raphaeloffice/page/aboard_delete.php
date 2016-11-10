<?php
mysql_query("delete from board where no='$_GET[no]'",$connect);

alert("삭제 되었습니다.");
move("sub.php?main_id=customer&sub_id=qa_board");
?>