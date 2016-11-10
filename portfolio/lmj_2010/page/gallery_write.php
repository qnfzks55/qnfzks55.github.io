<!-- Select Check -->
<script type="text/javascript">
function chk(){
	var a = document.getElementById("chk");
	if(!chkblank(a.name, "이름을 입력 해 주세요.")){ return false; }
	if(!chkblank(a.subject, "제목을 입력 해 주세요.")){ return false; }
	if(!chkblank(a.contents, "내용을 입력 해 주세요.")){ return false; }
	if(!chkblank(a.password, "비밀번호를 정확히 입력 해 주세요.")){ return false; }

	return true;

}
</script>
<!-- //Select Check -->

<!-- Gallery Write Form -->
<form action="gallery_write_ok.php<?php echo PAGE; ?>" method="post" id="chk" onsubmit="return chk()">
<fieldset>
	<legend>mid,sid hidden값</legend>
		<input type="hidden" name="mid" value="<?php echo $_GET[mid]; ?>" />
		<input type="hidden" name="sid" value="<?php echo $_GET[sid]; ?>" />
</fieldset>
<div class="board_w_bar"></div>
<div class="board_w_form">
	<ul>
		<li class="board_w_title"><label for="name">작성자</label></li>
		<li class="board_w_write">
			<ul class="board_w_cb">	
				<li>
					<input type="text" name="name" id="name" title="작성자" />
					<span style="font-size:8pt;"><span class="b_tip">Tip .</span> 이름을 입력 해 주세요. 
					ex) 홍길동</span>
				</li>
			</ul>
		</li>
	</ul>
	<ul>
		<li class="board_w_title"><label for="subject">제목</label></li>
		<li class="board_w_write">
			<ul class="board_w_cb">	
				<li>
					<input type="text" name="subject" id="subject" title="제목" style="width:330px;" />
				</li>
			</ul>
		</li>
	</ul>
	<ul>
		<li class="board_w_title" style="height:205px; background:transparent url('../images/contents/community/write_c_bg.jpg') no-repeat;"><label for="contents"><br /><br /><br /><br />내용</label></li>
		<li class="board_w_write" style="height:205px;">
			<ul class="board_w_cb">
				<li>
					<textarea name="contents" id="contents" title="내용" rows="" cols="" style="width:330px; height:200px;"></textarea>
				</li>
			</ul>
		</li>
	</ul>
	<ul>
		<li class="board_w_title"><label for="photo">사진</label></li>
		<li class="board_w_write">
			<ul class="board_w_cb">	
				<li>
					<input type="file" name="photo" id="photo" title="사진" style="background:#fff; width:330px;" />
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
		<input type="submit" class="button" value="write" title="글쓰기" />
		<input type="reset" class="button" value="reset" title="다시쓰기" />
		<input type="button" class="button" value="back" title="뒤로" onclick="location.href='index.php<?php echo PAGE; ?>'" />
	</fieldset>
</div>
</form>
<!-- //Gallery Write Form -->