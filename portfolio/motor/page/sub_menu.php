<?php include "../include/lib.php"; ?>
<?php
$mres = mysql_query("select * from main_menu where main_id='$_GET[main_id]'",$cnt);
$mdata = mysql_fetch_array($mres);
?>
<menu title="<?php echo $mdata[main_title]; ?>">
<?php
$res = mysql_query("select * from sub_menu where main_id='$_GET[main_id]'",$cnt);
for($i = 1; $data = mysql_fetch_array($res); $i++){
?>
<m title="<?php echo $data[sub_title]; ?>" link="sub.php?main_id=<?php echo $data[main_id]; ?>&amp;sub_id=<?php echo $data[sub_id]; ?>" target="_self" sub_id="<?=$data[sub_id]?>"></m>
<?php
}
?>
</menu>