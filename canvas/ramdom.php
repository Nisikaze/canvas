<?php
	$arr = range(0,50);
	shuffle($arr);
	echo $_GET['callback'].'('.$arr[0].')';
?>