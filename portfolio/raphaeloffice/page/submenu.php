<!-- 서브메뉴 추출 -->
<?php
$res = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' order by od asc",$connect);
for($i = 1; $data = mysql_fetch_array($res); $i++){
?>
<ul style="margin:0px 0 0 30px;">
	<li>
		<a href="sub.php?main_id=<?php echo $_GET[main_id]; ?>&amp;sub_id=<?php echo $data[sub_id]; ?>" <?php if($_GET[sub_id] == $data[sub_id]) {?>style="height:20px; display:block; background:#6bbc4a; color:#fff; width:166px; padding:7px 0 0 0;"<?php } ?>><?php echo $data[sub_title]; ?></a>
	</li>
</ul>
<?php
}
?>