<script type="text/javascript">
function chk(){
	var a = document.getElementById("chk");
	if(!chkblank(a.name, "이름을 입력 해 주세요.")){ return false; }
	if(!chkblank(a.subject, "제목을 입력 해 주세요.")){ return false; }
	if(!chkblank(a.contents, "내용을 입력 해 주세요.")){ return false; }
	if(!chknum(a.password, "비밀번호를 입력 해 주세요.")){ return false; }

	return true;

}
</script>

<?php
$res = mysql_query("select * from board where no='$_GET[no]'",$connect);
$data = mysql_fetch_array($res);
?>
<!-- 게시판 수정-->
<form action="notice_board_modify_ok.php<?php echo PAGE; ?>&amp;no=<?php echo $_GET[no]; ?>" method="post" id="chk" onsubmit="return chk()" enctype="multipart/form-data">
	<table cellpadding="0" cellspacing="0" class="table01">
		<tr>
			<th class="table01_th"><label for="category">Category *</label></th>
			<td class="table01_td">
				<?php echo $data[category]; ?>
			</td>
		</tr>
		<tr>
			<th class="table01_th"><label for="name">Name *</label></th>
			<td class="table01_td">
				<input type="text" name="name" id="name" title="이름" class="input00" value="<?php echo $data[name]; ?>" />
			</td>
		</tr>
		<tr>
			<th class="table01_th"><label for="subject">Subject *</label></th>
			<td class="table01_td">
				<input type="text" name="subject" id="subject" title="제목" class="input01" value="<?php echo $data[subject]; ?>" />
			</td>
		</tr>
		<tr>
			<th class="table01_th"><label for="contents">Contents *</label></th>
			<td class="table01_td">
				<textarea name="contents" id="contents" title="내용" cols="" rows="" class="input01" style="height:250px; font-family:돋움;"><?php echo strip_tags($data[contents]); ?></textarea>
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
				<input type="password" name="password" id="password" title="비밀번호" class="input02" />
				* 숫자로 입력 해 주세요.
			</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align:center; padding:7px;">
				<input type="submit" class="button02" value="확인" title="확인" />&nbsp;
				<input type="button" class="button00" value="취소" title="취소" onclick="location.href='sub.php<?php echo PAGE; ?>'" />
			</td>
		</tr>
	</table>
</form>