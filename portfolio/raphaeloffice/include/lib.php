<?php

/* 로그인 유지 */

session_start();



/* mysql 접속 */

$connect = mysql_connect("localhost","audwhd55","dlaudwhd55");
mysql_select_db("audwhd55");


/* 페이지 이동 자바 */

define("PAGE","?main_id=$_GET[main_id]&amp;sub_id=$_GET[sub_id]");



/* 경고창 함수 */

function alert($msg){

	echo "

	<script type='text/javascript'>

		alert('$msg');

	</script>

	";

}



/* 페이지 이동 */

function move($url){

	echo "

	<script type='text/javascript'>

		location.href='$url';

	</script>

	";

}



/* 경고후 뒤로 이동 */

function alertback($msg){

	echo "

	<script type='text/javascript'>

		alert('$msg');

		history.back();

	</script>

	";

}



/* 관리자 체크 */

function admin_chk(){

	if($_SESSION[member_lv] != 1){

		alertback("관리자만 접근 가능 합니다.");

		exit;

	}

}



/* 문자열 자르기 */

function cut_str($str,$len){

	if(strlen($str) > $len){

		$dot = "...";

	}

	$str = substr($str,0,$len);

	return $str.$dot;

}



/* 이미지 체크 */

function NoScriptFiles($file_name){

	$file_name = explode(".", strrev($file_name));

	$filex = strrev($file_name[0]);



	switch($filex){

		case '':

		case 'jpg':

		case 'jpeg';

		case 'gif':

		case 'png':

			break;

			alertback("이미지 파일만 업로드 하실 수 있습니다.");

			exit;

			break;

	}

}



/* mysql,php 코드 침투 */

function NoFiles($file_name){

	$file_name = explode(".", strrev($file_name));

	$filex = strrev($file_name[0]);



	switch($filex){

		case '':

			exit;

			break;

		case 'html':

			alertback("보안에 위험이 있는 파일은 업로드 하실 수 없습니다.");

			exit;

			break;

		case 'php':

			alertback("보안에 위험이 있는 파일은 업로드 하실 수 없습니다.");

			exit;

			break;

		case 'dll':

			alertback("보안에 위험이 있는 파일은 업로드 하실 수 없습니다.");

			exit;

			break;

		case 'exe':

			alertback("보안에 위험이 있는 파일은 업로드 하실 수 없습니다.");

			exit;

			break;

	}

	return $file_name;

}



/* 검색 하이라이트화 */

function hlt($str){

	return str_replace($_GET[search],"<span style='font-weight:bold;'>".$_GET[search]."</span>",$str);

}



/* 이메일 보안 */

function hex($str){

	for($i = 1; $i < strlen($str); $i++){

		$return .= '&#x'.bin2hex(substr($str,$i,1)).";";

	}

	return $return;

}



/* 카테고리 함수 */

function getCategoryList($main_id,$objname="",$dvalue="",$linkurl=""){

	$cateComboList = "";

	if($main_id){

		$res = mysql_query("select category from main_menu where main_id='$main_id'");

		if( $data = mysql_fetch_array($res) ){

			$cateList = $data[category];

		}

		$cateComboList = "<select name='$objname' onchange=\"$linkurl\">";

		$cateArray = explode("/", $cateList);

		foreach($cateArray as $cate){

			if($dvalue == $cate){

				$selected = "selected";

			}else{

				$selected = "";

			}

			$cateComboList .= "<option value='$cate' $selected>$cate</option>";

		}

		$cateComboList .= "</select>";

	}

	return $cateComboList;

}

?>