<?php
$type = "2";// 1、微信号  2、微信内容
$page = "1";
$query = "头发";
$url = "weixin.sogou.com/weixin?type=" . $type . "&query=" . $query . "&ie=utf-8&page=" . $page;//$page 需要有一个 循环 

$cookie = "ABTEST=8|1450858615|v1; IPLOC=CN1101; SUID=BBE0DDDD6B20900A00000000567A5877; SUID=BBE0DDDD5FC00D0A00000000567A5878; weixinIndexVisited=1; SUV=00886404DDDDE0BB567A587854427331; ppinf=5|1450858637|1452068237|Y2xpZW50aWQ6NDoyMDE3fGNydDoxMDoxNDUwODU4NjM3fHJlZm5pY2s6MzY6JUU2JTlCJUI0JUU2JTk0JUJFJUU0JUJEJTg2JUU2JTk4JUFGfHRydXN0OjE6MXx1c2VyaWQ6NDQ6NzJFRjdFQzQ4NjcyRDMzOUZBRjBDQzQ5NEYwOUY2MTNAcXEuc29odS5jb218dW5pcW5hbWU6MzY6JUU2JTlCJUI0JUU2JTk0JUJFJUU0JUJEJTg2JUU2JTk4JUFGfA; pprdig=uXNxq5TQxKLHRt2MGpc9Y0YW7xc0VxqxhkYJqSwOpkbhBIK14XiyQhfgQMVqLJKKz10Rl8Qz_kfMS9wwLOsTFQHl1NC-DCAw23pnlgD3SEc5SZaDOx_00R9BY9PTTKjWY7MMRQbuXRCeZztHUZRWMToczM77fMK0FNlTy7qeczc; ppmdig=14508586370000003629de7e93bb1a398e9fd1b88845e8a6; sct=1; SNUID=AEF4C8C81410339849FA9A8F153BB434; LSTMV=193%2C170; LCLKINT=48693";//这个 是需要人工去取得的 

$tempFile = "./tempFile"; //保存在当前目录的 temFile 文件当中

$curlObj = curl_init();
curl_setopt($curlObj, CURLOPT_URL, $url);
curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlObj,  CURLOPT_FOLLOWLOCATION, 1);//支持跳转 有才条 没有就不跳
curl_setopt($curlObj, CURLOPT_COOKIE, $cookie);
$outPut = curl_exec($curlObj);
if(file_put_contents($tempFile, $outPut)){
	//如果写入文件成功 调用分析类进行页面分析 拿出列表页的数据 
	$urls = [];
		//再去调用 curl //之前那个tempfile 已经可以覆盖了
		//打开文件 分析文件 取得所有的 内容
		//对内容进行整理 把 title time author 这些东西拿出来

	//当所有的文件
}else{
	echo "列表页写入失败";
	exit;
}

//分析类  在文件当中取得 遍历出来的 url 链接 

for($i = 0; $i < 1000; $i++){
	$page = $i;
}


