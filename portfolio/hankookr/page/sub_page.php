<div id="menu_top">
	<img src="../image/logo.jpg" alt="한국재활용산업개발" class="c" onclick="location.href='index.php'" />
</div>

<div id="main_menu">
	<script>flash("../swf/menu.swf?tid=<?=$_GET[tid]?>","1000","72","menu");</script>
</div>

<div id="sub_con">
	<div id="sub_visual_area">
		<script>flash("../swf/sub_visual.swf","980","170","sub_visual")</script>
	</div>
	<div id="sub_m_area">
		<script>flash("../swf/sub_menu_2.swf?tid=<?=$_GET[tid]?>&sid=<?=$_GET[sid]?>","178","452","sub_menu_2");</script>
	</div>
	<div id="content_area">
	<div id="con_top">
		<div><img src="../image/title/<?=$_GET[sid]?>.jpg" width="208" height="74" alt="" /></div>
	</div>
	<div id="con_bodys">
		<?php
		include "../contents/".$_GET[sid].".php";
		?>
	</div>
	</div>
</div>