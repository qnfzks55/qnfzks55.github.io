<!-- 게시판 보기 -->
<?php
$res = mysql_query("select * from board where no='$_GET[no]'",$connect);
$data = mysql_fetch_array($res);

/* 조회수 늘리기 */
mysql_query("update board set hit = hit + 1 where no='$_GET[no]';",$connect);
?>
<table cellpadding="0" cellspacing="0" class="table01" style="width:650px;">
	<tr style="background:#f7f7f7;">
		<th class="table01_th" style="padding:8px;">Subject *</th>
		<td class="table01_td"><span title="<?php echo $data[subject]; ?>"><?php echo cut_str($data[subject],4); ?></span></td>
		<th class="table01_th">&nbsp;</th>
		<td class="table01_td">&nbsp;</td>
		<th class="table01_th">Hit *</th>
		<td class="table01_td"><?php echo $data[hit]; ?></td>
	</tr>
	<tr>
		<th class="table01_th" style="padding:8px;">Category *</th>		
		<td class="table01_td"><?php echo $data[category]; ?></td>		
		<th class="table01_th">Name *</th>			
		<td class="table01_td"><?php echo $data[name]; ?></td>		
		<th class="table01_th">Famous *</th>		
		<td class="table01_td"><?php echo $data[fam]; ?></td>		
	</tr>
	<tr>
		<td colspan="6" class="table01_td" style="height:100px; padding:7px;" valign="top">
			<?php echo $data[contents]; ?>
		</td>
	</tr>
	<tr>
		<td colspan="6" class="table01_td" valign="top">
		<?php
		if($data[photo]){
			$size = getimagesize("../file/".$data[photo]);
			$w = $size[0];
			$h = $size[1];
		?>
		<img src="../file/<?php echo $data[photo]; ?>" width="200" height="146" alt="클릭하시면 자세히 보실 수 있습니다." style="cursor:pointer;" onclick="window.open('../file/<?php echo $data[photo]; ?>','_blank')" />
		<?php
}else{
		?>
		<img src="../images/no_img.jpg" width="200" height="146" alt="이미지가 없습니다." />
		<?php
		}
		?>
		</td>
	</tr>
	<tr>
		<td colspan="6" style="text-align:center; padding:7px;">
			<input type="button" class="button00" value="목록" title="목록" onclick="location.href='sub.php<?php echo PAGE; ?>'" />&nbsp;
			<input type="button" class="button00" value="수정" title="수정" onclick="location.href='sub.php<?php echo PAGE; ?>&amp;notice_board=notice_board_password&amp;no=<?php echo $data[no]; ?>'" />&nbsp;
			<input type="button" class="button00" value="삭제" title="삭제" onclick="location.href='sub.php<?php echo PAGE; ?>&amp;notice_board=notice_board_password_2&amp;no=<?php echo $data[no]; ?>'" />&nbsp;
			<input type="button" class="button02" value="추천" title="추천" onclick="location.href='sub.php<?php echo PAGE; ?>&amp;notice_board=notice_board_famous&amp;no=<?php echo $data[no]; ?>'" />
		</td>
	</tr>
</table>