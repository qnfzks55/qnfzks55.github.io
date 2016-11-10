<script type="text/javascript">
function chk(){
	var a = document.getElementById("chk");
	if(!chkblank(a.name, "이름을 입력 해 주세요.")){ return false; }
	if(!chkblank(a.subject, "제목을 입력 해 주세요.")){ return false; }
	if(!chkblank(a.contents, "내용을 입력 해 주세요.")){ return false; }
	
	return true;

}
</script>

<!-- 질답 게시판 글쓰기-->
<form action="qboard_write_ok.php<?php echo PAGE; ?>" method="post" id="chk" onsubmit="return chk()" enctype="multipart/form-data">
<input type="hidden" name="main_id" value="<?php echo $_GET[main_id]; ?>" />
<input type="hidden" name="sub_id" value="<?php echo $_GET[sub_id]; ?>" />
	<table cellpadding="0" cellspacing="0" class="table01">
		<tr>
			<th class="table01_th"><label for="category">Category *</label></th>
			<td class="table01_td">
				<?php echo getCategoryList($main_id,"category"); ?>
			</td>
		</tr>
		<tr>
			<th class="table01_th"><label for="name">Name *</label></th>
			<td class="table01_td">
				<input type="text" name="name" id="name" title="이름" class="input00" />
			</td>
		</tr>
		<tr>
			<th class="table01_th"><label for="subject">Subject *</label></th>
			<td class="table01_td">
				<input type="text" name="subject" id="subject" title="제목" class="input01" />
			</td>
		</tr>
		<tr>
			<th class="table01_th"><label for="contents">Contents *</label></th>
			<td class="table01_td">
				<textarea name="contents" id="contents" title="내용" cols="" rows="" class="input01" style="height:250px; font-family:돋움;"></textarea>
			</td>
		</tr>
		<tr>
			<th class="table01_th"><label for="photo">Photo *</label></th>
			<td class="table01_td">
				<input type="file" name="photo" id="photo" title="사진" class="input01" />
			</td>
		</tr>
		<tr>
			<th class="table01_th"><label for="password">Password *</label></th>
			<td class="table01_td">
				<input type="password" name="password" id="password" title="패스워드" class="input02" />
			</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align:center; padding:7px;">
				<input type="submit" class="button02" value="확인" title="확인" />&nbsp;
				<input type="button" class="button00" value="취소" title="취소" onclick="history.back();" />
			</td>
		</tr>
	</table>
</form>