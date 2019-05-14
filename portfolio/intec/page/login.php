<!-- 로그인 폼 -->
<?php
if(!$_SESSION[no]){
?>
<div class="login_area">
<form action="login_ok.php" method="post">
	<div style="padding:62px 0 0 35px;">
		<div style="float:left; width:176px;">
			<input type="text" name="member_id" title="아이디" class="input00" style="width:176px;" maxlength="8" />
			<input type="password" name="member_pw" title="비밀번호" class="input00" style="width:176px;" maxlength="8" />
		</div>
		<div style="float:left;">
			&nbsp;&nbsp;<input type="submit" class="login_bt" value="" title="로그인" />
		</div>
	</div>
</form>
</div>
<img src="../images/join_guide.jpg" width="160" height="22" alt="아직 회원이 아니십니까?" style="margin:10px 0 0 210px;" />&nbsp;
<a href="sub.php?main_id=mem_area&amp;sub_id=join"><img src="../images/join_bt.jpg" width="62" height="20" alt="회원가입" /></a>
<?php
}elseif($_SESSION[no]){
?>
<div class="login_area">
	<div style="padding:62px 0 0 35px;">
		<div style="float:left; width:176px;">
			<span style="font-weight:bold;"><?php echo $_SESSION[name]; ?></span> 님이 로그인 하셨습니다.
			<div style="text-align:center;">Lv. <span style="font-weight:bold;"><?php echo $_SESSION[member_lv]; ?></span></div>
		</div>
		<div style="float:left;">
			&nbsp;&nbsp;<input type="button" class="logout_bt" value="" title="로그아웃" onclick="{if(confirm('로그아웃 하시겠습니까?')) location.href='logout.php'}" />
		</div>
	</div>
</div>
<?php
if($_SESSION[member_lv] == 1){
?>
<a href="sub.php?main_id=admin&amp;sub_id=menu_list"><img src="../images/admin_bt.jpg" width="62" height="20" alt="관리자페이지" style="margin:10px 0 0 420px;" /></a>
<?php
}
?>
<?php
}
?>
