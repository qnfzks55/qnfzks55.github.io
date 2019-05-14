/* :: LMJ PORTFOLIO :: (http://125.249.160.133/~abc/lmjportfolio) LMJ 100716 */

/* 플래시 */
function flash(url,w,h,id,bg,win){
	var str = 
		"<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0' width='"+w+"' height='"+h+"' id='"+id+"' align='middle'>"+
		"<param name='allowScriptAccess' value='sameDomain' />"+
		"<param name='allowFullScreen' value='false' />"+
		"<param name='movie' value='"+url+"' />"+
		"<param name='quality' value='high' />"+
		"<param name='bgcolor' value='"+bg+"' />"+
		"<param name='wmode' value='"+win+"' />"+
		"<embed src='"+url+"' quality='high' wmode='"+win+"' bgcolor='"+bg+"' width='"+w+"' height='"+h+"' name='"+id+"' align='middle' allowScriptAccess='sameDomain' allowFullScreen='false' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' />"+
		"</object>";

	document.write(str);
}

/* 프린트 */
function on_print(){
	window.print();
}

/* 경고창 */
function chkblank(obj,msg){
	if(!obj.value){
		alert(msg);
		obj.focus();
		obj.style.background = "#ffffd6";
		return false;
	}
	obj.style.background = '#fff';
	return true;
}

/* 아이디 체크 */
function chkid(obj,msg){
	var reg = new RegExp(/^[a-zA-Z0-9]{1,}$/);
	if(reg.test(obj.value) == false){
		alert(msg);
		obj.focus();
		obj.style.background = "#ffffd6";
		return false;
	}
	obj.style.background = '#fff';
	return true;
}

/* 숫자 체크 */
function chknum(obj,msg){
	var reg = new RegExp(/^[0-9]{1,}$/);
	if(reg.test(obj.value) == false){
		alert(msg);
		obj.focus();
		obj.style.background = "#ffffd6";
		return false;
	}
	obj.style.background = '#fff';
	return true;
}

/* 이메일 체크 */
function chkemail(obj,msg){
	var reg = new RegExp(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{1,}$/);
	if(reg.test(obj.value) == false){
		alert(msg);
		obj.focus();
		obj.style.background = '#ffffd6';
		return false;
	}
	obj.style.background = '#fff';
	return true;
}