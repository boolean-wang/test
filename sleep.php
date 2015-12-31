<?php
	$arr = array("name","age","addr");
	$arr1 = array("lucy","23","beijing");
	var_dump($arr);
	ob_flush();
	flush();
	sleep(3);//这个是模拟出来 邮件发送的过程

	var_dump($arr1);
	ob_end_flush();
	// for($i=0;$i<10;$i++){
	// 	echo $i . "<br />";
	// 	ob_flush();
	// 	// flush();
	// 	sleep(1);
	// }
	// // ob_end_flush();

