<?php
// $url = "http://www.test.com/biu/location.php";//执行一个跳转页面为什么不行呢??  自己写的域名都不知道对不对 没有前面的 www
$url = "http://test.com/biu/location.php";//执行一个跳转页面为什么不行呢??  自己写的域名都不知道对不对
// $url = "http://www.baidu.com";
// $cookie_file = tempnam('./temp', 'cookie');//D:\workspace\test\temp\coo5B38.tmp  这是一个路径 


$curlobj = curl_init();			// 初始化
curl_setopt($curlobj, CURLOPT_URL, $url);		// 设置访问网页的URL
curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, true);			// 执行之后不直接打印出来
// Cookie相关设置，这部分设置需要在所有会话开始之前设置
// date_default_timezone_set('PRC'); //使用cookie之前必须要设置时区
// curl_setopt($curlobj, CURLOPT_COOKIESESSION, TRUE); 
// curl_setopt($curlobj, CURLOPT_COOKIEFILE, $cookie_file);//使用cookie 
// curl_setopt($curlobj, CURLOPT_COOKIEJAR, $cookie_file);//生成cookie
// curl_setopt($curlobj, CURLOPT_HEADER, true);  // 有没有跳转 开启与关闭都行 只是多现实一个返回的请求头
curl_setopt($curlobj, CURLOPT_FOLLOWLOCATION, true); // 这样能够让cURL支持页面链接跳转 难道必须是 1 ??  不用 1 true都行  估计有个转换  这个跳转是必须有的 可能会去判断一下这个 referer吧  所以这个地方也需要去做一个动态的
// curl_setopt($curlobj, CURLOPT_MAXREDIRS, 10);

$output=curl_exec($curlobj);	// 执行
echo "runing curl...";

curl_close($curlobj);			// 关闭cURL
echo $output;


// // $url = "http://localhost/020space/test2.php";
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL,$url);
// // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 1);
// // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
// curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
// $rs = curl_exec($curl);
// echo "runing curl...";
// var_dump($rs);
// 
// 
// <?php
// function curlGet($url) {
//         $ch = curl_init();
//         curl_setopt($ch, CURLOPT_URL, $url);
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
//         curl_setopt($ch, CURLOPT_HEADER, true);
//         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
//         return curl_exec($ch);
// }

// $url = 'http://test.com/biu/location.php';
// echo curlGet($url) .  "\n";