<?php
if($_GET[qa_board]){
	include $_GET[qa_board].".php";
}else{
	// 페이지화
	$_GET[page_num] = (!$_GET[page_num])?'1':$_GET[page_num];
	$page = 5;
	$start = ($_GET[page_num] -1) * $page;

	$mres = mysql_query("select * from board where sub_id='$_GET[sub_id]'",$connect);
	$total = mysql_num_rows($mres);
	$i = $start - $total;
?>
<div style="float:right; margin:2px 32px 5px 8px;">
<?php
/* 카테고리 목록 */
$linkurl = "sub.php?main_id=$_GET[main_id]&amp;sub_id=$_GET[sub_id]";
echo getCategoryList($_GET[main_id],"category",$_GET[category],"ChangeCategory('$linkurl');");

?>
</div>
<table cellpadding="0" cellspacing="0" class="table00">
	<tr>
		<th class="table00_th"><img src="../images/board_no.jpg" /></th>
		<th class="table00_th"><img src="../images/board_subject.jpg" /></th>
		<th class="table00_th"><img src="../images/board_name.jpg" /></th>
		<th class="table00_th" style="width:15%;"><img src="../images/board_date.jpg" /></th>
		<th class="table00_th"><img src="../images/board_fam.jpg" /></th>
		<th class="table00_th"><img src="../images/board_hit.jpg" /></th>
	</tr>
	<?php
		if(!$_GET[category]){
			$que = "select * from board where main_id='$_GET[main_id]' and sub_id='$_GET[sub_id]' order by no asc limit $start,$page";
		}elseif($_GET[category]){
			$que = "select * from board where main_id='$_GET[main_id]' and sub_id='$_GET[sub_id]' and category='$_GET[category]' order by no asc limit $start,$page";
		}
			$res = mysql_query($que,$connect);
			for($i = $start - $total; $data = mysql_fetch_array($res); $i++){
	?>
	<tr>
		<td class="table00_td" style="color:#6bbc4a; font-family:verdana; font-size:0.75em;"><?php echo $i*-1; ?></td>
		<?php
		if($data[contents]){
		?>
		<td class="table00_td"><span class="board_view"><a href="sub.php<?php echo PAGE; ?>&amp;qa_board=qboard_view&amp;no=<?php echo $data[no]; ?>"><?php echo $data[subject]; ?></a></span></td>
		<?php
		}elseif($data[answer]){
		?>
		<td class="table00_td"><span class="board_view"><img src="../images/board_answer.jpg" />&nbsp;<a href="sub.php<?php echo PAGE; ?>&amp;qa_board=aboard_view&amp;no=<?php echo $data[no]; ?>"><?php echo $data[subject]; ?></a></span>
		</td>
		<?php
		}
		?>
		<td class="table00_td"><?php echo $data[name]; ?></td>
		<td class="table00_td"><?php echo $data[date]; ?></td>
		<td class="table00_td"><?php echo $data[fam]; ?></td>
		<td class="table00_td"><?php echo $data[hit]; ?></td>
	</tr>
	<?php
		}
	?>
	<tr>
		<td colspan="6" style="text-align:right; padding:7px 5px 7px 7px;">
			<input type="button" class="button00" value="글쓰기" onclick="location.href='sub.php<?php echo PAGE; ?>&amp;qa_board=qboard_write'" />
		</td>
	</tr>
</table>
<div style="text-align:center; padding:7px;">
<?php
	// 페이지 갯수
	$ceil = ceil($total/$page);
	for($i = 0; $i < $ceil; $i++){
	if($_GET[page_num] == $i+1){
		echo "<span style='font-weight:bold; border:1px solid #ccc; color:#ff0000; padding:3px 6px 3px 6px;'>".($i+1)."</span>";
	}else{
		?>
		<a href="sub.php<?php echo PAGE; ?>&amp;page_num=<?php echo $i+1; ?>"><span style="color:#000; font-weight:bold; padding:3px 6px 3px 6px; border:1px solid #ccc;"><?php echo $i+1; ?></span></a>
		<?php
	}
	}
?>
</div>
<?php
}
?>