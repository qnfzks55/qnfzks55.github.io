<!-- 묻고 답하기 게시판 비밀번호 -->
<div class="board_pw_form">
<form action="qboard_password_2_ok.php<?php echo PAGE; ?>" method="post">
<input type="hidden" name="no" value="<?php echo $_GET[no]; ?>" />
<br /><br /><br />
<input type="password" name="password" class="input02" title="비밀번호를 입력 해 주세요." />
<br /><br />
	<input type="submit" class="button00" value="확인" title="확인" />&nbsp;
	<input type="button" class="button00" value="취소" title="취소" onclick="history.back();" />&nbsp;
</form>
</div>