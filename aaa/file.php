<?php

function getStatic(){
	static $i = 0;
	echo "1\n";
	$i++;
	if($i < 10){
		$fun = __FUNCTION__;
		$fun();
	}	
}

/**
 * 测试 在读取文件的时候 我去修改文件 下一次还能不能正常的读取
 */
function getContent(){
	static $i = 0;
	$j = rand(1,4);
	$filename = './file_' . $j . '.txt';
 

	$txt = file_get_contents($filename);
	file_put_contents($filename, $txt, FILE_APPEND);
	echo "读取文件" . $filename ."内容为:". $txt . "\n";
	sleep(10);
	$i++; 
	if($i < 30){
		$fun = __FUNCTION__;
		$fun();
	}
}

function getContent1(){
	static $i = 0;
	$filename = './file_1.txt';
	$txt = file_get_contents($filename);
	echo $txt . "\n";
	sleep(10);//在这个10秒内 我会重新修改 file1中的内容 
	if($i < 10){
		getContent1();
	}
	
}
getContent1();
