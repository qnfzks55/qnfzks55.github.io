<?php
/* 게시판 추천 */
$res = mysql_query("update board set fam = fam + 1 where no='$_GET[no]'",$connect);

alert("추천 되었습니다.");
move("sub.php?main_id=customer&sub_id=qa_board&qa_board=aboard_view&no=$_GET[no]");
?>