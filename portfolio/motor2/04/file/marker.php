<?php
// download.php
$file = "marker.jpg";
$fp = "marker.jpg";
Header("Content-Type: application/octet-stream");
Header("Content-Disposition: attachment; filename=$file");
Header("Content-Transfer-Encoding: binary");
Header("Content-Length: ".(string)(filesize($file)));
Header("Cache-Control: cache, must-revalidate");
Header("Pragma: no-cache");
Header("Expires: 0"); 
$fp = fopen("$file", "rb");
while(!feof($fp)){
	echo fread($fp, 1048576*2);
	flush();
}
	fclose ($fp);
?>