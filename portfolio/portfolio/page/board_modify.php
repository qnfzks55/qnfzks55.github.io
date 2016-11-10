<!-- Select Check -->
<script type="text/javascript">
function chk(){
	var a = document.getElementById("chk");
	if(!chkblank(a.subject, "제목을 입력 해 주세요.")){ return false; }
	if(!chkblank(a.contents, "내용을 입력 해 주세요.")){ return false; }
	if(!chkblank(a.password, "비밀번호를 정확히 입력 해 주세요.")){ return false; }

	return true;

}
</script>
<!-- //Select Check -->

<!-- Board Modify Form -->
<?php
$res = mysql_query("select * from board where no='$_GET[no]'",$cnt);
$data = mysql_fetch_array($res);
?>
<form action="board_modify_ok.php<?php echo PAGE; ?>&amp;no=<?php echo $data[no]; ?>" method="post" id="chk" onsubmit="return chk()">
<div class="board_w_bar"></div>
<div class="board_w_form">
	<ul>
		<li class="board_w_title">작성자</li>
		<li class="board_w_write">
			<ul class="board_w_cb">	
				<li>
					<?php echo $data[name]; ?>
				</li>
			</ul>
		</li>
	</ul>
	<ul>
		<li class="board_w_title"><label for="subject">제목</label></li>
		<li class="board_w_write">
			<ul class="board_w_cb">	
				<li>
					<input type="text" name="subject" id="subject" title="제목" style="width:330px;" value="<?php echo $data[subject]; ?>" />
				</li>
			</ul>
		</li>
	</ul>
	<ul>
		<li class="board_w_title" style="height:205px; background:transparent url('../images/contents/community/write_c_bg.jpg') no-repeat;"><label for="contents"><br /><br /><br /><br />내용</label></li>
		<li class="board_w_write" style="height:205px;">
			<ul class="board_w_cb">
				<li>
					<textarea name="contents" id="contents" title="내용" rows="" cols="" style="width:330px; height:200px;"><?php echo strip_tags(nl2br($data[contents])); ?></textarea>
				</li>
			</ul>
		</li>
	</ul>
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
	<fieldset class="center">
		<legend>버튼</legend>
		<input type="submit" class="button1" value="modify" title="수정" />
		<input type="reset" class="button" value="reset" title="다시쓰기" />
		<input type="button" class="button" value="back" title="뒤로" onclick="location.href='index.php?mid=community&amp;sid=board&amp;board_list=board_view&amp;no=<?php echo $_GET[no]; ?>'" />
	</fieldset>
</div>
</form>
<!-- //Board Modify Form -->