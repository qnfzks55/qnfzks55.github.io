<!-- �Խ��� ���� -->
<?php
$res = mysql_query("select * from board where no='$_GET[no]'",$connect);
$data = mysql_fetch_array($res);

/* ��ȸ�� �ø��� */
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
		<img src="../file/<?php echo $data[photo]; ?>" width="200" height="146" alt="Ŭ���Ͻø� �ڼ��� ���� �� �ֽ��ϴ�." style="cursor:pointer;" onclick="window.open('../file/<?php echo $data[photo]; ?>','_blank')" />
		<?php
}else{
		?>
		<img src="../images/no_img.jpg" width="200" height="146" alt="�̹����� �����ϴ�." />
		<?php
		}
		?>
		</td>
	</tr>
	<tr>
		<td colspan="6" style="text-align:center; padding:7px;">
			<input type="button" class="button00" value="���" title="���" onclick="location.href='sub.php<?php echo PAGE; ?>'" />&nbsp;
			<input type="button" class="button00" value="����" title="����" onclick="location.href='sub.php<?php echo PAGE; ?>&amp;notice_board=notice_board_password&amp;no=<?php echo $data[no]; ?>'" />&nbsp;
			<input type="button" class="button00" value="����" title="����" onclick="location.href='sub.php<?php echo PAGE; ?>&amp;notice_board=notice_board_password_2&amp;no=<?php echo $data[no]; ?>'" />&nbsp;
			<input type="button" class="button02" value="��õ" title="��õ" onclick="location.href='sub.php<?php echo PAGE; ?>&amp;notice_board=notice_board_famous&amp;no=<?php echo $data[no]; ?>'" />
		</td>
	</tr>
</table>