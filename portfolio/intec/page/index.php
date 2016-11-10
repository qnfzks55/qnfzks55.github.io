<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<title>InTEC into English Instruction</title>
<link rel="stylesheet" type="text/css" href="../common/common.css" />
<script type="text/javascript" src="../common/common.js"></script>
</head>

<body>
<div id="wrapper">
	<div id="main_page">
		<div id="sub_top"><!-- 로고 부분 -->
			<script type="text/javascript">flash("../source/logo.swf","900","134","logo","","transparent")</script>
		</div>
		<div id="top_navi"><!-- 네비게이션 -->
			<?php include "../include/navigation.php"; ?>
		</div>
		<div id="main_menu_view"><!-- 메인메뉴 -->
			<script type="text/javascript">flash("main_menu.swf","900","35","main_menu","","transparent")</script>
		</div>
		<div id="main_search_area"><!-- 메인 검색 부분 -->
			<div id="search_img">
				<input type="text" class="main_search_input" title="검색" style="margin-left:50px; margin-top:6px; float:left;" />
				<input type="submit" class="main_search_bt" title="검색" value="" style="margin-left:195px; margin-top:6px; margin-top:-19px; float:left;" />
			</div>
		</div>
		<div id="main_body"><!-- 메인 바디 -->
			<div id="main_login_area"><!-- 로그인 영역 -->
				<div id="main_login_style">
					<?php
					if(!$_SESSION[no]){
					?>
					<form action="login_ok.php" method="post">
						<div style="float:left; width:136px;">
							<input type="text" name="member_id" title="아이디" class="input00" style="width:136px;" maxlength="8" />
							<input type="password" name="member_pw" title="비밀번호" class="input00" style="width:136px;" maxlength="8" />
							<a href="#"><img src="../images/join_bt.jpg" width="62" height="20" alt="회원가입" style="margin:4px 0 0 5px;" /></a>
						</div>
						<div>
							&nbsp;&nbsp;&nbsp;<input type="submit" class="login_bt" value="" title="로그인" /><br />
						</div>
					</form>
					<?php
					}elseif($_SESSION[no]){
					?>
					<div style="float:left; width:132px; margin-left:4px;">
						<span style="font-weight:bold;"><?php echo $_SESSION[name]; ?></span> 님 환영 합니다.
						<div style="text-align:center;">Lv. <span style="font-weight:bold;"><?php echo $_SESSION[member_lv]; ?></span></div>
					</div>
					<div>
						&nbsp;&nbsp;<input type="button" class="logout_bt" value="" title="로그아웃" onclick="{if(confirm('로그아웃 하시겠습니까?')) location.href='logout.php'}" />
					</div>
						<?php
						if($_SESSION[member_lv] == 1){
						?>
							<a href="sub.php?main_id=admin&amp;sub_id=menu_list"><img src="../images/admin_bt.jpg" width="62" height="20" alt="관리자페이지" style="margin-left:10px;" /></a>
						<?php
						}
						?>
					<?php
					}
					?>
				</div>
			</div>
			<div id="main_notice_area"><!-- 공지사항 -->
				<div id="notice_style">
					<?php
					for($i = 1; $i <= 6; $i++){
					?>
						<ul>
							<li style="padding-top:5px;">
								<a href="" style="background:url(../images/notice_li.jpg) no-repeat 0% 30%;">&nbsp;&nbsp;&nbsp;게시판 테스트 중입니다. 영어 수업 목록 입니다.&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#aac92e; font-family:verdana; font-weight:bold; font-size:0.9em;">[2009-10-13]</span></a>
							</li>
						</ul>
					<?php
					}
					?>
				</div>
			</div>
			<div id="element_area"><!-- 초등 교육 --></div>
			<div id="middle_area"><!-- 중등 교육 --></div>
			<div id="q_a_area"><!-- 묻고 답하기 게시판 -->
				<div id="q_a_style">
					<?php
					for($i = 1; $i <= 5; $i++){
					?>
						<ul>
							<li style="padding-top:5px;">
								<a href="" style="background:url(../images/notice_li.jpg) no-repeat 0% 30%;">&nbsp;&nbsp;&nbsp;질문 테스트 중...&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#aac92e; font-family:verdana; font-weight:bold; font-size:0.9em;">[2009-10-13]</span></a>
							</li>
						</ul>
					<?php
					}
					?>
				</div>
			</div>
			<div id="video_list_area"><!-- 동영상 목록 -->
				<div id="video_list_style">
					<?php
					for($i = 1; $i <= 3; $i++){
					?>
						<ul>
							<li style="float:left; padding-left:11px;">
								<img src="../images/video_img.jpg" width="117" height="87" alt="동영상 수업" /><br />
									<div style="text-align:center; padding-top:4px;">영어 강의<br />
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
			<div id="univer_area"><!-- 중등 교육 --></div>
			<div id="main_banner"><!-- 메인 배너 --></div>
		</div>
		<div id="main_copy"><!-- 메인 카피라이트 --></div>
	</div>
</div>
</body>
</html>
