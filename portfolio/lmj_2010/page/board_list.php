<!-- Board List Start -->
<?php
if($_GET[board_list]){
	include $_GET[board_list].".php";
}else{
	// Page Function
	$_GET[page_num] = (!$_GET[page_num])?'1':$_GET[page_num];
	$page = 7;
	$start = ($_GET[page_num] - 1) * $page;

	$mres = mysql_query("select * from board where sid='$_GET[sid]'",$cnt);
	$total = mysql_num_rows($mres);
	$i = $start - $total;
?>
<div class="t_img_title">
	<img src="../images/contents/community/board_t.jpg" width="520" height="110" alt="BOARD - ������ ���� �� �� �ִ� �����ο� �Խ��� �Դϴ�." />
</div>
<div style="margin-bottom:4px;">
	<p>
		<img src="../images/contents/community/board_tip_img.jpg" width="9" height="9" alt="" />
		��ü <span class="bold"><?php echo $total; ?></span> ��
	</p>
</div>
<div class="board_bg">
	<ul>
		<li class="board_li" style="width:52px;">��ȣ</li>
		<li class="board_li" style="width:192px;">����</li>
		<li class="board_li" style="width:100px;">�ۼ���</li>
		<li class="board_li" style="width:100px;">�ۼ���</li>
		<li class="board_li" style="width:56px;">��ȸ</li>
	</ul>
</div>
<div class="board_con">
	<?php
	$res = mysql_query("select * from board where mid='$_GET[mid]' and sid='$_GET[sid]' order by no desc limit $start,$page",$cnt);
	for($i = $start - $total; $data = mysql_fetch_array($res); $i++){
	?>
	<ul>
		<li class="board_li2" style="width:52px;" title="<?php echo $i*-1; ?>"><?php echo $i*-1; ?></li>
		<li class="board_li2" style="width:192px; text-align:left;" title="<?php echo $data[subject]; ?>">
			<span class="board_li2st">
				<a href="index.php<?php echo PAGE; ?>&amp;board_list=board_view&amp;no=<?php echo $data[no]; ?>"><?php echo cut_str($data[subject],22); ?></a>
			</span>
		</li>
		<li class="board_li2" style="width:100px;" title="<?php echo $data[name]; ?>"><?php echo cut_str($data[name],8); ?></li>
		<li class="board_li2" style="width:100px;" title="<?php echo $data[date]; ?>"><?php echo $data[date]; ?></li>
		<li class="board_li2" style="width:56px;" title="<?php echo $data[hit]; ?>"><?php echo $data[hit]; ?></li>
	</ul>
	<?php
	}
	?>
</div>
<div class="board_bottom">
	<div style="float:left;">
	<?php
	// Page Number
	$ceil = ceil($total/$page);
	for($i = 0; $i < $ceil; $i++){
	if($_GET[page_num] == $i+1){ // Page Point
		echo "<div id='page_p'>".($i+1)."</div>";
	}else{
		?>
		<div id="page_n">
			<a href="index.php<?php echo PAGE; ?>&amp;page_num=<?php echo $i+1; ?>" title="<?php echo $i+1; ?>" id="page_over"><?php echo $i+1; ?></a>
		</div>
	<?php
		}
	}
	?>
	</div>
	<div class="board_w_bt">
		<input type="button" class="button" value="write" title="�۾���" onclick="location.href='index.php<?php echo PAGE; ?>&amp;board_list=board_write'" />
	</div>
</div>
<?php
}
?>
<!-- //Board List End -->