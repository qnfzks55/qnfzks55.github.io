<!-- »çÀÌÆ®¸Ê -->
<div class="sitemap">
<?php
$res = mysql_query("select * from main_menu where od='0'",$connect);
for($i = 1; $data = mysql_fetch_array($res); $i++){
?>
<div style="float:left; height:130px;">
	<div class="main_site">
		<?php echo $data[main_ftitle]; ?>
	</div>
	<div class="sub_site">
	<?php
		$mres = mysql_query("select * from sub_menu where main_id='$data[main_id]'",$connect);
		for($i = 1; $mdata  = mysql_fetch_array($mres); $i++){
	?>
		<ul>
			<li style="border-bottom:1px solid #ccc; padding:4px;">
				<a href="sub.php?main_id=<?php echo $data[main_id]; ?>&amp;sub_id=<?php echo $mdata[sub_id]; ?>" style="background:url(../images/main_board_li.jpg) no-repeat 0%;">&nbsp;&nbsp;&nbsp;<?php echo $mdata[sub_title]; ?></a>
			</li>
		</ul>
	<?php
		}
	?>
	</div>
</div>
<?php
}
?>
</div>