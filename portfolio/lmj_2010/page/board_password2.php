<!-- Select Check -->
<script type="text/javascript">
function chk(){
	var a = document.getElementById("chk");
	if(!chkblank(a.password, "비밀번호를 정확히 입력 해 주세요.")){ return false; }

	return true;

}
</script>
<!-- //Select Check -->

<!-- Board Title -->
<div class="t_img_title">
	<img src="../images/contents/community/board_t.jpg" width="520" height="110" alt="BOARD - 누구나 글을 쓸 수 있는 자유로운 게시판 입니다." />
</div>
<!-- //Board Title -->
<!-- Board Password Form -->
<form action="board_password2_ok.php<?php echo PAGE; ?>" method="post" id="chk" onsubmit="return chk()">
<fieldset>
	<legend>no히든값</legend>
	<input type="hidden" name="no" value="<?php echo $_GET[no]; ?>" />
</fieldset>
<div class="board_w_bar"></div>

<div class="board_w_form">
	<ul>
		<li class="board_w_title"><label for="password">비밀번호</label></li>
		<li class="board_w_write">
			<ul class="board_w_cb">	
				<li>
					<input type="password" name="password" id="password" title="비밀번호" />
					<span style="font-size:8pt;"><span class="b_tip">Tip .</span> 비밀번호를 입력 해 주세요.</span>
				</li>
			</ul>
		</li>
	</ul>
</div>
<div class="board_bottom">
	<fieldset>
		<legend>버튼</legend>
			<ul class="center">
				<li>
					<input type="submit" class="button" value="Ok" title="확인" />
					<input type="button" class="button" value="back" title="뒤로" onclick="location.href='index.php?mid=community&amp;sid=board&amp;board_list=board_view&amp;no=<?php echo $_GET[no]; ?>'" />
				</li>
			</ul>
	</fieldset>
</div>
</form>
<!-- //Board Password Form -->