<a href="#"><img src="../images/site_home.jpg" width="41" height="19" alt="Ȩ" /></a>
<a href="#"><img src="../images/site_sitemap.jpg" width="48" height="19" alt="����Ʈ��" /></a>
<a href="#"><img src="../images/site_search.jpg" width="44" height="19" alt="�˻�" /></a>
<a href="#"><img src="../images/site_join.jpg" width="30" height="19" alt="ȸ������" /></a>
<?php
if(!$_SESSION[no]){
?>
<a href="#"><img src="../images/site_login.jpg" width="38" height="19" alt="�α���" /></a>
<?php
}elseif($_SESSION[no]){
?>
<a href="#"><img src="../images/site_logout.jpg" width="38" height="19" alt="�α׾ƿ�" /></a>
<?php
}if($_SESSION[member_lv] == 1){
?>
<a href="#"><img src="../images/site_admin.jpg" width="64" height="19" alt="������������" /></a>
<?php
}
?>