<a href="#"><img src="../images/site_home.jpg" width="41" height="19" alt="홈" /></a>
<a href="#"><img src="../images/site_sitemap.jpg" width="48" height="19" alt="사이트맵" /></a>
<a href="#"><img src="../images/site_search.jpg" width="44" height="19" alt="검색" /></a>
<a href="#"><img src="../images/site_join.jpg" width="30" height="19" alt="회원가입" /></a>
<?php
if(!$_SESSION[no]){
?>
<a href="#"><img src="../images/site_login.jpg" width="38" height="19" alt="로그인" /></a>
<?php
}elseif($_SESSION[no]){
?>
<a href="#"><img src="../images/site_logout.jpg" width="38" height="19" alt="로그아웃" /></a>
<?php
}if($_SESSION[member_lv] == 1){
?>
<a href="#"><img src="../images/site_admin.jpg" width="64" height="19" alt="관리자페이지" /></a>
<?php
}
?>