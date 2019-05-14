<!-- Select Check -->
<script>
function chk(){
	var a = document.getElementById("chk");
	if(!chkblank(a.password, "��й�ȣ�� ��Ȯ�� �Է� �� �ּ���.")){ return false; }

	return true;

}
</script>
<!-- //Select Check -->

<!-- Board Title -->
<div class="t_img_title">
	<img src="../images/contents/community/board_t.jpg" width="520" height="110" alt="BOARD - ������ ���� �� �� �ִ� �����ο� �Խ��� �Դϴ�." />
</div>
<!-- //Board Title -->
<!-- Board Password Form -->
<form action="board_password_ok.php<?php echo PAGE; ?>" method="post" id="chk" onsubmit="return chk()">
<fieldset>
	<legend>no���簪</legend>
	<input type="hidden" name="no" value="<?php echo $_GET[no]; ?>" />
</fieldset>
<div class="board_w_bar"></div>
<div class="board_w_form">
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
	<fieldset>
		<legend>��ư</legend>
			<ul class="center">
				<li>
					<input type="submit" class="button" value="Ok" title="Ȯ��" />
					<input type="button" class="button" value="back" title="�ڷ�" onclick="location.href='index.php?mid=community&amp;sid=board&amp;board_list=board_view&amp;no=<?php echo $_GET[no]; ?>'" />
				</li>
			</ul>
	</fieldset>
</div>
</form>
<!-- //Board Password Form -->