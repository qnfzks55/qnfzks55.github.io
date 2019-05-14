<?php
$res = mysql_query("select * from board where no='$_GET[no]'",$cnt);
$data = mysql_fetch_array($res);

/* Hit */
mysql_query("update board set hit = hit + 1 where no='$_GET[no]';",$cnt);

?>

<!-- Board Title -->
<div class="t_img_title">
	<img src="../images/contents/community/board_t.jpg" width="520" height="110" alt="BOARD - 누구나 글을 쓸 수 있는 자유로운 게시판 입니다." />
</div>
<!-- //Board Title -->

<!-- Board Contents View -->
<div class="board_w_bar"></div>
<div class="board_w_form">
	<ul>
		<li class="board_v_s"><?php echo cut_str($data[subject],52); ?></li>
	</ul>
	<ul>
		<li class="board_v_title"><span class="bold">작성일</span>&nbsp;|&nbsp;<?php echo $data[date]; ?></li>
		<li class="board_v_title" style="width:200px;"><span class="bold">작성자</span>&nbsp;|&nbsp;<?php echo cut_str($data[name],17); ?></li>
		<li class="board_v_title" style="width:150px;"><span class="bold">조회</span>&nbsp;|&nbsp;<?php echo $data[hit]; ?></li>
	</ul>
	<ul>
		<li class="board_v_title" style="width:495px; padding:10px 0 20px 5px; word-break:break-all;">
			<?php echo $data[contents];?>
		</li>
	</ul>
</div>
<div class="board_bottom">
	<ul class="center">
		<li>
			<input type="button" class="button" value="list" title="목록" onclick="location.href='index.php<?php echo PAGE; ?>'" />
			<input type="button" class="button1" value="modify" title="수정" onclick="location.href='index.php<?php echo PAGE; ?>&amp;board_list=board_password&amp;no=<?php echo $data[no]; ?>'" />
			<input type="reset" class="button1" value="Delete" title="삭제" onclick="location.href='index.php<?php echo PAGE; ?>&amp;board_list=board_password2&amp;no=<?php echo $data[no]; ?>'" />
		</li>
	</ul>
</div>
<!-- //Board Contents View -->
