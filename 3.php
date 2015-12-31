<?php
header("content-type:text/html;charset=utf-8");
markTime('开始');
$fp = fsockopen('test.com',80,$error,$errstr,30);
$headers = "GET http://test.com/1.php\r\n HTTP/1.1\r\n Host: test.com\r\n";
fwrite($fp, $headers);//打开一个耗时脚本 比如发送邮件 
fclose($fp);
markTime('结束');

function markTime($str){
	echo '<pre>';
	echo $str . '计时' . time();
	echo '<pre/>';
}