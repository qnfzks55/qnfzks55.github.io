<!-- �α��� �� -->
<?php
if(!$_SESSION[no]){
?>
<div class="login_area">
<form action="login_ok.php" method="post">
	<div style="padding:62px 0 0 35px;">
		<div style="float:left; width:176px;">
			<input type="text" name="member_id" title="���̵�" class="input00" style="width:176px;" maxlength="8" />
			<input type="password" name="member_pw" title="��й�ȣ" class="input00" style="width:176px;" maxlength="8" />
		</div>
		<div style="float:left;">
			&nbsp;&nbsp;<input type="submit" class="login_bt" value="" title="�α���" />
		</div>
	</div>
</form>
</div>
<img src="../images/join_guide.jpg" width="160" height="22" alt="���� ȸ���� �ƴϽʴϱ�?" style="margin:10px 0 0 210px;" />&nbsp;
<a href="sub.php?main_id=mem_area&amp;sub_id=join"><img src="../images/join_bt.jpg" width="62" height="20" alt="ȸ������" /></a>
<?php
}elseif($_SESSION[no]){
?>
<div class="login_area">
	<div style="padding:62px 0 0 35px;">
		<div style="float:left; width:176px;">
			<span style="font-weight:bold;"><?php echo $_SESSION[name]; ?></span> ���� �α��� �ϼ̽��ϴ�.
			<div style="text-align:center;">Lv. <span style="font-weight:bold;"><?php echo $_SESSION[member_lv]; ?></span></div>
		</div>
		<div style="float:left;">
			&nbsp;&nbsp;<input type="button" class="logout_bt" value="" title="�α׾ƿ�" onclick="{if(confirm('�α׾ƿ� �Ͻðڽ��ϱ�?')) location.href='logout.php'}" />
		</div>
	</div>
</div>
<?php
if($_SESSION[member_lv] == 1){
?>
<a href="sub.php?main_id=admin&amp;sub_id=menu_list"><img src="../images/admin_bt.jpg" width="62" height="20" alt="������������" style="margin:10px 0 0 420px;" /></a>
<?php
}
?>
<?php
}
?>
