<!-- Contents Start -->
<?php
if(!$_GET[sid]){
	$res = mysql_query("select * from sub_menu where mid='$_GET[mid]' and od='1'",$cnt);
	$data = mysql_fetch_array($res);
	$mres = mysql_query("select * from sub_menu where mid='$_GET[mid]' and sid='$data[sid]'",$cnt);
}else{
	$mres = mysql_query("select * from sub_menu where mid='$_GET[mid]' and sid='$_GET[sid]'",$cnt);
}
	$mdata = mysql_fetch_array($mres);
	
	if($mdata[property] == "html"){
		echo hlt(nl2br($mdata[contents]));
	}elseif(file_exists($mdata[property].".php")){
		include $mdata[property].".php";
	}else{
		echo $mdata[property].".php";
		echo "페이지를 만들어 주세요.";
	}
?>
<!-- //Contents End -->