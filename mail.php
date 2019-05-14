<?php

$to = "lmj5@naver.com";
$headers = "이메일 정보 : ".$_POST[email]."\n"."문의자 : ".$_POST[name];
$contents = "내용 : ".$_POST[contents];
$subject = $_POST[subject];


mail($to, $subject, $contents, $headers);

echo "
	<script>
		alert('Send ok!');
		history.back();
	</script>";
?>