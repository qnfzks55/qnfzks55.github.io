<script type="text/javascript">
function chk(){
	var a = document.getElementById("chk");
	if(!chkblank(a.name, "�̸��� �Է� �� �ּ���.")){ return false; }
	if(!chkblank(a.subject, "������ �Է� �� �ּ���.")){ return false; }
	if(!chkblank(a.answer, "������ �Է� �� �ּ���.")){ return false; }
	if(!chknum(a.password, "��й�ȣ�� ��Ȯ�� �Է� �� �ּ���.")){ return false; }

	return true;

}
</script>

<?php
$res = mysql_query("select * from board where no='$_GET[no]'",$connect);
$data = mysql_fetch_array($res);
?>
<!-- ���� �Խ��� ����-->
<form action="aboard_modify_ok.php<?php echo PAGE; ?>&amp;no=<?php echo $_GET[no]; ?>" method="post" id="chk" onsubmit="return chk()" enctype="multipart/form-data">
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
				<input type="text" name="name" id="name" title="�̸�" class="input00" value="<?php echo $data[name]; ?>" />
			</td>
		</tr>
		<tr>
			<th class="table01_th"><label for="subject">Subject *</label></th>
			<td class="table01_td">
				<input type="text" name="subject" id="subject" title="����" class="input01" value="<?php echo $data[subject]; ?>" />
			</td>
		</tr>
		<tr>
			<th class="table01_th"><label for="answer">Contents *</label></th>
			<td class="table01_td">
				<textarea name="answer" id="answer" title="�亯" cols="" rows="" class="input01" style="height:250px; font-family:����;"><?php echo strip_tags($data[answer]); ?></textarea>
			</td>
		</tr>
		<tr>
			<th class="table01_th"><label for="photo">Photo *</label></th>
			<td class="table01_td">
				<input type="file" name="photo" id="photo" title="����" class="input01" />
			</td>
		</tr>
		<tr>
			<th class="table01_th"><label for="password">Password *</label></th>
			<td class="table01_td">
				<input type="password" name="password" id="password" title="��й�ȣ" class="input02" />
				* ���ڷ� �Է� �� �ּ���.
			</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align:center; padding:7px;">
				<input type="submit" class="button02" value="Ȯ��" title="Ȯ��" />&nbsp;
				<input type="button" class="button00" value="���" title="���" onclick="location.href='sub.php<?php echo PAGE; ?>'" />
			</td>
		</tr>
	</table>
</form>