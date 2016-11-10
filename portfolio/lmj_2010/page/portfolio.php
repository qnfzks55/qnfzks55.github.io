<?php
// Page Function
$_GET[page_num] = (!$_GET[page_num])?'1':$_GET[page_num];
$page = 2;
$start = ($_GET[page_num] - 1) * $page;

$mres = mysql_query("select * from portfolio",$cnt);
$total = mysql_num_rows($mres);
$i = $start - $total;
?>
<div class="pt_title">
	<img src="../images/contents/portfolio/title.jpg" width="520" height="112" alt="PORTFOLIO - 이명종의 포트폴리오" />
</div>
<div class="ptc_area">
<?php
$res = mysql_query("select * from portfolio order by no asc limit $start,$page",$cnt);
for($i = $start - $total; $data = mysql_fetch_array($res); $i++){
?>
	<ul class="pt_ul">
		<li><?php echo $data[img]; ?></li>
		<li style="color:#ff0101;"><?php echo $data[title]; ?></li>
		<li class="pt_li">	
			<?php
			if($data[hidden] == "local"){
			?>
				<a onclick="window.open('http://125.249.160.133/~abc/<?php echo $data[url]; ?>','_blank')" class="c" title="http://125.249.160.133/~abc/<?php echo $data[url]; ?>">http://localhost/<?php echo $data[url]; ?></a>
			<?php
			}elseif($data[hidden] == "url"){
			?>
				<a onclick="window.open('<?php echo $data[url]; ?>','_blank')" class="c" title="<?php echo $data[url]; ?>"><?php echo $data[url]; ?></a>
			<?php
			}else{
			?>
				<a onclick="window.open('../images/contents/portfolio/<?php echo $data[img_title]; ?>','_blank')" class="c" title="<?php echo $data[url]; ?>"><?php echo $data[url]; ?></a>
			<?php
			}
			?>
		</li>
		<li><?php echo $data[description]; ?></li>
		<li style="padding-top:5px;">
			<?php
			if($data[hidden] == "local"){
			?>
				<a onclick="window.open('http://125.249.160.133/~abc/<?php echo $data[url]; ?>','_blank')" class="c"><img src="../images/contents/portfolio/view_bt.jpg" width="35" height="15" alt="보기" /></a>
			<?php
			}elseif($data[hidden] == "url"){
			?>
				<a onclick="window.open('<?php echo $data[url]; ?>','_blank')" class="c"><img src="../images/contents/portfolio/view_bt.jpg" width="35" height="15" alt="보기" /></a>
			<?php
			}else{
			?>
				<a onclick="window.open('../images/contents/portfolio/<?php echo $data[img_title]; ?>','_blank')" class="c"><img src="../images/contents/portfolio/view_bt.jpg" width="35" height="15" alt="보기" /></a>
			<?php
			}
			?>
		</li>
	</ul>
<?php
}
?>
</div>
<div class="pt_page">
	<div class="ptp_area">
		<?php
			// Page Number
			$ceil = ceil($total/$page);
			for($i = 0; $i < $ceil; $i++){
			if($_GET[page_num] == $i+1){ // Page Point
				echo "<div id='page_p'>".($i+1)."</div>";
			}else{
				?>
					<div id="page_n">
						<a href="index.php<?php echo PAGE; ?>&amp;page_num=<?php echo $i+1; ?>" title="<?php echo $i+1; ?>" id="page_over"><?php echo $i+1; ?></a>
					</div>
				<?php
			}
			}
		?>		
	</div>
</div>