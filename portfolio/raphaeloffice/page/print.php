<?php include "../include/lib.php"; ?>
<!-- 프린트 -->
<link rel="stylesheet" type="text/css" href="../common/common.css" />
<link rel="stylesheet" type="text/css" href="../common/print.css" />
<div class="print_view">
<?php
if(!$_GET[sub_id]){
	$res = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and od='1'",$connect);
	$data = mysql_fetch_array($res);
	$mres = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and sub_id='$data[sub_id]'",$connect);
}else{
	$mres = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and sub_id='$_GET[sub_id]'",$connect);
}
	$mdata = mysql_fetch_array($mres);

	if($mdata[property] == html){
		echo nl2br($mdata[contents]);
	}elseif(file_exists($mdata[property].".php")){
		include $mdata[property].".php";
	}else{
		echo $mdata[property].".php";
		echo "가 없습니다.";
	}
?>
</div>
<div class="print_bt_area">
<input type="button" class="print_bt" value="프린트" title="프린트" style="float:right; margin:6px;" onclick="window.print();" />
</div>