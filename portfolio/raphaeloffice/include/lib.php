<?php

/* �α��� ���� */

session_start();



/* mysql ���� */

$connect = mysql_connect("localhost","audwhd55","dlaudwhd55");
mysql_select_db("audwhd55");


/* ������ �̵� �ڹ� */

define("PAGE","?main_id=$_GET[main_id]&amp;sub_id=$_GET[sub_id]");



/* ���â �Լ� */

function alert($msg){

	echo "

	<script type='text/javascript'>

		alert('$msg');

	</script>

	";

}



/* ������ �̵� */

function move($url){

	echo "

	<script type='text/javascript'>

		location.href='$url';

	</script>

	";

}



/* ����� �ڷ� �̵� */

function alertback($msg){

	echo "

	<script type='text/javascript'>

		alert('$msg');

		history.back();

	</script>

	";

}



/* ������ üũ */

function admin_chk(){

	if($_SESSION[member_lv] != 1){

		alertback("�����ڸ� ���� ���� �մϴ�.");

		exit;

	}

}



/* ���ڿ� �ڸ��� */

function cut_str($str,$len){

	if(strlen($str) > $len){

		$dot = "...";

	}

	$str = substr($str,0,$len);

	return $str.$dot;

}



/* �̹��� üũ */

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

			alertback("�̹��� ���ϸ� ���ε� �Ͻ� �� �ֽ��ϴ�.");

			exit;

			break;

	}

}



/* mysql,php �ڵ� ħ�� */

function NoFiles($file_name){

	$file_name = explode(".", strrev($file_name));

	$filex = strrev($file_name[0]);



	switch($filex){

		case '':

			exit;

			break;

		case 'html':

			alertback("���ȿ� ������ �ִ� ������ ���ε� �Ͻ� �� �����ϴ�.");

			exit;

			break;

		case 'php':

			alertback("���ȿ� ������ �ִ� ������ ���ε� �Ͻ� �� �����ϴ�.");

			exit;

			break;

		case 'dll':

			alertback("���ȿ� ������ �ִ� ������ ���ε� �Ͻ� �� �����ϴ�.");

			exit;

			break;

		case 'exe':

			alertback("���ȿ� ������ �ִ� ������ ���ε� �Ͻ� �� �����ϴ�.");

			exit;

			break;

	}

	return $file_name;

}



/* �˻� ���̶���Ʈȭ */

function hlt($str){

	return str_replace($_GET[search],"<span style='font-weight:bold;'>".$_GET[search]."</span>",$str);

}



/* �̸��� ���� */

function hex($str){

	for($i = 1; $i < strlen($str); $i++){

		$return .= '&#x'.bin2hex(substr($str,$i,1)).";";

	}

	return $return;

}



/* ī�װ� �Լ� */

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