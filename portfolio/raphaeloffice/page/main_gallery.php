<script type="text/javascript">
<!--

var myphoto = new Array(); 
 myphoto[1]="./office/PICT1673.JPG";
 myphoto[2]="./office/PICT1675.JPG";
 myphoto[3]="./office/PICT1676.JPG";
 myphoto[4]="./office/PICT1677.JPG";
 myphoto[5]="./office/PICT1678.JPG";
 myphoto[6]="./office/PICT1681.JPG";
 myphoto[7]="./office/PICT1684.JPG";
 myphoto[8]="./office/PICT1686.JPG";
 myphoto[9]="./office/PICT1689.JPG";
 myphoto[10]="./office/PICT1665.JPG";
 myphoto[11]="./office/PICT1664.JPG";
 myphoto[12]="./office/PICT1667.JPG";
 myphoto[13]="./office/PICT1668.JPG";

var count = 0;


function prev(){
 count--;
 if (count <= 0){
 alert("더이상 이미지가 없습니다.");
 count = 1;
 }

 document.images.photo.src = myphoto[count];  

}

function next(){
 count++;
 if (count >= myphoto.length){
    alert("더이상 이미지가 없습니다.");
    count = 10;
 }

 document.getElementById("photo").src = myphoto[count];  

}

//-->

</script>

<table width="200" height="73" style="margin:45px 0 0 4px;">
  <tr>
    <td><A HREF="javascript:prev()"><img src="./images/main_left.png" alt="이전" style="margin:0 8px 0 7px;" /></A></td>
    <td width="88" style="padding:3px 3px 3px 3px; border:1px solid #ccc;"><IMG SRC="./office/DSC00064.JPG" id="photo" width="200" height="104" BORDER="0" ALT=""></td>
    <td><A HREF="javascript:next()"><img src="./images/main_right.png" alt="다음" style="margin:0 0px 0 8px;" /></A></td>
  </tr>
</table>

