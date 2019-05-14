<!-- 검 색 -->
<div class="search_area">
	<form action="<?php echo getenv("PHP_SELF"); ?>" method="get">
		<input type="hidden" name="main_id" value="<?php echo $_GET[main_id]; ?>" />
		<input type="hidden" name="sub_id" value="<?php echo $_GET[sub_id]; ?>" />
		<div class="search_style">
			<select name="type">
				<option value="all">통합</option>
				<option value="contents">내용</option>
			</select>
			<input type="text" name="search" title="검색" value="<?php echo $_GET[search]; ?>" class="input00" style="margin-right:3px; width:300px; height:18px;" />
			<input type="submit" class="search_bt" value="" title="검색" style="cursor:pointer; height:23px;" />
		</div>
	</form>
</div>

<?php
if($_GET[search]){
	// 페이지화
	$_GET[page_num] = (!$_GET[page_num])?'1':$_GET[page_num];
	$page = 3;
	$start = ($_GET[page_num] - 1) * $page;

	$mres = mysql_query("select * from sub_menu where (sub_title like '%$_GET[search]%' or contents like '%$_GET[search]%') and property='html'",$cnt);
	$total = mysql_num_rows($mres);
	$i = $start - $total;

	$jres = mysql_query("select * from member where (member_id like '%$_GET[search]%' or name like '%$_GET[search]%' or email like '%$_GET[search]%')",$cnt);
	$jtotal = mysql_num_rows($jres);
	$i = $start - $jtotal;
		
		switch($_GET[type]){
			case 'all':
				include "search_con.php";
				break;
?>
<?php
		}
?>
<?php
}else{
	echo "<br /><br /><br /><div style='text-align:center; font-weight:bold;'>Input Keyword</div><br /><br />";
}
?>