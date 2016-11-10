<!-- 메인타이틀 추출 -->
<?php
$res = mysql_query("select * from main_menu where main_id='$_GET[main_id]' and hidden='0'",$connect);
for($i = 1; $data = mysql_fetch_array($res); $i++){
	echo $data[main_title];
}
?>