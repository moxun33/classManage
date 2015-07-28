<?php
//$arr= urldecode(file_get_contents('php://input'));
$arr=$_POST['option'];
$length=count($arr);

for($i=0;$i<$length;$i++){
	echo $arr[$i]."<br>";
}