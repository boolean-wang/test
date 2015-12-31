<?php
$url = "weixin.sogou.com/weixin?type=2&query=头发&ie=utf-8&page=7";
// $url = "weixin.sogou.com/websearch/art.jsp?sg=Tenkeiq5lOTjp37a4cCkw3Dk2n5WSX3-PaShlL_6u7L8B0hvjdt6YNnYIJVCgwjNQwLyPc8bCeQwin_h2gy9C2zxLBYPk37gxKi2BpCETT4.&url=p0OVDH8R4SHyUySb8E88hkJm8GF_McJfBfynRTbN8wgfbjpw6Fzynw9mVEBS55DjTlCIIgb6R8_hhEAA_BNIG_wjqI9vhGJjB67wXlkVy016QLlTA6YBCJk4VVL-lK4u2rz6sloDY3BYy-5x5In7jJFmExjqCxhpkyjFvwP6PuGcQ64lGQ2ZDMuqxplQrsbk";// 需要处理一下这个地址 .&amp
// $url = "test.com/pre_final/test2.php"; //这个域名居然能写成 test.php/pre_final

$cookiefile = dirname(__FILE__) . "/cookiefile1.txt";//存放的路径 绝对路径 服务器的??
		$header[] = "Connection: keep-alive";
		$header[] = "Pragma: no-cache";
		$header[] = "Cache-Control: no-cache";
		$header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8";
		$header[] = "Accept-Encoding: gzip, deflate, sdch";
		$header[] = "Accept-Language: zh-CN,zh;q=0.8,en;q=0.6";
$curlObj = curl_init();
// curl_setopt($curlObj, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36');
// curl_setopt($curlObj, CURLOPT_HTTPHEADER, $header);//带上这个 header反而不对了??
curl_setopt($curlObj, CURLOPT_URL, $url);
curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);

// curl_setopt($curlObj, CURLOPT_COOKIEJAR, $cookiefile);
// curl_setopt($curlObj, CURLOPT_COOKIEFILE, $cookiefile);

curl_setopt($curlObj,  CURLOPT_FOLLOWLOCATION, 1);//支持跳转 有才条 没有就不跳
curl_setopt($curlObj, CURLOPT_TIMEOUT, 10); 
 

//这里我强制发送一个 cookie 
// curl_setopt($curlObj, CURLOPT_COOKIESESSION, 1);
curl_setopt($curlObj, CURLOPT_COOKIE, "SUV=00A479EE72F0748656834CDDD8B15134; ABTEST=0|1451445469|v1; SNUID=43B035B6C5C1ECD03F663DD9C572A8CF; IPLOC=CN1100; SUID=8674F0726F1C920A0000000056834CDD; SUID=8674F0721524900A0000000056834CE7; weixinIndexVisited=1; ppinf=5|1451445540|1452655140|Y2xpZW50aWQ6NDoyMDE3fGNydDoxMDoxNDUxNDQ1NTQwfHJlZm5pY2s6MzY6JUU2JTlCJUI0JUU2JTk0JUJFJUU0JUJEJTg2JUU2JTk4JUFGfHRydXN0OjE6MXx1c2VyaWQ6NDQ6NzJFRjdFQzQ4NjcyRDMzOUZBRjBDQzQ5NEYwOUY2MTNAcXEuc29odS5jb218dW5pcW5hbWU6MzY6JUU2JTlCJUI0JUU2JTk0JUJFJUU0JUJEJTg2JUU2JTk4JUFGfA; pprdig=RxLIy-rMtqjZ-Mp5DCWw9szFGbXoomP1EcmmZibm046MUYEzy2oMeYhhlxZe1u56t0honrQ_7bGQOprm0DvJ0Y-_ZwtEc1UEOrTOHF7cQwaUOwu3txuzy9_aEzcmzZaeXF5pavViNvc-u0SHAVN5HxokeJD8qe85nLZuHe5Kh-Q; ppmdig=14514455400000008e7cf2c83dcdbaca7a0f41ad6a880095; sct=1");

$outPut = curl_exec($curlObj);
curl_close($curlObj);
file_put_contents("./really.txt", $outPut);

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// // curl_setopt($ch, CURLOPT_HEADER, 0);//这个可以不要 
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_COOKIE, "a=b; c=d11111111; dd=233");//需要带上空格
// $content = curl_exec($ch);
// var_dump($content);
// curl_close($ch);


