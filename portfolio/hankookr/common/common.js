/* ÇÃ·¡½Ã */
function flash(url,w,h,id){
 var str = 
  '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="'+w+'" height="'+h+'" id="'+id+'" align="middle">'+
  '<param name="allowScriptAccess" value="sameDomain" />' +
  '<param name="allowFullScreen" value="false" />' +
  '<param name="movie" value="'+url+'" />'+
  '<param name="quality" value="high" />'+
  '<param name="bgcolor" value="#ffffff" />' +
  '<param name="wmode" value="transparent" />'+
  '<embed src="'+url+'" quality="high" wmode="transparent" bgcolor="#ffffff" width="'+w+'" height="'+h+'" name="'+id+'" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'+
  '</object>';
 document.write(str);
}