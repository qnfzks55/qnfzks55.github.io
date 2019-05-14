<?php
if(!$_GET[sub_id]){
	$res = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and od='1'",$cnt);
	$data = mysql_fetch_array($res);
	$mres = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and sub_id='$data[sub_id]'",$cnt);
}else{
	$mres = mysql_query("select * from sub_menu where main_id='$_GET[main_id]' and sub_id='$_GET[sub_id]'",$cnt);
}
	$mdata = mysql_fetch_array($mres);
	
	if($mdata[property] == "html"){
		echo nl2br($mdata[contents]);
	}elseif(file_exists($mdata[property].".php")){
		include $mdata[property].".php";
	}else{
		echo $mdata[property].".php";
		echo "를 만들어 주쇼.";
	}
?>