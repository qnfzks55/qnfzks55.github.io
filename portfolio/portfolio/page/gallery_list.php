<!-- Gallery List Start -->
<?php
if($_GET[gallery_list]){
	include $_GET[gallery_list].".php";
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
	<img src="../images/contents/community/gallery_title.jpg" width="520" height="109" alt="GALLERY - 누구나 사진을 올릴 수 있는 자유로운 갤러리 입니다." />
</div>
<div class="gallery_area">
<?php
$res = mysql_query("select * from board where mid='$_GET[mid]' and sid='$_GET[sid]' order by no desc limit $start,$page",$cnt);
for($i = $start - $total; $data = mysql_fetch_array($res); $i++){
?>
	<div class="gallery_bor">
		<div class="gallery_img">
			<?php
			if($data[photo]){
			?>
				<img src="../file/<?php echo $data[file]; ?>" width="144" height="90" alt="<?php echo $data[photo]; ?>" />
			<?php
			}else{
			?>
				<img src="../images/contents/community/gallery_no_img.jpg" width="144" height="90" alt="이미지가 없습니다." />
			<?php
			}
			?>
		</div>
		<div class="gallery_body">
			<h4><a href="" title="<?php echo $data[subject]; ?>"><?php echo $data[subject]; ?></a></h4>
		</div>
		<div class="gallery_body">
			<p title="<?php echo $data[name]; ?>&nbsp;<?php echo $data[date]; ?>"><?php echo $data[name]; ?>&nbsp;<?php echo $data[date]; ?></p>
		</div>
		<div class="gallery_body">
			<p title="<?php echo $data[contents]; ?>"><?php echo $data[contents]; ?></p>
		</div>
	</div>
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
		<input type="button" class="button" value="write" title="글쓰기" onclick="location.href='index.php<?php echo PAGE; ?>&amp;gallery_list=gallery_write'" />
	</div>
</div>
<?php
}
?>
<!-- //Gallery List End -->