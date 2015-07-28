<html>
<body>
<form name="form3" id="form1" action="add.php" method=""post">
<input type="text" name="option" value="a"><br>
<input type="text"name="option" value="b"><br>
<input type="text" name="option"  value="c"><br>
<input type="text" name="option"  value="d"><br>
<input name="allcheckboxs" type="hidden" value="e"><br>      <!–隐藏域,JS将会把值加在allcheckboxs–>
<input type="submit" name="Submit3" value="提交" onClick="return allcheckbox();">   <!–提交时会激活checkbox()函数–>
</form>
<script>
function allcheckbox()
{
form3.allcheckboxs.value = "";
if ( !form3.option.length ) // 只有一个复选框，form3.option.length = undefined
{
if ( form3.option.checked )
form3.allcheckboxs.value = form3.option.value;
}
else
{
for ( i = 0 ; i < form3.option.length ; i++ )
{
if ( form3.option(i).checked ) // 复选框中有选中的框
{
form3.allcheckboxs.value = form3.option(i).value;
for ( j = i + 1 ; j < form3.option.length ; j++ )
{
if ( form3.option(j).checked )
{
form3.allcheckboxs.value +=","; //用,做分割符
form3.allcheckboxs.value += form3.option(j).value;
}
}
break;
}
}
}
return true;
}
</script>
</body>
</html>
<?php
if ((isset($_POST["allcheckboxs"])) && ($_POST["allcheckboxs"] != "")) {
	
$allcheckboxs_val= explode(",", $_POST["allcheckboxs"]);
for ($i=0;$i<count($allcheckboxs_val);$i++){
echo $allcheckboxs_val[$i]."<br>";//arhwen.com
}
}
?>
