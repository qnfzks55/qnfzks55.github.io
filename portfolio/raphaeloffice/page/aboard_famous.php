<?php
/* �Խ��� ��õ */
$res = mysql_query("update board set fam = fam + 1 where no='$_GET[no]'",$connect);

alert("��õ �Ǿ����ϴ�.");
move("sub.php?main_id=customer&sub_id=qa_board&qa_board=aboard_view&no=$_GET[no]");
?>