<?php include "../include/lib.php"; ?>
<menu>
<?php
$res = mysql_query("select * from main_menu where hidden='0'",$cnt);
for($i = 1; $data = mysql_fetch_array($res); $i++){
	$mres = mysql_query("select * from sub_menu where main_id='$data[main_id]' and od='1'",$cnt);
	$mdata = mysql_fetch_array($mres);
?>
<m title="<?php echo $data[main_title]; ?>" link="sub.php?main_id=<?php echo $data[main_id]; ?>&amp;sub_id=<?php echo $mdata[sub_id]; ?>">
	<?php
	$jres = mysql_query("select * from sub_menu where main_id='$data[main_id]' and hidden='0'",$cnt);
	for($i = 1; $jdata = mysql_fetch_array($jres); $i++){
	?>
		<s title="<?php echo $jdata[sub_title]; ?>" link="sub.php?main_id=<?php echo $jdata[main_id]; ?>&amp;sub_id=<?php echo $jdata[sub_id]; ?>"></s>
	<?php
	}
	?>
</m>
<?php
}
?>
</menu>