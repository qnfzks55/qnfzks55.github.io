<div style="width:690px;">
	<div style="float:left;">
		<img src="../images/b_type.jpg" />
	</div>
	<div style="float:right; padding:5px 30px 0 0;">
		<img name="i0" width="367" height="230" alt="이미지 넣을 자리" src="../office/PICT1665.JPG" />
		<br />
		<br />
			 <!-- 썸네일의 주소를 src에, 큰이미지의 주소를 alt에 적는다 -->
		<img name="t0" src="../office/PICT1665.JPG" alt="../office/PICT1665.JPG" width="117" height="88">&nbsp;
		<img name="t1" src="../office/PICT1663.JPG" alt="../office/PICT1663.JPG"  width="117" height="88">&nbsp;
		<img name="t2" src="../office/PICT1675.JPG" width="117" height="88" alt="../office/PICT1675.JPG">&nbsp;

		<script type="text/javascript">
		document.body.onmouseover=function(){
		 e=event.srcElement; //롤오버가 생기는 이벤트 객체
		 if(e.tagName=='IMG'&&e.name.charAt(0)=='t'){ //이벤트객체의 태그명이 img 이고, 이름이 t로 시작하면
		  document.images.i0.src=e.alt; //뷰어의 이미지 지정
		 }
		}
		</script>
	</div>
</div>


