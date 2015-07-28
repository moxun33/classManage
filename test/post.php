<?php
for($i=1;$i<5;$i++){
	$arr[]=$_POST["item".$i];
	echo $arr[$i-1];
}