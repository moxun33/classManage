<!DOCTYPE html ">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>阿里西西_Web开发之家_alixixi.com</title>
</head>
<body>
<div id="d">



</div>

</body>
<input type="button" id="b" value="添加"/>
<script language="javascript">
var i = 1;
document.getElementById("b").onclick=function(){
  document.getElementById("d").innerHTML+='<div id="div_'+i+'"><form method="post"  action="post.php"><input name="text" name="text_'+i+'" type="text" value="'+i+'"  /><input type="button" value="删除"  onclick="del('+i+')"/><button type="submit" >提交</button>
</form></div>';
  i = i + 1;
}
function del(o){
 document.getElementById("d").removeChild(document.getElementById("div_"+o));
}
</script>
</html>
