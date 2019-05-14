<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<title>InTEC into English Instruction</title>
<link rel="stylesheet" type="text/css" href="../common/common.css" />
<script src="../common/common.js"></script>
</head>

<body>
<div id="wrapper">
	<div id="main_page">
		<div id="sub_top"><!-- �ΰ� �κ� -->
			<script>flash("../source/logo.swf","900","134","logo","","transparent")</script>
		</div>
		<div id="top_navi"><!-- �׺���̼� -->
			<?php include "../include/navigation.php"; ?>
		</div>
		<div id="main_menu_view"><!-- ���θ޴� -->
			<script>flash("main_menu.swf","900","35","main_menu","","transparent")</script>
		</div>
		<div id="main_search_area"><!-- ���� �˻� �κ� -->
			<div id="search_img">
				<input type="text" class="main_search_input" title="�˻�" style="margin-left:50px; margin-top:6px; float:left;" />
				<input type="submit" class="main_search_bt" title="�˻�" value="" style="margin-left:195px; margin-top:6px; margin-top:-19px; float:left;" />
			</div>
		</div>
		<div id="main_body"><!-- ���� �ٵ� -->
			<div id="main_login_area"><!-- �α��� ���� -->
				<div id="main_login_style">
					<?php
					if(!$_SESSION[no]){
					?>
					<form action="login_ok.php" method="post">
						<div style="float:left; width:136px;">
							<input type="text" name="member_id" title="���̵�" class="input00" style="width:136px;" maxlength="8" />
							<input type="password" name="member_pw" title="��й�ȣ" class="input00" style="width:136px;" maxlength="8" />
							<a href="#"><img src="../images/join_bt.jpg" width="62" height="20" alt="ȸ������" style="margin:4px 0 0 5px;" /></a>
						</div>
						<div>
							&nbsp;&nbsp;&nbsp;<input type="submit" class="login_bt" value="" title="�α���" /><br />
						</div>
					</form>
					<?php
					}elseif($_SESSION[no]){
					?>
					<div style="float:left; width:132px; margin-left:4px;">
						<span style="font-weight:bold;"><?php echo $_SESSION[name]; ?></span> �� ȯ�� �մϴ�.
						<div style="text-align:center;">Lv. <span style="font-weight:bold;"><?php echo $_SESSION[member_lv]; ?></span></div>
					</div>
					<div>
						&nbsp;&nbsp;<input type="button" class="logout_bt" value="" title="�α׾ƿ�" onclick="{if(confirm('�α׾ƿ� �Ͻðڽ��ϱ�?')) location.href='logout.php'}" />
					</div>
						<?php
						if($_SESSION[member_lv] == 1){
						?>
							<a href="sub.php?main_id=admin&amp;sub_id=menu_list"><img src="../images/admin_bt.jpg" width="62" height="20" alt="������������" style="margin-left:10px;" /></a>
						<?php
						}
						?>
					<?php
					}
					?>
				</div>
			</div>
			<div id="main_notice_area"><!-- �������� -->
				<div id="notice_style">
					<?php
					for($i = 1; $i <= 6; $i++){
					?>
						<ul>
							<li style="padding-top:5px;">
								<a href="" style="background:url(../images/notice_li.jpg) no-repeat 0% 30%;">&nbsp;&nbsp;&nbsp;�Խ��� �׽�Ʈ ���Դϴ�. ���� ���� ��� �Դϴ�.&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#aac92e; font-family:verdana; font-weight:bold; font-size:0.9em;">[2009-10-13]</span></a>
							</li>
						</ul>
					<?php
					}
					?>
				</div>
			</div>
			<div id="element_area"><!-- �ʵ� ���� --></div>
			<div id="middle_area"><!-- �ߵ� ���� --></div>
			<div id="q_a_area"><!-- ���� ���ϱ� �Խ��� -->
				<div id="q_a_style">
					<?php
					for($i = 1; $i <= 5; $i++){
					?>
						<ul>
							<li style="padding-top:5px;">
								<a href="" style="background:url(../images/notice_li.jpg) no-repeat 0% 30%;">&nbsp;&nbsp;&nbsp;���� �׽�Ʈ ��...&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#aac92e; font-family:verdana; font-weight:bold; font-size:0.9em;">[2009-10-13]</span></a>
							</li>
						</ul>
					<?php
					}
					?>
				</div>
			</div>
			<div id="video_list_area"><!-- ������ ��� -->
				<div id="video_list_style">
					<?php
					for($i = 1; $i <= 3; $i++){
					?>
						<ul>
							<li style="float:left; padding-left:11px;">
								<img src="../images/video_img.jpg" width="117" height="87" alt="������ ����" /><br />
									<div style="text-align:center; padding-top:4px;">���� ����<br />
										<a href="" style="background:url(./images/notice_li.jpg) no-repeat 0% 30%;">
											<span style="color:#aac92e; font-family:verdana; font-weight:bold; font-size:0.9em;">[2009-10-13]</span>
										</a>
									</div>
							</li>
						</ul>
					<?php
					}
					?>
				</div>
			</div>
			<div id="univer_area"><!-- �ߵ� ���� --></div>
			<div id="main_banner"><!-- ���� ��� --></div>
		</div>
		<div id="main_copy"><!-- ���� ī�Ƕ���Ʈ --></div>
	</div>
</div>
</body>
</html>
