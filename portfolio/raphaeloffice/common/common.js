/* 플래시 */
function flash(url,w,h,id,bg,win,params){
	var str = 
		"<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0' width='"+w+"' height='"+h+"' id='"+id+"' align='middle'>"+
		"<param name='allowScriptAccess' value='sameDomain' />"+
		"<param name='allowFullScreen' value='false' />"+
		"<param name='movie' value='"+url+"' />"+
		"<param name='quality' value='high' />"+
		"<param name='bgcolor' value='"+bg+"' />"+
		"<param name='wmode' value='"+win+"' />"+
		"<param name='FlashVars' value='"+params+"' />"+
		"<embed src='"+url+"' quality='high' wmode='"+win+"' bgcolor='"+bg+"' width='"+w+"' height='"+h+"' name='"+id+"' align='middle' allowScriptAccess='sameDomain' allowFullScreen='false' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' />"+
		"</object>";

	document.write(str);
}

/* 카테고리 제어 */
function ChangeCategory(linkurl){
	var cate = document.all.category.value;
	location.href = linkurl + "&category=" + cate;
}

/* 프린트 */
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
  if(popUpWin)
  {
    if(!popUpWin.closed) popUpWin.close();
  }
  popUpWin = window.open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menub ar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+width+',height='+height+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

/* 빈칸 체크 */
function chkblank(obj,msg){
	if(!obj.value){
		alert(msg);
		obj.focus();
		obj.style.background = "#fffdcd";
		return false;
	}
	obj.style.background = "#fff";
	return true;
}

/* 아이디 체크 */
function chkid(obj,msg){
	var reg = new RegExp(/^[a-zA-Z0-9]{1,}$/);
	if(reg.test(obj.value) == false){
		alert(msg);
		obj.focus();
		obj.style.background = "#fffdcd";
		return false;
	}
	obj.style.background = "#fff";
	return true;
}

/* 숫자 체크 */
function chknum(obj,msg){
	var reg = new RegExp(/^[0-9]{1,}$/);
	if(reg.test(obj.value) == false){
		alert(msg);
		obj.focus();
		obj.style.background = "#fffdcd";
		return false;
	}
	obj.style.background = "#fff";
	return true;
}

/* 이메일 체크 */
function emailchk(obj,msg){
	var reg = new RegExp(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{1,}$/);
	if(reg.test(obj.value) == false){
		alert(msg);
		obj.focus();
		obj.style.background = "#fffdcd";
		return false;
	}
	obj.style.background = "#fff";
	return true;
}