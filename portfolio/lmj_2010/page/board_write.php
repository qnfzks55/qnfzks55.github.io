<!-- Select Check -->
<script>
function chk(){
	var a = document.getElementById("chk");
	if(!chkblank(a.name, "�̸��� �Է� �� �ּ���.")){ return false; }
	if(!chkblank(a.subject, "������ �Է� �� �ּ���.")){ return false; }
	if(!chkblank(a.contents, "������ �Է� �� �ּ���.")){ return false; }
	if(!chkblank(a.password, "��й�ȣ�� ��Ȯ�� �Է� �� �ּ���.")){ return false; }

	return true;

}
</script>
<!-- //Select Check -->

<!-- Board Write Form -->
<form action="board_write_ok.php<?php echo PAGE; ?>" method="post" id="chk" onsubmit="return chk()">
<fieldset>
	<legend>mid,sid hidden��</legend>
		<input type="hidden" name="mid" value="<?php echo $_GET[mid]; ?>" />
		<input type="hidden" name="sid" value="<?php echo $_GET[sid]; ?>" />
</fieldset>
<div class="board_w_bar"></div>
<div class="board_w_form">
	<ul>
		<li class="board_w_title"><label for="name">�ۼ���</label></li>
		<li class="board_w_write">
			<ul class="board_w_cb">	
				<li>
					<input type="text" name="name" id="name" title="�ۼ���" />
					<span style="font-size:8pt;"><span class="b_tip">Tip .</span> �̸��� �Է� �� �ּ���. 
					ex) ȫ�浿</span>
				</li>
			</ul>
		</li>
	</ul>
	<ul>
		<li class="board_w_title"><label for="subject">����</label></li>
		<li class="board_w_write">
			<ul class="board_w_cb">	
				<li>
					<input type="text" name="subject" id="subject" title="����" style="width:330px;" />
				</li>
			</ul>
		</li>
	</ul>
	<ul>
		<li class="board_w_title" style="height:205px; background:transparent url('../images/contents/community/write_c_bg.jpg') no-repeat;"><label for="contents"><br /><br /><br /><br />����</label></li>
		<li class="board_w_write" style="height:205px;">
			<ul class="board_w_cb">
				<li>
					<textarea name="contents" id="contents" title="����" rows="" cols="" style="width:330px; height:200px;"></textarea>
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
		<input type="submit" class="button" value="write" title="�۾���" />
		<input type="reset" class="button" value="reset" title="�ٽþ���" />
		<input type="button" class="button" value="back" title="�ڷ�" onclick="location.href='index.php<?php echo PAGE; ?>'" />
	</fieldset>
</div>
</form>
<!-- //Board Write Form -->