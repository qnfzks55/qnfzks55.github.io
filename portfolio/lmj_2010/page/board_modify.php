<!-- Select Check -->
<script>
function chk(){
	var a = document.getElementById("chk");
	if(!chkblank(a.subject, "������ �Է� �� �ּ���.")){ return false; }
	if(!chkblank(a.contents, "������ �Է� �� �ּ���.")){ return false; }
	if(!chkblank(a.password, "��й�ȣ�� ��Ȯ�� �Է� �� �ּ���.")){ return false; }

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
		<li class="board_w_title">�ۼ���</li>
		<li class="board_w_write">
			<ul class="board_w_cb">	
				<li>
					<?php echo $data[name]; ?>
				</li>
			</ul>
		</li>
	</ul>
	<ul>
		<li class="board_w_title"><label for="subject">����</label></li>
		<li class="board_w_write">
			<ul class="board_w_cb">	
				<li>
					<input type="text" name="subject" id="subject" title="����" style="width:330px;" value="<?php echo $data[subject]; ?>" />
				</li>
			</ul>
		</li>
	</ul>
	<ul>
		<li class="board_w_title" style="height:205px; background:transparent url('../images/contents/community/write_c_bg.jpg') no-repeat;"><label for="contents"><br /><br /><br /><br />����</label></li>
		<li class="board_w_write" style="height:205px;">
			<ul class="board_w_cb">
				<li>
					<textarea name="contents" id="contents" title="����" rows="" cols="" style="width:330px; height:200px;"><?php echo strip_tags(nl2br($data[contents])); ?></textarea>
				</li>
			</ul>
		</li>
	</ul>
	<ul>
		<li class="board_w_title"><label for="password">��й�ȣ</label></li>
		<li class="board_w_write">
			<ul class="board_w_cb">	
				<li>
					<input type="password" name="password" id="password" title="��й�ȣ" />
					<span style="font-size:8pt;"><span class="b_tip">Tip .</span> ��й�ȣ�� �Է� �� �ּ���.</span>
				</li>
			</ul>
		</li>
	</ul>
</div>
<div class="board_bottom">
	<fieldset class="center">
		<legend>��ư</legend>
		<input type="submit" class="button1" value="modify" title="����" />
		<input type="reset" class="button" value="reset" title="�ٽþ���" />
		<input type="button" class="button" value="back" title="�ڷ�" onclick="location.href='index.php?mid=community&amp;sid=board&amp;board_list=board_view&amp;no=<?php echo $_GET[no]; ?>'" />
	</fieldset>
</div>
</form>
<!-- //Board Modify Form -->