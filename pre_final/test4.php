<?php
/**
 * 大量使用 代理ip 请求 weixin.sogou.com 
 * 主动寻求被封ip
 */

function spider(){
	static $i = 1;
	static $page = 1;
	$url = "weixin.sogou.com/weixin?type=2&query=头发&ie=utf-8&page=" . $page;
	// $url = "www.boolean.wang/test.php";

	$proxy = "217.147.90.216:8888";

	$cookiefile = dirname(__FILE__) . "/cookiefile1.txt";//存放的路径 绝对路径 服务器的??
			$header[] = "Connection: keep-alive";
			$header[] = "Pragma: no-cache";
			$header[] = "Cache-Control: no-cache";
			$header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8";
			$header[] = "Accept-Encoding: gzip, deflate, sdch";
			$header[] = "Accept-Language: zh-CN,zh;q=0.8,en;q=0.6";
	$curlObj = curl_init();
	curl_setopt($curlObj, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36');
	// curl_setopt($curlObj, CURLOPT_HTTPHEADER, $header);//带上这个 header反而不对了??
	curl_setopt($curlObj, CURLOPT_URL, $url);
	curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($curlObj,CURLOPT_PROXY,$proxy);

	curl_setopt($curlObj, CURLOPT_COOKIEJAR, $cookiefile);
	curl_setopt($curlObj, CURLOPT_COOKIEFILE, $cookiefile);

	curl_setopt($curlObj,  CURLOPT_FOLLOWLOCATION, 1);//支持跳转 有才条 没有就不跳
	curl_setopt($curlObj, CURLOPT_TIMEOUT, 10); 
	 

	$outPut = curl_exec($curlObj);
	curl_close($curlObj);
	// echo $outPut;
	$filename = "./really_" . $page . ".html";
	// $filename = "./really_" . time() . ".html";
	file_put_contents($filename, $outPut);
	// sleep(5);//来个变态 
	$i++;
	$page++;
	if($i < 10){
		$fun = __FUNCTION__;
		$fun();
	}
}

spider();


