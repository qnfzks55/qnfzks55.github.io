<?php
$res = mysql_query("select * from sub_menu where (sub_title like '%$_GET[search]%' or contents like '%$_GET[search]%') and property='html'",$cnt);
	while( $data = mysql_fetch_array($res) ){
		$search_num1 = substr_count($data[sub_title], $_GET[search]);
		$search_num2 = substr_count($data[contents], $_GET[search]);
		$search_con = $search_num1 + $search_num2;
	}
	$r1 = mysql_num_rows($res);
	
	if(!$search_con){
	echo "<br /><span style='color:#000;'><span style='font-weight:bold; background:url(../images/search_li.jpg) no-repeat 0% 40%;'>&nbsp;&nbsp;".$_GET[search]."</span>&nbsp;��(��) �˻��� �˻� ��� �Դϴ�.</span><br /><br />�� ����˻� ���&nbsp;<span style='font-weight:bold; color:#ff0000;'>".($r1)."</span>&nbsp;�� , �� ��ġ�ϴ� �ܾ� ����&nbsp;<span style='font-weight:bold; color:#ff0000;'>0</span>&nbsp;��";
	}

	if($search_con){
	echo "<br /><span style='color:#000;'><span style='font-weight:bold; background:url(../images/search_li.jpg) no-repeat 0% 40%;'>&nbsp;&nbsp;".$_GET[search]."</span>&nbsp;��(��) �˻��� �˻� ��� �Դϴ�.</span><br /><br />�� ����˻� ���&nbsp;<span style='font-weight:bold; color:#ff0000;'>".($r1)."</span>&nbsp;�� , �� ��ġ�ϴ� �ܾ� ����&nbsp;<span style='font-weight:bold; color:#ff0000;'>".($search_con)."</span>&nbsp;��";
	}
	$res = mysql_query("select * from sub_menu where (sub_title like '%$_GET[search]%' or contents like '%$_GET[search]%') and property='html' limit $start,$page",$cnt);
	for($i = $start - $total; $data = mysql_fetch_array($res); $i++){
?>
<div style="border-bottom:1px solid #ccc; margin:7px 0 7px 0;"></div>
	<ul>
		<li><span class="search_sub">��ȣ :</span> <?php echo $i*-1; ?></li>
		<li><span class="search_sub">������ ���� :</span> <?php echo hlt($data[sub_title]); ?></li>
		<li><span class="search_sub">������ ���� :</span> <?php echo hlt(strip_tags(cut_str($data[contents],410)))?></li>
		<li><span class="search_sub">�ּ� : </span> <a href="sub.php?main_id=<?php echo $data[main_id]; ?>&amp;sub_id=<?php echo $data[sub_id]; ?>&amp;search=<?php echo $_GET[search]; ?>">sub.php?main_id=<?php echo $data[main_id]; ?>&amp;sub_id=<?php echo $data[sub_id]; ?></a></li>
	</ul>
<?php
	}
?>
<div style="text-align:center; margin-top:30px;">
<?php
// ������ȭ
$ceil = ceil($total/$page);
for($i = 0; $i < $ceil; $i++){
if($_GET[page_num] == $i+1){
	echo "<span style='font-weight:bold; background:#840000; color:#fff; padding:5px 7px 0 7px;'>".($i+1)."</span>";
}else{
	?>
	<a href="sub.php?main_id=<?php echo $data[main_id]; ?>&amp;sub_id=<?php echo $data[sub_id]; ?>"><?php echo $i; ?></a>
	<?php
}
}
?>
</div>
